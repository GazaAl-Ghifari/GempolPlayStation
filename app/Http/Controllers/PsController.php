<?php

namespace App\Http\Controllers;

use App\Models\Ps;
use Illuminate\Http\Request;

class PsController extends Controller
{
    public function index()
    {
        $ps = Ps::latest()->get();

        return view('ps.index', compact('ps'));
    }

    public function create()
    {
        return view('ps.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_ps' => 'required|string|max:100',
            'jenis_ps' => 'required|string|max:50',
            'harga_per_jam' => 'required|numeric|min:0',
            'status' => 'required|in:tersedia,disewa,maintenance',
        ]);

        Ps::create([
            'nama_ps' => $request->nama_ps,
            'jenis_ps' => $request->jenis_ps,
            'harga_per_jam' => $request->harga_per_jam,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('ps.index')
            ->with('success', 'Data PS berhasil ditambahkan.');
    }

    public function edit($p)
    {
        $ps = Ps::findOrFail($p);

        return view('ps.edit', compact('ps'));
    }

    public function update(Request $request, $p)
    {
        $ps = Ps::findOrFail($p);

        $request->validate([
            'nama_ps' => 'required|string|max:100',
            'jenis_ps' => 'required|string|max:50',
            'harga_per_jam' => 'required|numeric|min:0',
            'status' => 'required|in:tersedia,disewa,maintenance',
        ]);

        $ps->update([
            'nama_ps' => $request->nama_ps,
            'jenis_ps' => $request->jenis_ps,
            'harga_per_jam' => $request->harga_per_jam,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('ps.index')
            ->with('success', 'Data PS berhasil diperbarui.');
    }

    public function destroy($p)
    {
        $ps = Ps::findOrFail($p);

        if ($ps->status === 'disewa') {
            return redirect()
                ->route('ps.index')
                ->with('error', 'PS yang sedang disewa tidak dapat dihapus.');
        }

        $ps->delete();

        return redirect()
            ->route('ps.index')
            ->with('success', 'Data PS berhasil dihapus.');
    }
}