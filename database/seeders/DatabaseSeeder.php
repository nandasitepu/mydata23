<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    use WithoutModelEvents;

    public function run()
    {

        $this->call([
            UserSeeder::class,
            HukumSeeder::class,
            PendidikanSeeder::class,
            KesehatanSeeder::class,
            ArtikelSeeder::class,
            BeritaSeeder::class,
        ]);



    }
}
