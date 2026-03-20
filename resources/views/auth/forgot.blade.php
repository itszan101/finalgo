@extends('layouts.auth')
@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
@endpush
@section('content')
    <div
        class="max-w-[1000px] w-full bg-white dark:bg-slate-900 rounded shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[600px]">
        <!-- LEFT SIDE -->
        <div class="hidden md:flex md:w-1/2 bg-primary/10 flex-col justify-between p-12 relative overflow-hidden">

            <div class="z-10">

                <div class="flex items-center gap-3 text-primary mb-12">

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

                <h1 class="text-4xl font-bold leading-tight text-slate-900 mb-6">
                    Amankan Kembali Akunmu
                </h1>

                <p class="text-slate-600 text-lg leading-relaxed">
                    Keamanan data Anda adalah prioritas kami. Ikuti langkah sederhana ini
                    untuk mengatur ulang kata sandi Anda dengan aman.
                </p>

            </div>
            <!-- Abstract Background Decorative Elements -->
            <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
            <div class="absolute -top-20 -right-20 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
            <div class="relative z-10 mt-auto">

                <div
                    class="w-full aspect-square bg-white/50 rounded-xl flex items-center justify-center p-8 backdrop-blur-sm">

                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtr8Djv5U4Wg6KYLXIHpM9PNdajKOAJ4xW6aLeDICDpK5G8pKxY64-FV5WfmNqQZ6pa_kILyth8YEDGPkkVjhVocBv_y2DAc9cfVivJRikBHiGZl0lQQm-R5OzxpRgNqHLvXaUmKds73PqyjAfu36BOR8jrG34P8DvR6pQBnYVV-354wl8bWqkSaoAp77D3qKpovxvuzXn1EW5Yozut80fnPBaIY0e-TQ3lvaqORU7zVRu1mK-3-y8HACFIH645F2f_mA_Ej-G3rY"
                        class="w-full h-full object-contain">

                </div>

            </div>

        </div>



        <!-- RIGHT SIDE -->
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center bg-white dark:bg-slate-900">

            <div class="max-w-md mx-auto w-full">

                <div class="mb-10">

                    <h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-3">
                        Lupa Kata Sandi?
                    </h2>

                    <p class="text-slate-500 dark:text-slate-400">
                        Masukkan email Anda untuk menerima link reset password.
                    </p>

                </div>


                <form method="POST" action="{{ route('send-reset-link') }}" class="space-y-6">

                    @csrf

                    @if (session('success'))
                        <div class="p-3 text-sm text-green-700 bg-green-100 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="p-3 text-sm text-red-700 bg-red-100 rounded">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <!-- EMAIL -->
                    <div class="flex flex-col gap-2">

                        <label class="text-slate-800 dark:text-slate-200 text-sm font-semibold">
                            Email
                        </label>

                        <input type="email" name="email" value="{{ old('email') }}" required
                            placeholder="nama@email.com"
                            class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                        @error('email')
                            <span class="text-sm text-red-500">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>


                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                        Kirim Link Reset
                    </button>

                </form>



                <div class="mt-8 pt-8 border-t border-slate-100 dark:border-slate-800">

                    <a href="{{ route('login') }}"
                        class="group flex items-center justify-center gap-2 text-slate-600 dark:text-slate-400 hover:text-primary transition-colors font-medium">

                        <span class="material-symbols-outlined text-[20px] group-hover:-translate-x-1 transition-transform">
                            arrow_back
                        </span>

                        Kembali ke Halaman Masuk

                    </a>

                </div>

            </div>

        </div>

    </div>
@endsection
