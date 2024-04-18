<?php

namespace Database\Seeders\Kesehatan;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Kesehatan\Puskesmas;

class PuskesmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Puskesmas::truncate();
        $faker = Faker::create();
        $csvFile = fopen(base_path("database/csv/kesehatan/puskesmas.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Puskesmas::create([
                    "id"   => $data['0'],
                    "uuid" => $data['1'],
                    "nama" => $data['2'],
                    "alamat" => $data['3'],
                    "detail" => $data['4'],
                    "kecamatan" => $data['5'],
                    "kabupaten" => $data['6'],
                    "provinsi" => $data['7'],
                    "kemampuan" => $data['8'],
                    "karakteristik" => $data['9'],

                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
