<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('ps', function (Blueprint $table) {
        $table->id();
        $table->string('nama_ps');
        $table->string('jenis_ps');
        $table->decimal('harga_per_jam', 12, 2);
        $table->enum('status', [
            'tersedia',
            'disewa',
            'maintenance'
        ])->default('tersedia');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps');
    }
};
