<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->char('id_barang', 8)->primary();
            $table->string('nama_barang');
            $table->text('spesifikasi');

            $table->char('lokasi', 4);
            $table
                ->foreign('lokasi')
                ->references('id_lokasi')
                ->on('lokasi')
                ->cascadeOnDelete();

            $table->string('kondisi', 20);
            $table->integer('jumlah_barang');

            $table->char('sumber_dana', 4);
            $table
                ->foreign('sumber_dana')
                ->references('id_sumber')
                ->on('sumber_dana')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
};
