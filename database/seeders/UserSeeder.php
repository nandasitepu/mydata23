<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Nanda Sitepu',
            'email' => 'nanda.sitepu@gmail.com',
            'password' => bcrypt('mydata2312286'),
        ]);

    }
}
