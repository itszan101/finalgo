<header
    class="flex items-center justify-between border-b border-slate-200 dark:border-slate-800 px-6 py-4 bg-white dark:bg-slate-900">

    <div class="flex items-center gap-3">

        <div class="size-6 text-primary">

            <svg fill="none" viewBox="0 0 48 48">

                <path
                    d="M24 45.8096C19.6865 45.8096 15.4698 44.5305 11.8832 42.134C8.29667 39.7376 5.50128 36.3314 3.85056 32.3462C2.19985 28.361 1.76794 23.9758 2.60947 19.7452C3.451 15.5145 5.52816 11.6284 8.57829 8.5783C11.6284 5.52817 15.5145 3.45101 19.7452 2.60948C23.9758 1.76795 28.361 2.19986 32.3462 3.85057C36.3314 5.50129 39.7376 8.29668 42.134 11.8833C44.5305 15.4698 45.8096 19.6865 45.8096 24L24 24L24 45.8096Z"
                    fill="currentColor">

                </path>

            </svg>

        </div>

        <h2 class="text-lg font-bold">
            Finalgo
        </h2>

    </div>

    <div class="flex items-center gap-4">

        <a href="https://saweria.co/" target="_blank" class="text-sm font-medium text-primary hover:text-primary/80">
            Donate
        </a>

        <button id="themeToggle"
            class="flex items-center justify-center size-9 rounded-lg
border border-slate-200 dark:border-slate-700
bg-white dark:bg-slate-900
hover:bg-slate-100 dark:hover:bg-slate-800
transition">

            <span id="themeIcon" class="material-symbols-outlined text-[20px] text-slate-600 dark:text-slate-300">
                dark_mode
            </span>

        </button>

        <span class="text-sm text-slate-600 dark:text-slate-300">

            {{ Auth::user()->name ?? 'User' }}

        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button class="text-sm text-red-500 hover:text-red-600">
                Logout
            </button>

        </form>

    </div>

</header>
