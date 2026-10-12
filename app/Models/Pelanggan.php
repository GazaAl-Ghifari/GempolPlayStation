<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    protected $fillable = [
        'nama',
        'no_hp',
        'alamat',
    ];

    public function rentals(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}