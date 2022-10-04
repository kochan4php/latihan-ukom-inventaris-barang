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
            $table->id('id_barang');
            $table->string('nama_barang');
            $table->text('spesifikasi');

            $table
                ->foreignId('lokasi')
                ->index()
                ->constrained('lokasi', 'id_lokasi')
                ->cascadeOnDelete();

            $table->string('kondisi', 20);
            $table->integer('jumlah_barang');

            $table
                ->foreignId('sumber_dana')
                ->index()
                ->constrained('sumber_dana', 'id_sumber')
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
