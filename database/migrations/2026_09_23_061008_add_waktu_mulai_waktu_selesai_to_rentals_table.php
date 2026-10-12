<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('rentals', function (Blueprint $table) {

            if (!Schema::hasColumn('rentals', 'waktu_mulai')) {
                $table->dateTime('waktu_mulai')
                    ->nullable()
                    ->after('tanggal_rental');
            }

            if (!Schema::hasColumn('rentals', 'waktu_selesai')) {
                $table->dateTime('waktu_selesai')
                    ->nullable()
                    ->after('waktu_mulai');
            }

        });
    }

    public function down(): void
    {
        Schema::table('rentals', function (Blueprint $table) {

            if (Schema::hasColumn('rentals', 'waktu_mulai')) {
                $table->dropColumn('waktu_mulai');
            }

            if (Schema::hasColumn('rentals', 'waktu_selesai')) {
                $table->dropColumn('waktu_selesai');
            }

        });
    }
};