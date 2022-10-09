<?php

namespace Database\Seeders;

use App\Models\Lokasi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lokasi = collect([
            [
                'id_lokasi' => 'R001',
                'nama_lokasi' => 'Lab RPL 1',
                'penanggung_jawab' => 'Satria Ade Putra',
                'keterangan' => 'Lantai 3 Gedung D'
            ],
            [
                'id_lokasi' => 'R002',
                'nama_lokasi' => 'Lab RPL 2',
                'penanggung_jawab' => 'Satria Ade Putra',
                'keterangan' => 'Lantai 3 Gedung D'
            ],
            [
                'id_lokasi' => 'R003',
                'nama_lokasi' => 'Lab TKJ 1',
                'penanggung_jawab' => 'Supriyadi',
                'keterangan' => 'Lantai 2 Gedung D'
            ],
            [
                'id_lokasi' => 'R004',
                'nama_lokasi' => 'Lab TKJ 2',
                'penanggung_jawab' => 'Supriyadi',
                'keterangan' => 'Lantai 2 Gedung D'
            ],
            [
                'id_lokasi' => 'R005',
                'nama_lokasi' => 'Lab Multimedia',
                'penanggung_jawab' => 'Bayu Setiawan',
                'keterangan' => 'Gedun Multimedia'
            ],
        ]);

        $lokasi->each(fn ($lks) => DB::table('lokasi')->insert($lks));
    }
}
