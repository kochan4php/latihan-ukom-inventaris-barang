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
            $table->id('id_barang');

            $table
                ->foreignId('peminjam')
                ->index()
                ->constrained('user', 'id_user')
                ->cascadeOnDelete();

            $table->date('tgl_pinjam');
            $table
                ->foreignId('barang_pinjam')
                ->index()
                ->constrained('barang', 'id_barang')
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
