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
            $table
                ->foreignId('id_barang')
                ->index()
                ->constrained('barang', 'id_barang')
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
