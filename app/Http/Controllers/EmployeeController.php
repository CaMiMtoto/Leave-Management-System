<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use App\Mail\PasswordReset;
use App\Models\Employee;
use App\Models\User;
use App\Notifications\UserCreatedNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function store(StoreEmployeeRequest $request)
    {
        $data = $request->validated();

        // Create a new user
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make(Str::random(12)), // Auto-generate a random password
        ]);

        // Create a new employee and associate it with the user
        $employee = $user->employee()->create([
            'name' => $request->input('name'),
            // Add other fields as needed
        ]);

        // Send an email to the user with a link to reset their password
        $this->sendPasswordResetEmail($user);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
