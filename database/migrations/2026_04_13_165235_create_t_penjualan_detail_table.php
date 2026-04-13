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
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id');
            $table->unsignedBigInteger('penjualan_id')->nullable();
            $table->foreign('penjualan_id')
                    ->references('penjualan_id')
                    ->on('t_penjualan')
                    ->nullOnDelete();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->foreign('barang_id')
                    ->references('barang_id')
                    ->on('m_barang')
                    ->nullOnDelete();
            $table->integer('harga')->default(0);
            $table->integer('jumlah')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
