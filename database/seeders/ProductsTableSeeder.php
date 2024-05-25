<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $userIds = User::pluck('id')->toArray();

        foreach (range(1, 50) as $index) {

            $user_id = $faker->randomElement($userIds);
            DB::table('products')->insert([
                'user_id' => $user_id, // Assuming user IDs are from 1 to 10
                'productTitle' => $faker->sentence,
                'brandName' => 'Generic',
                'productCategory' => $faker->numberBetween(1, 10), // Assuming category IDs are from 1 to 10
                'AboutThisitem' => $faker->paragraph,
                'productQuantity' => $faker->numberBetween(1, 100),
                'productSku' => $faker->unique()->ean8,
                'Manufacturer' => $faker->company,
                'CountryOfOrigin' => $faker->country,
                'productDescription' => $faker->text,
                'regularPrice' => $faker->randomFloat(2, 10, 1000),
                'SellPrice' => $faker->randomFloat(2, 5, 500),
                'mainImage' => $faker->imageUrl(),
                'firstImage' => $faker->imageUrl(),
                'secondImage' => $faker->imageUrl(),
                'thirdImage' => $faker->imageUrl(),
                'fourthImage' => $faker->imageUrl(),
                'fifthImage' => $faker->imageUrl(),
                'approved' => $faker->numberBetween(0, 1), // Assuming approved status can be 0 or 1
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
