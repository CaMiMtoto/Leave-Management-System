<?php

namespace App\Http\Controllers;

use App\Models\ApprovalLevel;
use App\Models\User;
use Illuminate\Http\Request;

class ApprovalLevelController extends Controller
{
    public function index()
    {
        $approvalLevels = ApprovalLevel::with('user')->get();
        return view('approval-levels.index', compact('approvalLevels'));
    }

    public function create()
    {
        $users = User::all();
        $approvalLevels = range(1, 4); // Assuming you have 4 approval levels, adjust as needed
        return view('approval-levels.create', compact('users', 'approvalLevels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'approval_levels' => 'required|array',
            'approval_levels.*' => 'integer|min:1',
        ]);


        $user = User::findOrFail($request->input('user_id'));
        // Delete existing ApprovalLevel records for the user
        $user->approvalLevels()->delete();
        // Create a new ApprovalLevel record for the user
        foreach ($request->input('approval_levels') as $level) {
            $user->approvalLevels()->create([
                'level' => $level,
            ]);
        }

        return redirect()->route('approval-levels.index')->with('success', 'User assigned to approval levels successfully.');
    }
}
