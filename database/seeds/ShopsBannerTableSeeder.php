<?php

use Illuminate\Database\Seeder;
use App\Product;
class ShopsBannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_banners')->truncate();
        DB::table('shop_banners')->insert([
            [
                'shop_id' => 1,
                'product_id' => 1,
                'url' => asset('/seeddata/shops/banner/11a.jpeg'),
                'position' => 1,
                'status' => 'active'
            ],
            [
                'shop_id' => 2,
                'product_id' => 11,
                'url' => asset('/seeddata/shops/banner/22a.jpeg'),
                'position' => 2,
                'status' => 'active'
            ],
            [
                'shop_id' => 3,
                'product_id' => 21,
                'url' => asset('/seeddata/shops/banner/33a.jpeg'),
                'position' => 3,
                'status' => 'active'
            ],
            [
                'shop_id' => 4,
                'product_id' => 31,
                'url' => asset('/seeddata/shops/banner/44a.jpeg'),
                'position' => 4,
                'status' => 'active'
            ],
            [
                'shop_id' => 5,
                'product_id' => 41,
                'url' => asset('/seeddata/shops/banner/55a.jpeg'),
                'position' => 5,
                'status' => 'active'
            ],
            [
                'shop_id' => 6,
                'product_id' => 51,
                'url' => asset('/seeddata/shops/banner/66a.jpeg'),
                'position' => 6,
                'status' => 'active'
            ]

            
        ]);        
    }
}
