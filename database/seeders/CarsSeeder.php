<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('cars')->insert([
        //     'model' => Str::random(10),
        //     'year' => random_int(1990,2023),
        //     'max_speed' => random_int(150,220),
        //     'isautomatic' => (bool)random_int(0,1),
        //     'engine' => Str::random(8),
        //     'number_of_doors' => random_int(2,8),
        //     'brand' => Str::random(12)
        // ]);
        Car::factory()->count(50)->create();
    }
}
