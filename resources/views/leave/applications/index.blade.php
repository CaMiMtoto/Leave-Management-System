<!-- resources/views/leave/applications/index.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Pending Leave Applications</h2>

        @if ($pendingLeaves->isEmpty())
            <p>No pending leave applications for your approval.</p>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>User</th>
                    <th>Leave Type</th>
                    <th>Reason</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pendingLeaves as $leave)
                    <tr>
                        <td>{{ $leave->id }}</td>
                        <td>{{ $leave->user->name }}</td>
                        <td>{{ $leave->leaveType->name }}</td>
                        <td>{{ $leave->reason }}</td>
                        <td>
                            <a href="{{ route('leave.approve', ['leaveApplication' => $leave->id]) }}"
                               class="btn btn-success">Approve</a>
                            <!-- Add link to reject or other actions if needed -->
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
