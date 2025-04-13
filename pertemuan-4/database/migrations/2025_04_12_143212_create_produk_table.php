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
        Schema::create('produk', function (Blueprint $table) {
            $table->string('kode_produk', 10)->primary();
            $table->string('nama_produk', 100);
            $table->text('deskripsi_produk')->nullable();
            $table->float('harga', precision: 2);
            $table->integer('stok');
            $table->boolean('status');
            $table->datetime('tanggal_masuk')->default(now());
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produk');
    }
};
