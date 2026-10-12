<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Menampilkan semua pelanggan.
     */
    public function index()
    {
        $pelanggans = Pelanggan::latest()->get();

        return view('pelanggan.index', compact('pelanggans'));
    }

    /**
     * Form tambah pelanggan.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Menyimpan pelanggan baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'no_hp' => 'required|string|max:20',
            'alamat' => 'nullable|string',
        ]);

        Pelanggan::create([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil ditambahkan.');
    }

    /**
     * Form edit pelanggan.
     */
    public function edit(Pelanggan $pelanggan)
{
    return view('pelanggan.edit', compact('pelanggan'));
}

    /**
     * Update pelanggan.
     */
   public function update(Request $request, Pelanggan $pelanggan)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'no_hp' => 'required|string|max:20',
        'alamat' => 'required|string',
    ]);

    $pelanggan->update([
        'nama' => $request->nama,
        'no_hp' => $request->no_hp,
        'alamat' => $request->alamat,
    ]);

    return redirect()
        ->route('pelanggan.index')
        ->with('success', 'Data pelanggan berhasil diperbarui.');
}

    /**
     * Hapus pelanggan.
     */
    public function destroy($p)
    {
        $pelanggan = Pelanggan::findOrFail($p);

        // Cek apakah pelanggan pernah melakukan rental
        if ($pelanggan->rentals()->exists()) {
            return redirect()
                ->route('pelanggan.index')
                ->with(
                    'error',
                    'Pelanggan tidak dapat dihapus karena sudah memiliki riwayat rental.'
                );
        }

        $pelanggan->delete();

        return redirect()
            ->route('pelanggan.index')
            ->with('success', 'Data pelanggan berhasil dihapus.');
    }
}