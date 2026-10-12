<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ps extends Model
{
    protected $table = 'ps';

    protected $fillable = [
        'nama_ps',
        'jenis_ps',
        'harga_per_jam',
        'status',
    ];

    public function rentals(): HasMany
    {
        return $this->hasMany(Rental::class);
    }
}