<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSedeer extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Mahasiswa::create([
                'kode_mk' => $faker->unique()->numerify('IF###'),
                'nama_mk' => $faker->firstName . " " . $faker->lastName,
                'sks' => $faker->numberBetween(1, 4),
                'nama_dosen' => $faker->firstName . " " . $faker->lastName
            ]);
        };
    }
}
