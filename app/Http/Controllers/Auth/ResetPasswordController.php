<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected string $redirectTo = RouteServiceProvider::HOME;

    public function setPasswordForm(Request $request)
    {
        // Get the user ID from the request URL
        $userId = $request->route('user');

        // Find the user by ID
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            abort(404, 'User not found.');
        }

        // Pass the user to the view and render the form
        return view('auth.set_password_form', ['user' => $user]);
    }

    public function setPassword(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'password' => 'required|string|min:8|confirmed',
        ]);

        // Get the user ID from the request URL
        $userId = $request->route('user');

        // Find the user by ID
        $user = User::find($userId);

        // Check if the user exists
        if (!$user) {
            abort(404, 'User not found.');
        }

        // Update the user's password
        $user->update([
            'password' => bcrypt($request->input('password')),
        ]);

        // Log in the user (optional)
        Auth::login($user);

        // Redirect the user to the dashboard or another page
        return redirect('/dashboard')->with('success', 'Password set successfully. You are now logged in.');
    }
}
