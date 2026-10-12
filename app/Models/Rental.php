<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\Pembayaran;
use App\Models\Ps;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Rental extends Model
{
    protected $fillable = [
        'kode_rental',
        'pelanggan_id',
        'ps_id',
        'tanggal_rental',
        'waktu_mulai',
        'waktu_selesai',
        'durasi',
        'harga_per_jam',
        'total_harga',
        'status',
    ];

    protected $casts = [
        'tanggal_rental' => 'datetime',
        'waktu_mulai' => 'datetime',
        'waktu_selesai' => 'datetime',
    ];

    public function pelanggan(): BelongsTo
    {
        return $this->belongsTo(Pelanggan::class);
    }

    public function ps(): BelongsTo
    {
        return $this->belongsTo(Ps::class);
    }

    public function pembayaran(): HasOne
    {
        return $this->hasOne(Pembayaran::class);
    }
}