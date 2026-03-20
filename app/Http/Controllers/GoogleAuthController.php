<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GoogleAuthController extends Controller
{

    public function login(Request $request)
    {

        $request->validate([
            'credential' => 'required'
        ]);

        $backend = Http::post(
            env('API_BASE_URL') . '/auth/google',
            [
                'id_token' => $request->credential
            ]
        );

        if (!$backend->ok()) {

            return redirect()
                ->route('login')
                ->withErrors('Login Google gagal');
        }

        $data = $backend->json();

        session([
            'api_token' => $data['token'],
            'user' => $data['user']
        ]);

        return redirect('/dashboard');
    }
}
