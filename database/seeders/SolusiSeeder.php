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
        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Isolasi mandiri di rumah/ fasilitas karantina selama maksimal 10 hari sejak muncul gejala ditambah 3 hari bebas gejala demam dan gangguan pernapasan. Jika gejala lebih dari 10 hari, maka isolasi dilanjutkan hingga gejala hilang ditambah dengan 3 hari bebas gejala. Isolasi dapat dilakukan mandiri di rumah maupun di fasilitas publik yang dipersiapkan pemerintah'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Istirahat Yang Cukup'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Banyak Minum air putih untuk menjaga kadar cairan tubuh'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Terapkan etika batuk'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Selalu gunakan masker jika keluar rumah atau saat akan berintegrasi dengan anggota keluarga'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Cuci tangan dengan sabun,air mengalir atau hand sanitizer'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Ukur suhu tubuh dua kali sehari,pagi,dan malam hari'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Konsumsi Obat Pereda Demam,batuk dan yeri seperti parasetamol dan panadol'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Dianjurkan vitamin yang komposisi mengandung vitamin C, B, E, zink'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Berjemur matahari minimal sekitar 10-15 menit setiap harinya'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Vitamin C dengan pilihan :
            -Tablet Vitamin C non acidic 500 mg/6-8 jam oral (untuk 14 hari)
            -Tablet isap vitamin C 500 mg/12 jam oral (selama 30 hari)
            '
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Multivitamin yang mengandung vitamin c 1-2 tablet/24 jam (selama 30 hari),'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Dianjurkan vitamin yang komposisi mengandung vitamin C, B, E, zink'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Vitamin D
            -Suplemen: 400 IU-1000 IU/hari (tersedia dalam bentuk tablet, kapsul, tablet effervescent, tablet kunyah, tablet hisap, kapsul lunak, serbuk, sirup)
            -Obat: 1000-5000 IU/hari (tersedia dalam bentuk tablet 1000 IU dan tablet kunyah 5000 IU)
            '
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'ANTIBIOTIK'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'ANTIVIRUS'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Pengobatan simtomatis seperti parasetamol bila demam'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S001',
            'id_klasifikasi' => 'D001',
            'solusi' => 'Obat-obatan suportif baik tradisional (Fitofarmaka) maupun Obat Modern Asli Indonesia (OMAI) teregistrasi di BPOM dapat dipertimbangkan untuk diberikan namun dengan tetap memperhatikan perkembangan kondisi klinis pasien'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => 'Rujuk ke Rumah Sakit ke Ruang Perawatan COVID-19/ Rumah Sakit Darurat COVID-19'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => 'Isolasi di Rumah Sakit ke Ruang PerawatanCOVID-19/ Rumah Sakit Darurat COVID-19'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => 'Vitamin C 200-400 mg/8 jam dalam 100 cc NaCl 0,9% habis dalam 1 jam diberikan secara drip Intravena (IV) selama perawatan'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => 'Antibotik IV'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => 'Antivirus V'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => 'Antikoagulan LMWH/UFH berdasarkan evaluasi DPJP yang disarankan dokter serta terapi O2 dengan arus sedang hingga tinggi '
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S002',
            'id_klasifikasi' => 'D002',
            'solusi' => '7.	Pengobatan simtomatis (Parasetamol dan lain-lain) dan Pengobatan komorbid dan komplikasi yang ada'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S003',
            'id_klasifikasi' => 'D003',
            'solusi' => 'Isolasi di ruang isolasi Rumah Sakit Rujukan atau rawat secara kohorting'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S003',
            'id_klasifikasi' => 'D003',
            'solusi' => 'Pengambilan swab untuk PCR'
        ]);

        DB::table('solusi')->insert([
            'kode' => 'S003',
            'id_klasifikasi' => 'D003',
            'solusi' => 'PERAWATAN DI RUMAH SAKIT'
        ]);

    }
}
