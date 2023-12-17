<!-- resources/views/auth/set_password_form.blade.php -->

@extends('layouts.app')  <!-- Assuming you have a layout file for your application -->

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">

                        <h4>
                            Set Your Password
                        </h4>
                        <p>
                            Please set your password to continue.
                        </p>

                        <form method="POST" action="{{ route('set-password', ['user' => $user->id]) }}">
                            @csrf

                            <div class="mt-4">
                                <label for="password" class="col-form-label text-md-right">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required
                                       autocomplete="new-password">
                            </div>

                            <div class="mt-4">
                                <label for="password_confirmation" class="col-form-label text-md-right">Confirm
                                    Password</label>
                                <input id="password_confirmation" type="password" class="form-control"
                                       name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="mt-4 mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Set Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
