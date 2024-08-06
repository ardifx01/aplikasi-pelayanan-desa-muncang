<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('suratsks', function (Blueprint $table) {
            // Tambahkan kolom alamat_lama jika belum ada
            if (!Schema::hasColumn('suratsks', 'alamat_lama')) {
                $table->string('alamat_lama')->nullable();
            }
            // Tambahkan kolom alamat_baru jika belum ada
            if (!Schema::hasColumn('suratsks', 'alamat_baru')) {
                $table->string('alamat_baru')->nullable();
            }
        });

        // Menyalin data dari kolom 'alamat' ke 'alamat_lama' jika alamat_lama ada
        if (Schema::hasColumn('suratsks', 'alamat_lama') && Schema::hasColumn('suratsks', 'alamat')) {
            DB::statement('UPDATE suratsks SET alamat_lama = alamat');
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suratsks', function (Blueprint $table) {
            // Hapus kolom alamat_lama jika ada
            if (Schema::hasColumn('suratsks', 'alamat_lama')) {
                $table->dropColumn('alamat_lama');
            }
            // Hapus kolom alamat_baru jika ada
            if (Schema::hasColumn('suratsks', 'alamat_baru')) {
                $table->dropColumn('alamat_baru');
            }
        });
    }
};