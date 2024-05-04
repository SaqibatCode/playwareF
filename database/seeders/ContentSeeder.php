<?php

namespace Database\Seeders;

use App\Models\Content;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contents = [
            [
                'ButtonLink' => '/',
                'ButtonText' => 'Shop Now',
                'Highlight_Text' => 'SALES 40% OFF',
                'contentId' => 1,
                'featureText' => 'Special Offer',
                'image' => 'slide1.jpg',
                'mainHeading' => 'MINI HELICOPTER DRONE 4 CHANNELS',
            ],
            [
                'ButtonLink' => '/',
                'ButtonText' => 'Shop Now',
                'Highlight_Text' => 'SALES 40% OFF',
                'contentId' => 2,
                'featureText' => 'Limited offer',
                'image' => 'slide2.jpg',
                'mainHeading' => 'MINI HELICOPTER DRONE 4 CHANNELS',
            ],
            [
                'ButtonLink' => '/',
                'ButtonText' => 'Shop Now',
                'Highlight_Text' => 'SALES 40% OFF',
                'contentId' => 3,
                'featureText' => '& CHARGER',
                'image' => 'small-banner-1.jpg',
                'mainHeading' => 'IQOS 2.4 HOLDER',
            ],
            [
                'ButtonLink' => '/',
                'ButtonText' => 'Shop Now',
                'Highlight_Text' => 'Off',
                'contentId' => 4,
                'featureText' => null, // Adjust accordingly if needed
                'image' => 'small-banner-2.jpg',
                'mainHeading' => 'IPHONE X 128GB RETINA DISPLAY',
            ],
            
            // Add more data arrays as needed
        ];

        // Insert data
        Content::insert($contents);
    }
}
