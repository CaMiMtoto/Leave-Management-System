@extends('layouts.master')

@section('content')
    <!-- resources/views/approval-levels/index.blade.php -->

    <table class="table">
        <thead>
        <tr>
            <th>User</th>
            <th>Approval Level</th>
        </tr>
        </thead>
        <tbody>
        @foreach($approvalLevels as $approvalLevel)
            <tr>
                <td>{{ $approvalLevel->user->name }}</td>
                <td>{{ $approvalLevel->level }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
