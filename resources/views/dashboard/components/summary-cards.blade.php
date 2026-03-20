<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

    <!-- Saldo -->
    <div class="rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">

        <div class="flex items-center justify-between h-8 mb-3">
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                Saldo Bulan Ini
            </p>
        </div>

        <p class="text-3xl font-bold tracking-tight">
            Rp {{ number_format($summary['saldo_bulan_ini']['amount'], 0, ',', '.') }}
        </p>

        <p class="text-emerald-500 text-sm flex items-center gap-1 mt-2">
            <span class="material-symbols-outlined text-[16px]">trending_up</span>
            {{ $summary['saldo_bulan_ini']['trend'] }}%
        </p>

    </div>


    <!-- Spending -->
    <div class="rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">

        <div class="flex items-center justify-between h-8 mb-3">

            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                Total Spending
            </p>

            <button
                class="flex items-center gap-1
text-[11px] font-medium
px-2 py-0.5
rounded-md
text-slate-500 dark:text-slate-400
border border-slate-200 dark:border-slate-700
hover:text-indigo-500 hover:border-indigo-500
transition">

                <span class="material-symbols-outlined text-[14px]">
                    add
                </span>

                Set Limit

            </button>

        </div>

        <p class="text-3xl font-bold tracking-tight">
            Rp 1.500.000
        </p>

        <p class="text-slate-400 text-sm flex items-center gap-1 mt-2">
            <span class="material-symbols-outlined text-[16px]">account_balance_wallet</span>
            45% of budget
        </p>

    </div>


    <!-- Hutang -->
    <div class="rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">

        <div class="flex items-center justify-between h-8 mb-3">
            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                Total Hutang / Pinjaman
            </p>
        </div>

        <p class="text-3xl font-bold tracking-tight">
            Rp 500.000
        </p>

        <p class="text-rose-500 text-sm flex items-center gap-1 mt-2">
            <span class="material-symbols-outlined text-[16px]">trending_down</span>
            -5%
        </p>

    </div>


    <!-- Paylater -->
    <div class="rounded-xl p-6 border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">

        <div class="flex items-center justify-between h-8 mb-3">

            <p class="text-slate-500 dark:text-slate-400 text-sm font-medium">
                PayLater Usage
            </p>

            <button
                class="flex items-center gap-1
text-[11px] font-medium
px-2 py-0.5
rounded-md
text-slate-500 dark:text-slate-400
border border-slate-200 dark:border-slate-700
hover:text-indigo-500 hover:border-indigo-500
transition">

                <span class="material-symbols-outlined text-[14px]">
                    add
                </span>

                Set Limit

            </button>

        </div>

        <p class="text-3xl font-bold tracking-tight">
            15%
        </p>

        <div class="w-full bg-slate-200 dark:bg-slate-800 rounded-full h-1.5 mt-3">
            <div class="bg-primary h-1.5 rounded-full" style="width: 15%"></div>
        </div>

    </div>

</div>
