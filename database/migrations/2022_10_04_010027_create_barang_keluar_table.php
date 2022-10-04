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
            $table
                ->foreignId('id_barang')
                ->index()
                ->constrained('barang', 'id_barang')
                ->cascadeOnDelete();

            $table->date('tgl_keluar');
            $table->integer('jml_keluar');

            $table
                ->foreignId('supplier')
                ->index()
                ->constrained('supplier', 'id_supplier')
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
