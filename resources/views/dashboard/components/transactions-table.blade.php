<!-- Spending Table -->
<div>

    <!-- Header -->
    <div class="flex items-center justify-between pb-4">
        <h2 class="text-[22px] font-bold leading-tight tracking-[-0.015em]">
            Recent Transactions
        </h2>

        <button class="text-sm font-medium text-primary hover:text-primary/80 transition-colors">
            View All
        </button>
    </div>


    <!-- Table -->
    <div class="overflow-x-auto rounded-xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900/50">

        <table class="w-full text-left text-sm">

            <!-- Table Head -->
            <thead
                class="border-b border-slate-200 dark:border-slate-800 bg-slate-50 dark:bg-slate-800/50 text-slate-500 dark:text-slate-400">

                <tr>
                    <th class="px-6 py-4 font-medium">Date</th>
                    <th class="px-6 py-4 font-medium">Description</th>
                    <th class="px-6 py-4 font-medium">Category</th>
                    <th class="px-6 py-4 font-medium">Method</th>
                    <th class="px-6 py-4 font-medium text-right">Amount</th>
                </tr>

            </thead>


            <!-- Table Body -->
            <tbody class="divide-y divide-slate-200 dark:divide-slate-800">

                @forelse ($transactions as $trx)
                    @php
                        $color = $categoryColors[$trx['category']] ?? 'gray';
                    @endphp

                    <tr class="hover:bg-slate-50 dark:hover:bg-slate-800/30 transition-colors">

                        <!-- Date -->
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                            {{ \Carbon\Carbon::parse($trx['date'])->format('M d, Y') }}
                        </td>

                        <!-- Description -->
                        <td class="px-6 py-4 font-medium">
                            {{ $trx['description'] }}
                        </td>

                        <!-- Category -->
                        <td class="px-6 py-4">

                            <span
                                class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium
                                bg-{{ $color }}-500/10
                                text-{{ $color }}-500
                                border border-{{ $color }}-500/20">

                                {{ $trx['category'] }}

                            </span>

                        </td>

                        <!-- Method -->
                        <td class="px-6 py-4 text-slate-500 dark:text-slate-400">
                            {{ $trx['method'] }}
                        </td>

                        <!-- Amount -->
                        <td class="px-6 py-4 text-right font-medium">
                            Rp {{ number_format($trx['amount'], 0, ',', '.') }}
                        </td>

                    </tr>

                @empty

                    <!-- Empty State -->
                    <tr>
                        <td colspan="5" class="text-center py-10 text-slate-400">
                            No transactions found
                        </td>
                    </tr>
                @endforelse

            </tbody>

        </table>

    </div>


    <!-- Pagination -->
    <div class="pt-4">

        {{ $transactions->links() }}

    </div>

</div>
