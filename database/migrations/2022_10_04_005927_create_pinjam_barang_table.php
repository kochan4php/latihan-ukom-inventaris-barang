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
        Schema::create('pinjam_barang', function (Blueprint $table) {
            $table->id('id_pinjam');

            $table->char('peminjam', 8);
            $table
                ->foreign('peminjam')
                ->references('id_user')
                ->on('user')
                ->cascadeOnDelete();

            $table->date('tgl_pinjam');

            $table->char('barang_pinjam', 8);
            $table
                ->foreign('barang_pinjam')
                ->references('id_barang')
                ->on('barang')
                ->cascadeOnDelete();

            $table->integer('jml_pinjam');
            $table->date('tgl_kembali');
            $table->string('kondisi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pinjam_barang');
    }
};
