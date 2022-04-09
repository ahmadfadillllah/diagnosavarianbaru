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
            'keterangan' => 'Kemungkinan anda mengalami corona virus varian delta ringan tetapi Jangan panik tetap patuhi protokol kesehatan dan untuk memastikan gejala yang anda rasakan silahkan melakukan PCR atau SWAB antigen di rumah sakit terdekat atau puskemas terdekat'
        ]);
        DB::table('klasifikasi')->insert([
            'kode' => 'D002',
            'klasifikasi' => 'Sedang',
            'keterangan' => 'Kemungkinan anda mengalami corona virus varian delta sedang jangan panik tetap patuhi protokol kesehatan dan untuk memastikan gejala yang anda rasakan silahkan melakukan tindakan medis di rumah sakit/puskemas rujukan terdekat'
        ]);
        DB::table('klasifikasi')->insert([
            'kode' => 'D003',
            'klasifikasi' => 'Berat',
            'keterangan' => 'Kemungkinan anda mengalami corona virus varian delta berat silahkan melakukan HCU atau ICU  di rumah sakit/puskemas rujukan terdekat'
        ]);
    }
}
