<?php

use Illuminate\Database\Seeder;

class ShopCuisinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cuisine_shop')->truncate();
        DB::table('cuisine_shop')->insert([
            [
                'cuisine_id' => '3',
                'shop_id' => '1',                
            ],
            [
                'cuisine_id' => '3',
                'shop_id' => '2', 
            ],
            [
                'cuisine_id' => '3',
                'shop_id' => '3', 
            ],
            [
                'cuisine_id' => '1',
                'shop_id' => '4',                
            ],
            [
                'cuisine_id' => '2',
                'shop_id' => '5', 
            ],
            [
                'cuisine_id' => '3',
                'shop_id' => '6', 
            ]
            
        ]);
    }
}
