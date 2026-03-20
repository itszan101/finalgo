@extends('layouts.auth')

@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
@endpush

@section('content')
    <div
        class="max-w-[1000px] w-full bg-white dark:bg-slate-900 rounded shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[600px]">

        {{-- LEFT SIDE --}}
        <div class="hidden md:flex md:w-1/2 bg-primary/10 flex-col justify-between p-12 relative overflow-hidden">

            <div>
                <h1 class="text-4xl font-bold text-slate-900 mb-6">
                    Reset Kata Sandi
                </h1>

                <p class="text-slate-600 text-lg">
                    Masukkan kata sandi baru untuk mengamankan kembali akun Anda.
                </p>
            </div>

            <div class="mt-auto">
                <img class="w-full object-contain"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtr8Djv5U4Wg6KYLXIHpM9PNdajKOAJ4xW6aLeDICDpK5G8pKxY64-FV5WfmNqQZ6pa_kILyth8YEDGPkkVjhVocBv_y2DAc9cfVivJRikBHiGZl0lQQm-R5OzxpRgNqHLvXaUmKds73PqyjAfu36BOR8jrG34P8DvR6pQBnYVV-354wl8bWqkSaoAp77D3qKpovxvuzXn1EW5Yozut80fnPBaIY0e-TQ3lvaqORU7zVRu1mK-3-y8HACFIH645F2f_mA_Ej-G3rY">
            </div>

        </div>

        {{-- RIGHT SIDE --}}
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">

            <div class="max-w-md mx-auto w-full">

                <div class="mb-10">
                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-3">
                        Buat Password Baru
                    </h2>

                    <p class="text-slate-500 dark:text-slate-400">
                        Masukkan password baru untuk akun Anda.
                    </p>
                </div>

                <form method="POST" action="{{ route('reset-password') }}" class="space-y-6">

                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    {{-- EMAIL --}}
                    <div class="flex flex-col gap-2">
                        <label class="text-sm font-semibold text-slate-800 dark:text-slate-200">
                            Email
                        </label>

                        <input name="email" type="email" value="{{ old('email', $email) }}" required
                            class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary" />

                        @error('email')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- PASSWORD --}}
                    <div class="flex flex-col gap-2 relative">
                        <label class="text-sm font-semibold text-slate-800 dark:text-slate-200">
                            Password Baru
                        </label>

                        <div class="relative">

                            <input id="password" name="password" type="password" placeholder="Masukkan password baru Anda"
                                class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                            <button type="button" id="togglePassword"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>

                        </div>

                        @error('password')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- CONFIRM PASSWORD --}}
                    <div class="flex flex-col gap-2 relative">
                        <label class="text-sm font-semibold text-slate-800 dark:text-slate-200">
                            Konfirmasi Password
                        </label>

                        <div class="relative">

                            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Konfimasi password baru Anda"
                                class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                            <button type="button" id="togglePassword"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>

                        </div>

                    </div>

                    {{-- BUTTON --}}
                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded transition-all shadow-lg shadow-primary/20">
                        Reset Password
                    </button>

                </form>

                <div class="mt-8 text-center">

                    <a href="{{ route('login') }}"
                        class="text-slate-600 hover:text-primary font-medium flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">arrow_back</span>
                        Kembali ke Login
                    </a>

                </div>

            </div>
        </div>

    </div>

    {{-- TOGGLE PASSWORD SCRIPT --}}
    <script>
        function togglePassword(id) {

            const input = document.getElementById(id)

            if (input.type === "password") {
                input.type = "text"
            } else {
                input.type = "password"
            }

        }
    </script>
@endsection
