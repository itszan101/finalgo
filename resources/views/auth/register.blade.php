@extends('layouts.auth')
@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
@endpush
@section('content')
    <div
        class="max-w-[1000px] w-full bg-white dark:bg-slate-900 rounded shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[700px]">
        <!-- LEFT SIDE -->
        <div class="hidden md:flex md:w-1/2 bg-primary/10 flex-col justify-between p-12 relative overflow-hidden">

            <div class="z-10">

                <div class="flex items-center gap-3 text-primary mb-8">
                    <div class="size-8">
                        <svg fill="currentColor" viewBox="0 0 48 48">
                            <path
                                d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z" />
                        </svg>
                    </div>

                    <h2 class="text-2xl font-bold tracking-tight text-slate-900">
                        Finalgo
                    </h2>
                </div>

                <h1 class="text-3xl font-bold leading-tight text-slate-900 mb-4">
                    Mulai Perjalanan Finansialmu
                </h1>

                <p class="text-slate-600 text-lg">
                    Kelola pengeluaran dan buat anggaran lebih teratur untuk mencapai kebebasan finansial.
                </p>

            </div>

            <div class="">
                <div
                    class="w-full aspect-square bg-white/50 rounded-xl flex items-center justify-center p-8 backdrop-blur-sm">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtr8Djv5U4Wg6KYLXIHpM9PNdajKOAJ4xW6aLeDICDpK5G8pKxY64-FV5WfmNqQZ6pa_kILyth8YEDGPkkVjhVocBv_y2DAc9cfVivJRikBHiGZl0lQQm-R5OzxpRgNqHLvXaUmKds73PqyjAfu36BOR8jrG34P8DvR6pQBnYVV-354wl8bWqkSaoAp77D3qKpovxvuzXn1EW5Yozut80fnPBaIY0e-TQ3lvaqORU7zVRu1mK-3-y8HACFIH645F2f_mA_Ej-G3rY"
                        class="w-full h-full object-contain">
                </div>
            </div>

            <!-- Abstract Background Decorative Elements -->
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center overflow-y-auto">

            <div class="max-w-md mx-auto w-full">

                <div class="mb-8 text-center md:text-left">
                    <h2 class="text-3xl font-bold text-slate-900 mb-2">
                        Daftar Akun Baru
                    </h2>

                    <p class="text-slate-500">
                        Lengkapi data di bawah ini untuk memulai.
                    </p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-4">

                    @csrf

                    <!-- FIRST NAME -->
                    <div class="flex flex-col gap-1.5">

                        <label class="text-sm font-semibold text-slate-800">
                            Nama Depan
                        </label>

                        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="John" required
                            class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                        @error('first_name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror

                    </div>


                    <!-- LAST NAME -->
                    <div class="flex flex-col gap-1.5">

                        <label class="text-sm font-semibold text-slate-800">
                            Nama Belakang
                        </label>

                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Doe" required
                            class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                        @error('last_name')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror

                    </div>


                    <!-- EMAIL -->
                    <div class="flex flex-col gap-1.5">

                        <label class="text-sm font-semibold text-slate-800">
                            Email
                        </label>

                        <input type="email" name="email" value="{{ old('email') }}" placeholder="nama@email.com"
                            required
                            class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                        @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror

                    </div>


                    <!-- PASSWORD -->
                    <div class="flex flex-col gap-1.5">

                        <label class="text-sm font-semibold text-slate-800">
                            Password
                        </label>

                        <div class="relative">

                            <input id="password" type="password" name="password" required placeholder="Minimal 8 karakter"
                                class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                            <button type="button" id="togglePassword"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">

                                <span class="material-symbols-outlined text-[20px]">visibility</span>

                            </button>

                        </div>

                        @error('password')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror

                    </div>


                    <!-- CONFIRM PASSWORD -->
                    <div class="flex flex-col gap-2 relative">

                        <label class="text-sm font-semibold text-slate-800">
                            Konfirmasi Password
                        </label>

                        <div class="relative">

                            <input id="password_confirmation" name="password_confirmation" type="password" required
                                placeholder="Konfirmasi password"
                                class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                            <button type="button" id="togglePasswordConfirm"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">

                                <span class="material-symbols-outlined text-[20px]">visibility</span>

                            </button>

                        </div>

                    </div>


                    <!-- TERMS -->
                    <div class="flex items-start gap-3 pt-4 pb-4">

                        <input type="checkbox" name="terms" required
                            class="w-4 h-4 rounded border-slate-300 text-primary">

                        <label class="text-sm text-slate-600">
                            Saya setuju dengan
                            <a href="#" class="text-primary font-semibold hover:underline">
                                Syarat & Ketentuan
                            </a>
                        </label>

                    </div>


                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded shadow-lg shadow-primary/20">
                        Daftar
                    </button>

                </form>

                @error('password_confirmation')
                    <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror

                <p class="text-center text-slate-600 mt-6">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-primary font-bold hover:underline">
                        Masuk
                    </a>
                </p>

            </div>

        </div>
    </div>
@endsection
