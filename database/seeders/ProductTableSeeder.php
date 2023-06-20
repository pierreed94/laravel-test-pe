<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('fr_FR');


        for ($i = 0 ; $i < 20 ; $i++) {
            Product::create([
                'name' => $faker->unique()->name(),
                'slug' => $faker->unique()->slug(),
                'summary' => $faker->text($maxNbChars = 120),
                'text' => $faker->text($maxNbChars = 500),
                'drop' => $faker->numberBetween($min = 0, $max = 12)
,               'price' => $faker->numberBetween($min = 75, $max = 180),
                'quantity' => $faker->numberBetween($min = 0, $max = 10)
            ]);

        }
    }
}
