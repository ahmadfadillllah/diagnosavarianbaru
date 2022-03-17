<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolusiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('solusis')->insert([
            'kode' => 'S001',
            'nama' => 'Minum Obat Pereda Demam',
            'solusi' => 'Jika Gejala Awal mengalami demam lebih dari 38 °C Silahkan Minum Pereda demam seperti Paracetamol, Dianjurkan vitamin yang komposisi mengandung vitamin C, B, E, zink dan obat-obat tradisional maupun Obat Modern Asli Indonesia (OMAI) teregistrasi di BPOM
            Vitamin C dengan pilihan :
            -	Tablet Vitamin C non acidic 500  mg/6-8 jam oral (untuk 14 hari)
            -	Tablet isap vitamin C 500 mg/12 jam oral (selama 30 hari)
            -	Multivitamin yang mengandung vitamin c 1-2 tablet/24 jam (selama 30 hari)

             Vitamin D
            -	Suplemen: 400 IU-1000 IU/hari (tersedia dalam bentuk tablet, kapsul, tablet effervescent, tablet kunyah, tablet hisap, kapsul lunak, serbuk, sirup)
            -	Obat: 1000-5000 IU/hari (tersedia dalam bentuk tablet 1000 IU dan tablet kunyah 5000 IU)
            ',
        ]);

        DB::table('solusis')->insert([
            'kode' => 'S002',
            'nama' => 'Tetap Terhidrasi',
            'solusi' => 'Jika Mengalami Tenggorokan nyeri, silahkan coba dahulu dengan banyak minum air putih',
        ]);

        DB::table('solusis')->insert([
            'kode' => 'S003',
            'nama' => 'Istirahat yang Cukup',
            'solusi' => 'Jika Perasaan Pusing atau Menggigil cobalah untuk cukup istirahat',
        ]);

        DB::table('solusis')->insert([
            'kode' => 'S004',
            'nama' => 'Pantau Gejala',
            'solusi' => 'Jika Mengalami Batuk, Pilek, Tenggorokan sakit dan demam, silahkan melapor ke bidan desa agar dipantau selama 14 hari',
        ]);

        DB::table('solusis')->insert([
            'kode' => 'S005',
            'nama' => 'Lakukan Isolasi Mandiri',
            'solusi' => 'Jika Mengalami Batuk, kehilangan Indra Perasa, Sesak napas dan demam,selama 14 hari atau lebih, Silahkan melakukan Isolasi Mandiri dirumah',
        ]);

        DB::table('solusis')->insert([
            'kode' => 'S006',
            'nama' => 'Hubungi Dokter',
            'solusi' => 'Jika Mengalami Batuk, Pilek, Tenggorokan sakit dan demam,selama 14 hari atau lebih dan terasa ada gangguan pernafasan, silahkan melapor ke Rumah sakit atau Puskesmas untuk diperiksa lebih lanjut',
        ]);
    }
}
