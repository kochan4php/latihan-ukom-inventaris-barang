<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = collect([
            [
                "id_barang" => "BRG10001",
                "nama_barang" => "Kursi Siswa",
                "spesifikasi" => "Bantalan merah aluminium",
                "lokasi" => "R001",
                "kondisi" => "Baik",
                "jumlah_barang" => 36,
                "sumber_dana" => "S001"
            ],
            [
                "id_barang" => "BRG10002",
                "nama_barang" => "Kursi Lipat Siswa",
                "spesifikasi" => "Kursi lipat \nmerk Informa \nBantalan hitam",
                "lokasi" => "R002",
                "kondisi" => "Baik",
                "jumlah_barang" => 36,
                "sumber_dana" => "S001"
            ],
            [
                "id_barang" => "BRG20001",
                "nama_barang" => "Laptop Acer Aspire E1-471",
                "spesifikasi" => "Acer Aspire E1-471 \nCore i3 RAM 4GB, HDD 500GB",
                "lokasi" => "R002",
                "kondisi" => "Baik",
                "jumlah_barang" => 30,
                "sumber_dana" => "S002"
            ],
            [
                "id_barang" => "BRG20002",
                "nama_barang" => "Laptop Lenovo E550",
                "spesifikasi" => "Laptop Lenovo E550 \nIntel Core i7 RAM 8GB HDD 1TB",
                "lokasi" => "R002",
                "kondisi" => "Baik",
                "jumlah_barang" => 23,
                "sumber_dana" => "S003"
            ],
            [
                "id_barang" => "BRG20003",
                "nama_barang" => "PC Rakitan i7",
                "spesifikasi" => "Intel Core i7 \nRAM 16GB \nSSD 512GB",
                "lokasi" => "R001",
                "kondisi" => "Baik",
                "jumlah_barang" => 12,
                "sumber_dana" => "S004"
            ],
            [
                "id_barang" => "BRG20004",
                "nama_barang" => "Kamera DSLR D60",
                "spesifikasi" => "DSLR Canon D60",
                "lokasi" => "R005",
                "kondisi" => "Baik",
                "jumlah_barang" => 16,
                "sumber_dana" => "S003"
            ],
            [
                "id_barang" => "BRG30001",
                "nama_barang" => "Lightning Set",
                "spesifikasi" => "Stand light tronik 2 \nlightning tronik 2 100 watt",
                "lokasi" => "R005",
                "kondisi" => "Baik",
                "jumlah_barang" => 2,
                "sumber_dana" => "S005"
            ],
            [
                "id_barang" => "BRG30002",
                "nama_barang" => "Tripod Kamera",
                "spesifikasi" => "Takara Tripod",
                "lokasi" => "R005",
                "kondisi" => "Baik",
                "jumlah_barang" => 4,
                "sumber_dana" => "S002"
            ],
        ]);

        $barang->each(fn ($brg) => DB::table('barang')->insert($brg));
    }
}
