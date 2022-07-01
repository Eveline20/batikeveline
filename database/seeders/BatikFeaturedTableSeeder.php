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
                'name' => 'Service 24/7'
            ],
            [
                'product_id' => 1,
                'name' => '100% Secure'
            ],
            [
                'product_id' => 2,
                'name' => 'Free Delivery'
            ],
            [
                'product_id' => 2,
                'name' => 'Service 24/7'
            ],
            [
                'product_id' => 2,
                'name' => '100% Secure'
            ],

        ];
        BatikFeatured::insert($batikFeatureds);
    
    }
}
