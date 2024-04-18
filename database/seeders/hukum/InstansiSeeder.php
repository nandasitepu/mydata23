<?php

namespace Database\Seeders\Hukum;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Hukum\InstansiHukum;

class InstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InstansiHukum::truncate();
        $faker = Faker::create();
        $csvFile = fopen(base_path("database/csv/hukum/instansi.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                InstansiHukum::create([
                    "id"   => $data['0'],
                    // "uuid" => $data['1'],
                    "uuid" => $faker->uuid(),
                    "nama" => $data['2'],
                    "jenis" => $data['3'],
                    "detail" => $data['4'],
                    "koordinat" => $data['5'],
                    "foto" => $data['6'],
                    "alamat" => $data['7'],
                    "kontak" => $data['8'],

                    // "created_at" => $data['11'],
                    // "updated_at" => $data['12'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
