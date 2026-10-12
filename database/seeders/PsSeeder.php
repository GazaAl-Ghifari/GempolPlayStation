<?php

namespace Database\Seeders;

use App\Models\Ps;
use Illuminate\Database\Seeder;

class PsSeeder extends Seeder
{
    public function run(): void
    {
        Ps::create([
            'nama_ps' => 'PS 1',
            'jenis_ps' => 'PS 4',
            'harga_per_jam' => 5000,
            'status' => 'tersedia',
        ]);

        Ps::create([
            'nama_ps' => 'PS 2',
            'jenis_ps' => 'PS 4',
            'harga_per_jam' => 5000,
            'status' => 'tersedia',
        ]);

        Ps::create([
            'nama_ps' => 'PS 3',
            'jenis_ps' => 'PS 5',
            'harga_per_jam' => 10000,
            'status' => 'tersedia',
        ]);
    }
}