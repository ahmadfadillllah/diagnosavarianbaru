<?php

namespace Database\Seeders;

use App\Models\KategoriGejala;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin321'),
            'role' => 'admin',
            'status' => 'active'
        ]);

        $this->call([
            GejalaSeeder::class,
            KlasifikasiSeeder::class,
            SolusiSeeder::class,
        ]);
    }
}
