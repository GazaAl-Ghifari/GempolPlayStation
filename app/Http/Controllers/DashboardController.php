<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Ps;
use App\Models\Rental;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPelanggan = Pelanggan::count();

        $totalPs = Ps::count();

        $totalRental = Rental::count();

        $rentalHariIni = Rental::whereDate(
            'tanggal_rental',
            today()
        )->count();

        $rentalBerjalan = Rental::where(
            'status',
            'berjalan'
        )->count();

        $rentalSelesai = Rental::where(
            'status',
            'selesai'
        )->count();

        $pendapatan = Pembayaran::sum('jumlah_bayar');

        $pembayaranTerbaru = Pembayaran::with([
            'rental.pelanggan',
            'rental.ps'
        ])
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard.index', compact(
    'totalPelanggan',
    'totalPs',
    'totalRental',
    'rentalHariIni',
    'rentalBerjalan',
    'rentalSelesai',
    'pendapatan',
    'pembayaranTerbaru'
));
    }
}