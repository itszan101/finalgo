<?php

namespace App\Http\Controllers\finalgo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class dashboard extends Controller
{
    public function index(Request $request)
    {
        //Summary Data
        $summary = [
            'saldo_bulan_ini' => [
                'amount' => 3250000,
                'trend' => 8,
                'trend_type' => 'up'
            ],
            'total_spending' => [
                'amount' => 1500000,
                'budget_percent' => 45
            ],
            'total_hutang' => [
                'amount' => 500000,
                'trend' => -5,
                'trend_type' => 'down'
            ],
            'paylater_usage' => [
                'percent' => 15
            ]
        ];

        //Categories
        $categories = [
            [
                'name' => 'Saving',
                'icon' => 'savings',
                'color' => 'primary',
                'used' => 1000000,
                'limit' => 1500000
            ],
            [
                'name' => 'Needs',
                'icon' => 'shopping_cart',
                'color' => 'emerald',
                'used' => 800000,
                'limit' => 1000000
            ],
            [
                'name' => 'Giving',
                'icon' => 'favorite',
                'color' => 'purple',
                'used' => 200000,
                'limit' => 500000
            ],
            [
                'name' => 'Playing',
                'icon' => 'sports_esports',
                'color' => 'orange',
                'used' => 500000,
                'limit' => 500000
            ]
        ];

        //Transactions (Dummy Data)
        $transactions = [
            [
                'date' => '2023-10-24',
                'description' => 'Netflix Subscription',
                'category' => 'Playing',
                'method' => 'Credit Card',
                'amount' => 150000,
            ],
            [
                'date' => '2023-10-22',
                'description' => 'Groceries Supermarket',
                'category' => 'Needs',
                'method' => 'PayLater',
                'amount' => 650000,
            ],
            [
                'date' => '2023-10-20',
                'description' => 'Charity Donation',
                'category' => 'Giving',
                'method' => 'Bank Transfer',
                'amount' => 200000,
            ],
            [
                'date' => '2023-10-18',
                'description' => 'Investment Deposit',
                'category' => 'Saving',
                'method' => 'Bank Transfer',
                'amount' => 1000000,
            ],
            [
                'date' => '2023-10-15',
                'description' => 'Coffee Shop',
                'category' => 'Playing',
                'method' => 'Debit Card',
                'amount' => 45000,
            ],
            [
                'date' => '2023-10-12',
                'description' => 'Electricity Bill',
                'category' => 'Needs',
                'method' => 'Bank Transfer',
                'amount' => 350000,
            ],
            [
                'date' => '2023-10-10',
                'description' => 'Online Course',
                'category' => 'Saving',
                'method' => 'Credit Card',
                'amount' => 500000,
            ],
            [
                'date' => '2023-10-08',
                'description' => 'Lunch Restaurant',
                'category' => 'Playing',
                'method' => 'Cash',
                'amount' => 120000,
            ],
            [
                'date' => '2023-10-05',
                'description' => 'Donation Mosque',
                'category' => 'Giving',
                'method' => 'Cash',
                'amount' => 100000,
            ],
            [
                'date' => '2023-10-02',
                'description' => 'Gym Membership',
                'category' => 'Playing',
                'method' => 'Debit Card',
                'amount' => 250000,
            ],
            [
                'date' => '2023-09-30',
                'description' => 'Fuel',
                'category' => 'Needs',
                'method' => 'Cash',
                'amount' => 200000,
            ]
        ];

        //Pagination Setup
        $perPage = 10;
        $currentPage = $request->get('page', 1);

        $transactionsCollection = collect($transactions);

        $transactions = new LengthAwarePaginator(
            $transactionsCollection->forPage($currentPage, $perPage),
            $transactionsCollection->count(),
            $perPage,
            $currentPage,
            [
                'path' => $request->url(),
                'query' => $request->query()
            ]
        );

        //Category Color Mapping
        $categoryColors = collect($categories)->pluck('color', 'name');

        //Return View
        return view('dashboard.index', compact(
            'summary',
            'categories',
            'transactions',
            'categoryColors'
        ));
    }
}
