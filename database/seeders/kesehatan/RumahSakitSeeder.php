<?php

namespace Database\Seeders\Kesehatan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kesehatan\RumahSakit;

class RumahSakitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RumahSakit::truncate();
        $faker = Faker::create();
        $csvFile = fopen(base_path("database/csv/kesehatan/rumahsakit.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                RumahSakit::create([
                    "id"   => $data['0'],
                    "uuid" => $data['1'],
                    "nama" => $data['2'],
                    "provinsi" => $data['3'],
                    "kabupaten" => $data['4'],
                    "alamat" => $data['5'],
                    "telepon" => $data['6'],
                    "pemilik" => $data['7'],
                    "kelas" => $data['8'],
                    "detail" => $data['9'],
                    "kode" => $data['10'],

                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
