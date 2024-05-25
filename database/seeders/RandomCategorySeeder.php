<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class RandomCategorySeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Step 1: Create categories without parent_id
        foreach (range(1, 10) as $index) {
            $name = $faker->word;
            $slug = Str::slug($name);

            DB::table('categories')->insert([
                'name' => $name,
                'image' => $faker->imageUrl(),
                'slug' => $slug,
                'description' => $faker->sentence,
                'status' => $faker->numberBetween(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Step 2: Update some categories with parent_id referencing other categories
        $categories = DB::table('categories')->pluck('id')->toArray(); // Get all category IDs

        foreach (range(1, 10) as $index) {
            $category = $faker->randomElement($categories); // Choose a random category
            $parentId = $faker->randomElement($categories); // Choose another random category as parent

            // Ensure the category and parent are not the same
            while ($parentId == $category) {
                $parentId = $faker->randomElement($categories);
            }

            // Update the category with parent_id
            DB::table('categories')
                ->where('id', $category)
                ->update(['parent_id' => $parentId]);
        }
    }
}
