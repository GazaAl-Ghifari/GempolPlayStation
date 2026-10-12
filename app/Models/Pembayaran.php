<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pembayaran extends Model
{
    protected $fillable = [
        'rental_id',
        'jumlah_bayar',
        'metode_pembayaran',
        'kembalian',
        'tanggal_pembayaran',
    ];

    protected $casts = [
        'jumlah_bayar' => 'decimal:2',
        'kembalian' => 'decimal:2',
        'tanggal_pembayaran' => 'datetime',
    ];

    public function rental(): BelongsTo
    {
        return $this->belongsTo(Rental::class);
    }
}