<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use App\Models\Ps;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class RentalController extends Controller
{
    /**
     * Menampilkan daftar rental.
     */
    public function index()
    {
        $rentals = Rental::with(['pelanggan', 'ps'])
            ->latest()
            ->get();

        return view('rentals.index', compact('rentals'));
    }

    /**
     * Form rental baru.
     */
    public function create()
    {
        $pelanggans = Pelanggan::orderBy('nama')->get();

        $ps = Ps::where('status', 'tersedia')
            ->orderBy('nama_ps')
            ->get();

        return view('rentals.create', compact('pelanggans', 'ps'));
    }

    /**
     * Menyimpan transaksi rental.
     */
    public function store(Request $request)
    {
        $request->validate([
            'pelanggan_id' => 'required|exists:pelanggans,id',
            'ps_id' => 'required|exists:ps,id',
            'durasi' => 'required|integer|min:1',
        ]);

        $ps = Ps::findOrFail($request->ps_id);

        // Pastikan PS masih tersedia
        if ($ps->status !== 'tersedia') {
            return back()
                ->withInput()
                ->with('error', 'PS sedang disewa atau tidak tersedia.');
        }

        // Hitung total
        $totalHarga = $ps->harga_per_jam * $request->durasi;

        // Generate kode rental
        $kodeRental = 'RNT-' .
            now()->format('YmdHis') .
            '-' .
            strtoupper(Str::random(4));

        $waktuMulai = now();

        // Simpan rental
        Rental::create([
            'kode_rental' => $kodeRental,
            'pelanggan_id' => $request->pelanggan_id,
            'ps_id' => $ps->id,
            'tanggal_rental' => $waktuMulai,
            'waktu_mulai' => $waktuMulai,
            'waktu_selesai' => null,
            'durasi' => $request->durasi,
            'harga_per_jam' => $ps->harga_per_jam,
            'total_harga' => $totalHarga,
            'status' => 'berjalan',
        ]);

        // Ubah status PS
        $ps->update([
            'status' => 'disewa',
        ]);

        return redirect()
            ->route('rentals.index')
            ->with('success', 'Rental berhasil dimulai.');
    }

    /**
     * Menyelesaikan rental.
     */
   public function selesai($p)
{
    $rental = Rental::findOrFail($p);

    $rental->update([
        'status' => 'selesai',
        'waktu_selesai' => now()->format('H:i:s'),
    ]);

    $ps = Ps::find($rental->ps_id);

    if ($ps) {
        $ps->update([
            'status' => 'tersedia',
        ]);
    }

    return redirect()
        ->route('rentals.index')
        ->with('success', 'Rental berhasil diselesaikan.');
}
}