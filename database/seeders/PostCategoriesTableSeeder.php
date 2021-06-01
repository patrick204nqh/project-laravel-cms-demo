<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class PostCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            \App\Models\PostCategory::create([
                'alias' => $faker->words(3, true),
                'description' => $faker->sentence()
            ]);
        }
    }
}
