<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Admin;
use App\Models\Kategori;
use App\Models\Penduduk;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Kategori::create([
            'kategori' => 'Keamanan'
        ]);
        
        Kategori::create([
            'kategori' => 'Fasilitas'
        ]);

        Kategori::create([
            'kategori' => 'Kesehatan'
        ]);

        Penduduk::create([
            'nik' => '1111111111111111',
            'nama' => 'Bayu',
            'alamat' => 'Jakarta Selatan'
        ]);

        Admin::create([
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
    }
}
