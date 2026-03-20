<?php

namespace App\Services\Api;

use Illuminate\Support\Facades\Http;

class AuthService
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl = config('services.backend.base_url');
    }

    public function login($email, $password)
    {
        $response = Http::post($this->baseUrl . '/login', [
            'email' => $email,
            'password' => $password
        ]);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => $response->json()['message'] ?? 'Login gagal'
            ];
        }

        return [
            'success' => true,
            'data' => $response->json()
        ];
    }

    public function register($first_name, $last_name, $email, $password, $password_confirmation)
    {
        $response = Http::asJson()
            ->acceptJson()
            ->post($this->baseUrl . '/register', [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'password' => $password,
                'password_confirmation' => $password_confirmation
            ]);

        if ($response->failed()) {
            return [
                'success' => false,
                'message' => $response->json()['message'] ?? 'Register gagal'
            ];
        }

        return [
            'success' => true,
            'data' => $response->json()
        ];
    }

    public function forgotPassword($email)
    {
        $response = Http::post($this->baseUrl . '/forgot-password', [
            'email' => $email
        ]);

        return [
            'success' => !$response->failed(),
            'data' => $response->json()
        ];
    }

    public function resetPassword($data)
    {
        $response = Http::post($this->baseUrl . '/reset-password', $data);

        return [
            'success' => !$response->failed(),
            'data' => $response->json()
        ];
    }

    public function logout($token)
    {
        Http::withToken($token)
            ->post($this->baseUrl . '/logout');

        return true;
    }
}
