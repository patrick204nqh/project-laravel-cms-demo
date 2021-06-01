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

        foreach (range(1,100) as $index) {
            \App\Models\PostCategory::create([
                'category_id' => 1,
                'post_id' => $index
            ]);
            \App\Models\PostCategory::create([
                'category_id' => $faker->numberBetween(2, 10),
                'post_id' => $index
            ]);
        }
    }
}
