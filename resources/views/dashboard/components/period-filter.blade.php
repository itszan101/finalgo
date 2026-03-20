<div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-4 mb-6">

    <!-- Quick Filter -->
    <div class="flex items-center gap-2">

        <a href="?period=this_month"
            class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800">
            This Month
        </a>

        <a href="?period=last_month"
            class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800">
            Last Month
        </a>

        <a href="?period=this_year"
            class="px-3 py-1.5 text-sm rounded-lg border border-slate-200 dark:border-slate-700 hover:bg-slate-100 dark:hover:bg-slate-800">
            This Year
        </a>

    </div>


    <!-- Month / Year Filter -->
    <form method="GET" class="flex items-center gap-3">

        <span class="text-sm text-slate-500 dark:text-slate-400">
            Filter Periode
        </span>

        <div class="relative">

            <select name="month"
                class="h-9 text-sm rounded-lg border border-slate-200 dark:border-slate-700 
        bg-white dark:bg-slate-900 px-3 pr-10 appearance-none">

                @foreach (range(1, 12) as $m)
                    <option value="{{ $m }}" {{ request('month') == $m ? 'selected' : '' }}>
                        {{ \Carbon\Carbon::create()->month($m)->format('F') }}
                    </option>
                @endforeach

            </select>

            <!-- Icon -->
            <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-slate-400"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">

                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />

            </svg>

        </div>
    </form>

</div>
