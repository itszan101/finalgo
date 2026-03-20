<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Api\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    /*
    | LOGIN
    */

    public function login(Request $request)
    {
        $result = $this->authService->login(
            $request->email,
            $request->password
        );

        if (!$result['success']) {
            return back()->withErrors([
                'email' => $result['message']
            ]);
        }

        $token = $result['data']['token'];

        session([
            'api_token' => $token
        ]);

        return redirect()->route('dashboard');
    }

    public function viewLogin()
    {
        return view('auth.login');
    }

    /*
    | REGISTER
    */

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $response = $this->authService->register(
            $request->first_name,
            $request->last_name,
            $request->email,
            $request->password,
            $request->password_confirmation
        );

        if (!$response['success']) {
            return back()->withErrors([
                'email' => $response['message']
            ])->withInput();
        }

        return redirect()->route('login')->with('success', 'Register berhasil');
    }

    public function viewRegister()
    {
        return view('auth.register');
    }

    /*
    | FORGOT PASSWORD
    */

    public function forgot()
    {
        return view('auth.forgot');
    }

    public function sendResetLink(Request $request)
    {
        $result = $this->authService->forgotPassword($request->email);

        if (!$result['success']) {
            return back()->withErrors([
                'email' => 'Email tidak ditemukan'
            ]);
        }

        return back()->with('success', 'Link reset password telah dikirim.');
    }

    /*
    | RESET PASSWORD
    */

    public function resetView(Request $request)
    {
        return view('auth.reset', [
            'token' => $request->token,
            'email' => $request->email
        ]);
    }

    public function resetPassword(Request $request)
    {
        $result = $this->authService->resetPassword([
            'token' => $request->token,
            'email' => $request->email,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation
        ]);

        if (!$result['success']) {
            return back()->withErrors([
                'password' => 'Reset password gagal'
            ]);
        }

        return redirect()
            ->route('login')
            ->with('success', 'Password berhasil diubah, silakan login kembali.');
    }

    /*
    | LOGOUT
    */

    public function logout()
    {
        $token = session('api_token');

        $this->authService->logout($token);

        session()->forget('api_token');

        return redirect()->route('login');
    }
}
