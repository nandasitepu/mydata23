<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Data\Hukum;

class HukumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hukum::truncate();

        $csvFile = fopen(base_path("database/data/hukum.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 1000, ";")) !== FALSE) {
            if (!$firstline) {
                Hukum::create([
                    "jenis" => $data['0'],
                    "nomor" => $data['1'],
                    "tentang" => $data['2'],
                    "oleh" => $data['3'],
                    "tanggal" => $data['4'],
                    "sumber" => $data['5'],
                    "links" => $data['6'],
                    "keterangan" => $data['7']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
