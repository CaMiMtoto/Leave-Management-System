<!-- resources/views/leave/applications/approve.blade.php -->

@extends('layouts.master')

@section('content')
    <div class="container">
        <h2>Approve/Reject Leave Application</h2>

        <form method="POST"
              action="{{ route('leave.approve', ['leaveApplication' => $leaveApplication->id, 'action' => 'approve']) }}">
            @csrf

            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" class="form-control" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Approve</button>
        </form>
    </div>
@endsection
