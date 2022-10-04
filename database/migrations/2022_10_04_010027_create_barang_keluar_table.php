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
        Schema::create('barang_keluar', function (Blueprint $table) {
            $table->char('id_barang', 8);
            $table
                ->foreign('id_barang')
                ->references('id_barang')
                ->on('barang')
                ->cascadeOnDelete();

            $table->date('tgl_keluar');
            $table->integer('jml_keluar');

            $table->char('supplier', 8);
            $table
                ->foreign('supplier')
                ->references('id_supplier')
                ->on('supplier')
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
        Schema::dropIfExists('barang_keluar');
    }
};
