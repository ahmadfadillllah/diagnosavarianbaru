<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KlasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('klasifikasi')->insert([
            'kode' => 'D001',
            'klasifikasi' => 'Ringan',
        ]);
        DB::table('klasifikasi')->insert([
            'kode' => 'D002',
            'klasifikasi' => 'Sedang',
        ]);
        DB::table('klasifikasi')->insert([
            'kode' => 'D003',
            'klasifikasi' => 'Berat',
        ]);
    }
}
