<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Berita;
use App\Models\Tentang;
use App\Models\Pemerintah;
use App\Models\Utama;
use App\Models\Kontak;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'ADMIN',
            'username' => 'ampera',
            'password' => bcrypt('12345')
        ]);
        Berita::factory(15)->create();
        Tentang::factory(2)->create();
        Pemerintah::factory(2)->create();
        Utama::factory(5)->create();
        Kontak::factory(1)->create();
    }
}
