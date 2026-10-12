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
    Schema::create('rentals', function (Blueprint $table) {
        $table->id();

        $table->string('kode_rental')->unique();

        $table->foreignId('pelanggan_id')
              ->constrained('pelanggans')
              ->cascadeOnDelete();

        $table->foreignId('ps_id')
              ->constrained('ps')
              ->cascadeOnDelete();

        $table->dateTime('tanggal_rental');

        $table->integer('durasi');

        $table->decimal('harga_per_jam', 12, 2);

        $table->decimal('total_harga', 12, 2);

        $table->enum('status', [
            'berjalan',
            'selesai',
            'dibatalkan'
        ])->default('berjalan');

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
