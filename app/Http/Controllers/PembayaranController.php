<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PembayaranController extends Controller
{
    /**
     * Menampilkan daftar pembayaran.
     */
    public function index()
    {
        $pembayarans = Pembayaran::with([
            'rental.pelanggan',
            'rental.ps'
        ])
            ->latest()
            ->get();

        return view('pembayaran.index', compact('pembayarans'));
    }


    /**
     * Menampilkan halaman pembayaran rental.
     */
    public function create($p)
    {
        $rental = Rental::with([
            'pelanggan',
            'ps',
            'pembayaran'
        ])->findOrFail($p);

        // Rental harus sudah selesai
        if ($rental->status !== 'selesai') {
            return redirect()
                ->route('rentals.index')
                ->with(
                    'error',
                    'Rental harus diselesaikan terlebih dahulu sebelum melakukan pembayaran.'
                );
        }

        // Jika sudah dibayar
        if ($rental->pembayaran) {
            return redirect()
                ->route('pembayaran.index')
                ->with(
                    'error',
                    'Rental ini sudah memiliki pembayaran.'
                );
        }

        return view('pembayaran.create', compact('rental'));
    }


    /**
     * Menyimpan pembayaran.
     */
    public function store(Request $request, $p)
    {
        $rental = Rental::with([
            'pelanggan',
            'ps',
            'pembayaran'
        ])->findOrFail($p);

        // Pastikan rental selesai
        if ($rental->status !== 'selesai') {
            return redirect()
                ->route('rentals.index')
                ->with(
                    'error',
                    'Rental belum selesai.'
                );
        }

        // Cegah pembayaran ganda
        if ($rental->pembayaran) {
            return redirect()
                ->route('pembayaran.index')
                ->with(
                    'error',
                    'Rental ini sudah dibayar.'
                );
        }

        $request->validate([
            'uang_dibayar' => [
                'required',
                'numeric',
                'min:' . $rental->total_harga,
            ],

            'metode_pembayaran' => [
                'required',
                'in:tunai,qris,transfer',
            ],
        ], [
            'uang_dibayar.min' =>
                'Uang yang dibayar tidak boleh kurang dari total pembayaran.',

            'uang_dibayar.required' =>
                'Uang dibayar wajib diisi.',

            'metode_pembayaran.required' =>
                'Metode pembayaran wajib dipilih.',
        ]);


        $totalBayar = $rental->total_harga;

        $uangDibayar = $request->uang_dibayar;

        $kembalian = $uangDibayar - $totalBayar;


        DB::transaction(function () use (
            $rental,
            $totalBayar,
            $uangDibayar,
            $kembalian,
            $request
        ) {

            Pembayaran::create([
    'rental_id' => $rental->id,
    'jumlah_bayar' => $uangDibayar,
    'kembalian' => $kembalian,
    'metode_pembayaran' => $request->metode_pembayaran,
    'tanggal_pembayaran' => now(),
]);
        });


        return redirect()
            ->route('pembayaran.index')
            ->with(
                'success',
                'Pembayaran berhasil disimpan.'
            );
    }
}