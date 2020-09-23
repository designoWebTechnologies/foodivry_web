<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name' => 'chicken briyani',
                'shop_id' => 1,
                'description' => 'special',                
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'chicken soup',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0               
            ],
            [
                'name' => 'Egg Biryani',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'fish fry',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'grill chicken',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'mutton briyani',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 2
            ],
            [
                'name' => 'prawn fry',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'tandoori chicken',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'veg soup',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'mutton soup',
                'shop_id' => 1,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken fried rice',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken noodles',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'Mcspicy',
                'shop_id' => 2,
                'description' => 'Chicken Shawarma',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken wrap',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'egg fried rice',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'mexican shawarma',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'paneer tikka',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'prawn',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'tawa fish',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'veg fried rice',
                'shop_id' => 2,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
             [
                'name' => 'blue lime',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'butterscoth',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'fresh lime',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'mango juice',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'mango lassi',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'salt lassi',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'strawberry shake',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1

            ],
            [
                'name' => 'sweet lassi',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
             [
                'name' => 'vanilla milkshake',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'watermelon',
                'shop_id' => 3,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'Arrabbiata Penne Pasta',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'cheese masala maggi',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'Cheese Pasta',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'curry platter',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'Fusion Pasta',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'maggi salsa',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'Mexican Platter',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'paneer maggi',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
             [
                'name' => 'tangy pasta',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'veg maggi',
                'shop_id' => 4,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken briyani',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken soup',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'Egg Biryani',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'fish fry',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'grill chicken',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'mutton briyani',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'mutton soup',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'prawn',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
             [
                'name' => 'tandoori',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'veg soup',
                'shop_id' => 5,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken fried rice',
                'shop_id' => 6,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'chicken noodles',
                'shop_id' => 6,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ],
            [
                'name' => 'prawn',
                'shop_id' => 6,
                'description' => 'special',
                'featured' => 1,
                'featured_position' => 1
            ],
            [
                'name' => 'tawa fish',
                'shop_id' => 6,
                'description' => 'special',
                'featured' => 0,
                'featured_position' => 0
            ]
        ]);
        
    }
}
