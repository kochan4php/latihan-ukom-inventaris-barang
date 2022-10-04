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
        Schema::create('stok', function (Blueprint $table) {
            $table->char('id_barang', 8);
            $table
                ->foreign('id_barang')
                ->references('id_barang')
                ->on('barang')
                ->cascadeOnDelete();

            $table->integer('jml_masuk');
            $table->integer('jml_keluar');
            $table->integer('total_barang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stok');
    }
};
