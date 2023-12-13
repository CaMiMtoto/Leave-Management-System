<?php

namespace App\Http\Controllers;

use App\Models\LeaveApplication;
use App\Models\LeaveApplicationComment;
use App\Models\LeaveType;
use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{

    public function index()
    {
        // Get the logged-in user
        $user = auth()->user();

        // Retrieve pending and under review leave applications for any of the user's approval levels
        $pendingLeaves = LeaveApplication::whereIn('status', ['pending', 'under review'])
            ->whereIn('approval_level', $user->approvalLevels->pluck('level'))
            ->get();

        return view('leave.applications.index', ['pendingLeaves' => $pendingLeaves]);
    }


    public function applyLeave(Request $request)
    {
        // Validate and store leave application
        $request->validate([
            'leave_type_id' => 'required|exists:leave_types,id',
            'reason' => 'required|string',
        ]);

        $leaveType = LeaveType::query()->find($request->input('leave_type_id'));

        $approvalLevel = $leaveType ? $leaveType->default_approval_level : 1;

        $leaveApplication = auth()->user()->employee()->leaveApplications()->create([
            'leave_type_id' => $request->input('leave_type_id'),
            'reason' => $request->input('reason'),
            'approval_level' => $approvalLevel,
            'status' => 'pending',
        ]);

        // Other logic for notifying admin or managers, etc.

        return redirect()->route('leave.history')->with('success', 'Leave application submitted successfully.');
    }

    public function approveLeave(LeaveApplication $leaveApplication)
    {
        $action = \request('action');
        // Validate authorization (e.g., check if the user has permission to approve at this level)

        // Ensure the action is valid
        if (!in_array($action, ['approve', 'reject'])) {
            return redirect()->route('leave.applications')->with('error', 'Invalid action.');
        }

        // Update approval level and status based on the action
        $nextApprovalLevel = $action === 'approve' ? $leaveApplication->approval_level + 1 : $leaveApplication->approval_level;
        $status = $action === 'approve' ? ($nextApprovalLevel > $leaveApplication->leaveType->default_approval_level ? 'approved' : 'pending') : 'rejected';

        // Save comment
        $comment = request('comment');
        $user = auth()->user();

        LeaveApplicationComment::create([
            'leave_application_id' => $leaveApplication->id,
            'comment' => $comment,
            'user_id' => $user->id,
            'status' => $status
        ]);

        // Update the leave application
        $leaveApplication->update([
            'approval_level' => $nextApprovalLevel,
            'status' => $status,
        ]);

        // Notify or perform other logic based on the action

        return redirect()->route('leave.applications')->with('success', 'Leave application ' . $action . 'd.');
    }

    public function details(LeaveApplication $leaveApplication)
    {
        return view('leave.applications.details', compact('leaveApplication'));
    }
}
