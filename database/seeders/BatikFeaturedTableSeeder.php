<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BatikFeatured;

class BatikFeaturedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $batikFeatureds = [
            [
                'product_id' => 1,
                'name' => 'Free Delivery'
            ],
            [
                'product_id' => 1,
                'name' => '10 Days Returns'
            ],
            [
                'product_id' => 1,
                'name' => 'Offer & Gifts'
            ],
            [
                'product_id' => 1,
                'name' => 'Secure Payments'
            ],
            [
                'product_id' => 2,
                'name' => 'Free Delivery'
            ],
            [
                'product_id' => 2,
                'name' => '10 Days Returns'
            ],
            [
                'product_id' => 2,
                'name' => 'Offer & Gifts'
            ],
            [
                'product_id' => 2,
                'name' => 'Secure Payments'
            ],

        ];
        BatikFeatured::insert($batikFeatureds);
    
    }
}
