<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name' => 'Burger',
                'shop_id' => 1,
                'description' => 'special'
            ],
            [
                'name' => 'Snacks',
                'shop_id' => 1,
                'description' => 'special'
            ],
            [
                'name' => 'Beverages',
                'shop_id' => 1,
                'description' => 'special'
            ],
            [
                'name' => 'Burgers',
                'shop_id' => 2,
                'description' => 'special'
            ],
            [
                'name' => 'Rice meals ',
                'shop_id' => 2,
                'description' => 'special'
            ],
            [
                'name' => 'Rice bowls',
                'shop_id' => 2,
                'description' => 'special'
            ],
             [
                'name' => 'Breakfast subs',
                'shop_id' => 3,
                'description' => 'special'
            ],
            [
                'name' => 'Salads',
                'shop_id' => 3,
                'description' => 'special'
            ],
            [
                'name' => 'Cookies and chips',
                'shop_id' => 3,
                'description' => 'special'
            ],
             [
                'name' => 'soup',
                'shop_id' => 4,
                'description' => 'special'
            ],
            [
                'name' => 'Starters',
                'shop_id' => 4,
                'description' => 'special'
            ],
            [
                'name' => 'Main course',
                'shop_id' => 4,
                'description' => 'special'
            ],
            [
                'name' => 'soup',
                'shop_id' => 5,
                'description' => 'special'
            ],
            [
                'name' => 'Starters',
                'shop_id' => 5,
                'description' => 'special'
            ],
            [
                'name' => 'Main course',
                'shop_id' => 5,
                'description' => 'special'
            ],
            [
                'name' => 'Indian',
                'shop_id' => 6,
                'description' => 'special'
            ],
            [
                'name' => 'Chinese',
                'shop_id' => 6,
                'description' => 'special'
            ],
            [
                'name' => 'Arabian',
                'shop_id' => 6,
                'description' => 'special'
            ]
         ]);
    }
}
