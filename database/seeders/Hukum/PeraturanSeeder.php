<?php

namespace Database\Seeders\Hukum;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hukum\PeraturanModels;

class PeraturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeraturanModels::truncate();

        $csvFile = fopen(base_path("database/csv/hukum_peraturan.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                PeraturanModels::create([
                    "id"   => $data['0'],
                    "uuid" => $data['1'],
                    "jenis" => $data['2'],
                    "nomor" => $data['3'],
                    "tentang" => $data['4'],
                    "tahun" => $data['5'],
                    "status" => $data['6'],
                    "tanggal" => $data['7'],
                    "link_bt" => $data['8'],
                    "link_pjl" => $data['9'],
                    "link_gdrive" => $data['10'],
                    "created_at" => $data['11'],
                    "modified_at" => $data['12'],
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
