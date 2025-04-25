<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        // Ambil bulan terakhir dari data di database

        // Ambil tahun dari query string atau gunakan tahun saat ini sebagai default
        $selectedYear = $request->input('tahun', now()->year);

        // Ambil bulan terakhir berdasarkan tahun yang dipilih
        $lastMonth = Order::whereYear('created_at', $selectedYear)
            ->selectRaw('MAX(MONTH(created_at)) as last_month')
            ->value('last_month') ?? 12; // Jika tidak ada data, anggap sampai Desember

        // Hitung index bulan saat ini (0-based untuk JS)
        $currentMonthIndex = now()->format('n') - 1;

        // Ambil daftar tahun dari database
        $years = Order::selectRaw('YEAR(created_at) as year')
            ->distinct()
            ->orderBy('year', 'desc')
            ->pluck('year');

        // Ambil pendapatan bulanan berdasarkan tahun yang dipilih
        $monthlyIncome = Order::selectRaw('MONTH(created_at) as month, SUM(total_amount) as total')
            ->whereYear('created_at', $selectedYear)
            ->groupByRaw('MONTH(created_at)')
            ->pluck('total', 'month');

        // Buat array bulan dengan default 0
        $months = [
            1 => 'Jan',
            2 => 'Feb',
            3 => 'Mar',
            4 => 'Apr',
            5 => 'May',
            6 => 'Jun',
            7 => 'Jul',
            8 => 'Aug',
            9 => 'Sep',
            10 => 'Oct',
            11 => 'Nov',
            12 => 'Dec'
        ];

        $months = array_slice($months, 0, $lastMonth, true);

        // Hitung index bulan saat ini (0-based untuk JS)
        $currentMonthIndex = now()->format('n') - 1;

        // Tambahkan bulan kosong setelah bulan terakhir jika bulan terakhir bukan Desember
        if ($lastMonth < 12) {
            $months[$lastMonth + 1] = '';
        }

        $monthlyIncomeFull = array_fill_keys(array_keys($months), 0);
        foreach ($monthlyIncome as $month => $total) {
            $monthlyIncomeFull[$month] = $total;
        }

        $bestSellers = Product::withCount([
            'orderItems as total_quantity' => function ($query) use ($selectedYear) {
                $query->whereYear('created_at', $selectedYear);
            }
        ])->withSum([
            'orderItems as quantity' => function ($query) use ($selectedYear) {
                $query->whereYear('created_at', $selectedYear);
            }
        ], DB::raw('quantity'))
            ->orderByDesc('quantity')
            ->take(5)
            ->get();

        return view('dashboard.index', [
            "title" => "HydroSpace | Dashboard",
            "active" => "Dashboard",
            "totalProduct" => Product::count(),
            "totalIncome" => Order::whereYear('created_at', $selectedYear)->sum('total_amount'),
            "totalTransaction" => Order::whereYear('created_at', $selectedYear)
                ->where('status', '!=', 'Keranjang')
                ->count(),
            "bestSellers" => $bestSellers,
            "contactMessages" => DB::table('contacts')->orderBy('created_at', 'desc')->get(),
            "monthlyIncome" => array_values($monthlyIncomeFull),
            "incomeCategories" => array_values($months),
            "dataPointIndex" => ($selectedYear == now()->year) ? $currentMonthIndex : null,
            "years" => $years,
            "selectedYear" => $selectedYear
        ]);
    }
}
