<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('suratsks', function (Blueprint $table) {
            // Tambahkan kembali kolom alamat
            $table->string('alamat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('suratsks', function (Blueprint $table) {
            // Hapus kolom alamat jika ada
            $table->dropColumn('alamat');
        });
    }
};