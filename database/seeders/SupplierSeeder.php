<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $supplier = collect([
            [
                'id_supplier' => 'SPR001',
                'nama_supplier' => 'INFORMA - MALL METROPOLITAN BEKASI',
                'alamat_supplier' => 'Mal Metropolitan, Jl. KH. Noer Ali No.1, RT.008/RW.002, Pekayon Jaya, Kec. Bekasi Sel., Kota Bks, Jawa Barat 17148',
                'telp_supplier' => '0812-9604-6051',
            ],
            [
                'id_supplier' => 'SPR002',
                'nama_supplier' => 'Mitrakantor.com',
                'alamat_supplier' => 'Jl. I Gusti Ngurah Rai No.10, RW.10, Klender, Kec. Duren Sawit, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13470',
                'telp_supplier' => '(021) 22862086',
            ],
            [
                'id_supplier' => 'SPR003',
                'nama_supplier' => 'bhinneka.com',
                'alamat_supplier' => 'Jl. Gn. Sahari No.73C, RT.9/RW.7, Gn. Sahari Sel., Kec. Kemayoran, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10610',
                'telp_supplier' => '(021) 29292828',
            ],
            [
                'id_supplier' => 'SPR004',
                'nama_supplier' => 'World Computer',
                'alamat_supplier' => 'Harco Mangga Dua Plaza, Jalan Arteri Jl. Mangga Dua Raya No.17, RT.17/RW.11, Mangga Dua Sel., Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10730',
                'telp_supplier' => '(021) 6125266',
            ],
            [
                'id_supplier' => 'SPR005',
                'nama_supplier' => 'Anekafoto Metro Atom',
                'alamat_supplier' => 'Metro Atom Plaza, Jl. Samanhudi No.19-20, RT.20/RW.3, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710',
                'telp_supplier' => '(021) 3455544',
            ],
        ]);

        $supplier->each(fn ($spr) => DB::table('supplier')->insert($spr));
    }
}
