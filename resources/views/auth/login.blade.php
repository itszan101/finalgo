@extends('layouts.auth')
@push('styles')
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
@endpush
@section('content')
    <div
        class="max-w-[1000px] w-full bg-white dark:bg-slate-900 rounded shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[600px]">

        {{-- LEFT SIDE --}}
        <div class="hidden md:flex md:w-1/2 bg-primary/10 flex-col justify-between p-12 relative overflow-hidden">

            <div class="z-10">

                <div class="flex items-center gap-3 text-primary mb-8">
                    <div class="size-8">
                        <svg fill="currentColor" viewBox="0 0 48 48">
                            <path
                                d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z">
                            </path>
                        </svg>
                    </div>

                    <h2 class="text-2xl font-bold tracking-tight text-slate-900">
                        Finalgo
                    </h2>

                </div>

                <h1 class="text-3xl font-bold leading-tight text-slate-900 mb-4">
                    Kelola Keuangan Jadi Lebih Mudah
                </h1>

                <p class="text-slate-600 text-lg">
                    Pantau pengeluaran, atur anggaran, dan monitor PayLater Anda secara real-time dalam satu dasbor yang
                    cerdas.
                </p>

                <div class="relative z-10 mt-auto">
                    <div
                        class="w-full aspect-square bg-white/50 rounded-xl flex items-center justify-center p-8 backdrop-blur-sm">
                        <img alt="Financial Dashboard Illustration" class="w-full h-full object-contain"
                            data-alt="Modern abstract financial data charts and graphs illustration"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDtr8Djv5U4Wg6KYLXIHpM9PNdajKOAJ4xW6aLeDICDpK5G8pKxY64-FV5WfmNqQZ6pa_kILyth8YEDGPkkVjhVocBv_y2DAc9cfVivJRikBHiGZl0lQQm-R5OzxpRgNqHLvXaUmKds73PqyjAfu36BOR8jrG34P8DvR6pQBnYVV-354wl8bWqkSaoAp77D3qKpovxvuzXn1EW5Yozut80fnPBaIY0e-TQ3lvaqORU7zVRu1mK-3-y8HACFIH645F2f_mA_Ej-G3rY" />
                    </div>
                </div>
                <!-- Abstract Background Decorative Elements -->
                <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-primary/20 rounded-full blur-3xl"></div>
                <div class="absolute -top-20 -right-20 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>

            </div>

        </div>


        {{-- RIGHT SIDE --}}
        <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">

            <div class="max-w-md mx-auto w-full">

                <div class="mb-10 text-center md:text-left">
                    <h2 class="text-3xl font-bold text-slate-900 mb-2">
                        Selamat Datang Kembali
                    </h2>

                    <p class="text-slate-500">
                        Silakan masuk ke akun Anda untuk melanjutkan.
                    </p>
                </div>


                {{-- FORM LOGIN --}}
                <form method="POST" action="{{ route('login') }}" class="space-y-5">

                    @csrf

                    <div class="flex flex-col gap-2">

                        <label class="text-slate-800 text-sm font-semibold">
                            Email
                        </label>

                        <input name="email" type="email" required
                            class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary"
                            placeholder="nama@email.com">

                    </div>


                    <div class="flex flex-col gap-2">

                        <div class="flex justify-between items-center">

                            <label class="text-slate-800 text-sm font-semibold">
                                Password
                            </label>

                            <a href="{{ route('forgot') }}" class="text-sm font-semibold text-primary hover:underline">

                                Lupa Password?

                            </a>

                        </div>
                        <div class="relative">

                            <input id="password" name="password" type="password" placeholder="Masukkan password Anda"
                                class="w-full rounded border border-slate-200 bg-white px-4 py-3.5 text-slate-900 placeholder:text-slate-400 focus:border-primary">

                            <button type="button" id="togglePassword"
                                class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400 hover:text-slate-600">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>

                        </div>

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
                    </div>


                    <div class="flex items-center gap-2">

                        <input name="remember" type="checkbox" class="w-4 h-4 rounded border-slate-300 text-primary">

                        <label class="text-sm text-slate-600">
                            Ingat Saya
                        </label>

                    </div>


                    <button type="submit"
                        class="w-full bg-primary hover:bg-primary/90 text-white font-bold py-4 rounded shadow-lg shadow-primary/20">

                        Masuk

                    </button>

                    <div class="flex items-center my-6">
                        <div class="flex-1 border-t border-slate-200"></div>
                        <span class="px-3 text-sm text-slate-400">Atau</span>
                        <div class="flex-1 border-t border-slate-200"></div>
                    </div>
                </form>
                <form id="googleForm" method="POST" action="{{ route('google.login') }}">
                    @csrf
                    <input type="hidden" name="credential" id="googleCredential">
                </form>

                <div id="googleLoginBtn"></div>

                <p class="text-center text-slate-600 mt-8">

                    Belum punya akun?

                    <a href="{{ route('register-view') }}" class="text-primary font-bold hover:underline">

                        Daftar sekarang

                    </a>

                </p>

            </div>

        </div>

    </div>
@endsection

@push('scripts')
    <script src="https://accounts.google.com/gsi/client" async defer></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            google.accounts.id.initialize({
                client_id: "{{ env('GOOGLE_CLIENT_ID') }}",
                callback: handleGoogleResponse
            });

            google.accounts.id.renderButton(
                document.getElementById("googleLoginBtn"), {
                    theme: "outline",
                    size: "large",
                    width: "100%"
                }
            );

        });

        function handleGoogleResponse(response) {

            document.getElementById("googleCredential").value = response.credential;
            document.getElementById("googleForm").submit();

        }
    </script>
@endpush
