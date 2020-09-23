<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductImagesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->truncate();
        DB::table('product_images')->insert([
            [
                'product_id' => 1,
                'url' => asset('/seeddata/1/chicken_briyani.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 2,
                'url' => asset('/seeddata/1/chicken_soup.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 3,
                'url' => asset('/seeddata/1/Egg-Biryani.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 4,
                'url' => asset('/seeddata/1/fish_fry.png'),
                'position' => 0
            ],
            [
                'product_id' => 5,
                'url' => asset('/seeddata/1/grill_chicken.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 6,
                'url' => asset('/seeddata/1/mutton_briyani.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 7,
                'url' => asset('/seeddata/1/prawn_fry.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 8,
                'url' => asset('/seeddata/1/tandoori_chicken.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 9,
                'url' => asset('/seeddata/1/veg_soup.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 10,
                'url' => asset('/seeddata/1/mutton_soup.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 11,
                'url' => asset('/seeddata/2/chicken_fried_rice.png'),
                'position' => 0
            ],
            [
                'product_id' => 12,
                'url' => asset('/seeddata/2/chicken_noodles.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 13,
                'url' => asset('/seeddata/2/Chicken-Shawarma_4.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 14,
                'url' => asset('/seeddata/2/chicken_wrap.jpeg'),
                'position' => 0
            ],
            [
                'product_id' => 15,
                'url' => asset('/seeddata/2/egg_fried_rice.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 16,
                'url' => asset('/seeddata/2/mexican-shawarma.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 17,
                'url' => asset('/seeddata/2/paneer_tikka.png'),
                'position' => 0
            ],
            [
                'product_id' => 18,
                'url' => asset('/seeddata/2/prawn.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 19,
                'url' => asset('/seeddata/2/tawa_fish.png'),
                'position' => 0
            ],
            [
                'product_id' => 20,
                'url' => asset('/seeddata/2/veg-fried-rice.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 21,
                'url' => asset('/seeddata/3/blue_lime.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 22,
                'url' => asset('/seeddata/3/butterscoth.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 23,
                'url' => asset('/seeddata/3/fresh_lime.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 24,
                'url' => asset('/seeddata/3/mango_juice.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 25,
                'url' => asset('/seeddata/3/mango_lassi.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 26,
                'url' => asset('/seeddata/3/salt_lassi.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 27,
                'url' => asset('/seeddata/3/strawberry_shake.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 28,
                'url' => asset('/seeddata/3/sweet_lassi.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 29,
                'url' => asset('/seeddata/3/vanilla_milkshake.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 30,
                'url' => asset('/seeddata/3/watermelon.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 31,
                'url' => asset('/seeddata/4/Arrabbiata_Penne_Pasta.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 32,
                'url' => asset('/seeddata/4/cheese_masala_maggi.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 33,
                'url' => asset('/seeddata/4/Cheese_Pasta.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 34,
                'url' => asset('/seeddata/4/curry_platter.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 35,
                'url' => asset('/seeddata/4/Fusion_Pasta.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 36,
                'url' => asset('/seeddata/4/maggi_salsa.png'),
                'position' => 0
            ],
            [
                'product_id' => 37,
                'url' => asset('/seeddata/4/Mexican-Platter.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 37,
                'url' => asset('/seeddata/4/Mexican-Platter.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 38,
                'url' => asset('/seeddata/4/paneer_maggi.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 39,
                'url' => asset('/seeddata/4/tangy_pasta.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 40,
                'url' => asset('/seeddata/4/veg_maggi.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 41,
                'url' => asset('/seeddata/5/chicken_briyani.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 42,
                'url' => asset('/seeddata/5/chicken_soup.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 43,
                'url' => asset('/seeddata/5/Egg-Biryani.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 44,
                'url' => asset('/seeddata/5/fish_fry.png'),
                'position' => 0
            ],
             [
                'product_id' => 44,
                'url' => asset('/seeddata/5/fish_fry.png'),
                'position' => 1
            ],
            [
                'product_id' => 45,
                'url' => asset('/seeddata/5/grill_chicken.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 46,
                'url' => asset('/seeddata/5/mutton_briyani.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 47,
                'url' => asset('/seeddata/5/mutton_soup.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 48,
                'url' => asset('/seeddata/5/prawn.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 49,
                'url' => asset('/seeddata/5/tandoori.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 49,
                'url' => asset('/seeddata/5/tandoori.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 50,
                'url' => asset('/seeddata/5/veg_soup.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 51,
                'url' => asset('/seeddata/6/chicken_fried_rice.png'),
                'position' => 0
            ],
            [
                'product_id' => 52,
                'url' => asset('/seeddata/6/chicken_noodles.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 53,
                'url' => asset('/seeddata/6/prawn.jpg'),
                'position' => 0
            ],
            [
                'product_id' => 53,
                'url' => asset('/seeddata/6/prawn.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 54,
                'url' => asset('/seeddata/6/tawa_fish.png'),
                'position' => 0
            ],
            [
                'product_id' => 1,
                'url' => asset('/seeddata/1/chicken_briyani.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 6,
                'url' => asset('/seeddata/1/mutton_briyani.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 12,
                'url' => asset('/seeddata/2/chicken_noodles.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 17,
                'url' => asset('/seeddata/2/paneer_tikka.png'),
                'position' => 1
            ],
            [
                'product_id' => 23,
                'url' => asset('/seeddata/3/fresh_lime.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 27,
                'url' => asset('/seeddata/3/strawberry_shake.jpg'),
                'position' => 1
            ],
            [
                'product_id' => 33,
                'url' => asset('/seeddata/4/Cheese_Pasta.jpg'),
                'position' => 1
            ],
        ]);        
    }
}
