<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('gejala')->insert([
            'kode' => 'G001',
            'nama' => 'Demam',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G002',
            'nama' => 'Batuk',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G003',
            'nama' => 'Flu Parah',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G004',
            'nama' => 'Sakit Kepala',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G005',
            'nama' => 'Pilek',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G006',
            'nama' => 'Bersin',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G007',
            'nama' => 'Mual dan Muntah',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G008',
            'nama' => 'Sakit Tenggorokan',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G009',
            'nama' => 'Nyeri Sendi',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G010',
            'nama' => 'Sakit Perut',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G011',
            'nama' => 'Batuk Kering',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G012',
            'nama' => 'Kelelahan',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G013',
            'nama' => 'Kehilangan Rasa atau Bau',
        ]);

        DB::table('gejala')->insert([
            'kode' => 'G014',
            'nama' => 'Hidung Tersumbat',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G015',
            'nama' => 'Kongjungtivitas(mata memerah)',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G016',
            'nama' => 'Berbagai Jenis Ruam Kulit',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G017',
            'nama' => 'Diare',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G018',
            'nama' => 'Pusing',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G019',
            'nama' => 'Sesak Napas',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G020',
            'nama' => 'Kebingungan',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G021',
            'nama' => 'Nyeri atau tekanan terus menerus di dada',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G022',
            'nama' => 'Suhu Tinggi (di atas 38 °C)',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G023',
            'nama' => 'Menggigil',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G024',
            'nama' => 'Gangguan Pendengaran',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G025',
            'nama' => 'Hidung Berair',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G026',
            'nama' => 'Batuk terus-menerus',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G027',
            'nama' => 'Suara Sesak',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G028',
            'nama' => 'Sesak Berat',
        ]);
        DB::table('gejala')->insert([
            'kode' => 'G029',
            'nama' => 'Hilang Selera Makan',
        ]);

    }
}
