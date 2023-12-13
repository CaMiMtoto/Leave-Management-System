@extends('layouts.master')
@section('content')
    <!-- resources/views/approval-levels/create.blade.php -->

    <form method="post" action="{{ route('approval-levels.store') }}">
        @csrf

        <div class="form-group">
            <label for="user_id">Select User:</label>
            <select name="user_id" id="user_id" class="form-control">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Approval Levels:</label><br>
            @foreach($approvalLevels as $level)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="approval_levels[]" value="{{ $level }}">
                    <label class="form-check-label">{{ $level }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-primary">Assign User</button>
    </form>

@endsection
