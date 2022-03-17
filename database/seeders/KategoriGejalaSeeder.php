<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class KategoriGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori_gejalas')->insert([
            'id' => 1,
            'nama' => 'omicron',
        ]);

        DB::table('kategori_gejalas')->insert([
            'id' => 2,
            'nama' => 'delta',
        ]);
    }
}
