<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeesDataTable;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Models\Employee;
use App\Models\User;
use App\Notifications\UserCreatedNotification;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Yajra\DataTables\EloquentDataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\Exceptions\Exception;

class EmployeeController extends Controller
{


    /**
     * Display a listing of the resource.
     * @throws Exception
     * @throws \Exception
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Employee::with('user')->select('employees.*');
            return datatables()
                ->of($query)
                ->addColumn('action', function ($employee) {
                    $id = $employee->id;
                    return view('employees.datatables.action', compact('employee', 'id'));
                })
                ->editColumn('created_at', function ($employee) {
                    return $employee->created_at->format('d-m-Y');
                })
                ->editColumn('status', function ($employee) {
                    $status = $employee->status == 'active' ? 'success' : 'danger';
                    return "<span class='badge  rounded-pill text-{$status}-emphasis bg-{$status}-subtle'>{$employee->status}</span>";
                })
                ->rawColumns(['action', 'status'])
                ->make(true);
        }
        return view('employees.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * @throws \Throwable
     */
    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();
        DB::beginTransaction();
        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make(Str::random(12)), // Auto-generate a random password
        ]);

        // Create a new employee and associate it with the user
        $employee = $user->employee()->create([
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'position' => $request->input('position'),
        ]);
        DB::commit();

        // Send an email to the user with a link to reset their password
        $this->sendPasswordResetEmail($user);

        if ($request->ajax()) {
            return response()->json(['message' => 'Employee created successfully. Check your email for the password reset link.']);
        }
        return redirect()->route('employees.index')->with('success', 'Employee created successfully. Check your email for the password reset link.');
    }

    private function sendPasswordResetEmail(User $user)
    {
        $user->notify(new UserCreatedNotification());
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return $employee;
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(StoreEmployeeRequest $request, Employee $employee)
    {
        $data = $request->validated();
        $employee->user()->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ]);
        $employee->update([
            'address' => $request->input('address'),
            'phone' => $request->input('phone'),
            'position' => $request->input('position'),
        ]);

        if ($request->ajax()) {
            return response()->json(['message' => 'Employee updated successfully.']);
        }

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->user()->delete();
        if (request()->ajax()) {
            return response()->json(['message' => 'Employee deleted successfully.']);
        }
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
