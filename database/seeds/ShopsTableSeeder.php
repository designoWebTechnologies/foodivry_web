<?php

use Illuminate\Database\Seeder;
use App\Shop;
class ShopsTableSeeder extends Seeder
{


    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shops')->truncate();
        DB::table('shops')->insert([
            [
                'name' => 'Firdhouse',
                'email' => 'Firdhouse@demo.com',
                'password' => bcrypt('123456'),
                'address' => 'Triplicane, Chennai, Tamil Nadu, India',
                'maps_address' => 'Triplicane, Chennai, Tamil Nadu, India',
                'latitude' => '13.05871070',
                'longitude' => '80.27570630',
                'estimated_delivery_time' => '30',
                'phone' => '8765654345',
                'description' => 'good resturant',
                'avatar' => url('/seeddata/shops/11.jpeg'),
                'default_banner' => url('/seeddata/shops/11a.jpeg'),
                'status' => 'active'
            ],
            [
                'name' => 'Kfc',
                'email' => 'kfc@demo.com',
                'password' => bcrypt('123456'),
                'address' => 'Greams road, Chennai, Tamil Nadu, India',
                'maps_address' => 'Greams road, Chennai, Tamil Nadu, India',
                'latitude' => '13.060499',
                'longitude' => '80.254417',
                'estimated_delivery_time' => '30',
                'phone' => '8745645678',
                'description' => 'good resturant',
                'avatar' => url('/seeddata/shops/22.jpeg'),
                'default_banner' => url('/seeddata/shops/22a.jpeg'),
                'status' => 'active'
            ],
            [
                'name' => 'Lassi shop',
                'email' => 'Lassi@demo.com',
                'password' => bcrypt('123456'),
                'address' => 'Kodambakkam, Chennai, Tamil Nadu, India',
                'maps_address' => 'Kodambakkam, Chennai, Tamil Nadu, India',
                'latitude' => '13.0551',
                'longitude' => '80.2221',
                'estimated_delivery_time' => '30',
                'phone' => '9809354653',
                'description' => 'good resturant',
                'avatar' => url('/seeddata/shops/33.jpeg'),
                'default_banner' => url('/seeddata/shops/33a.jpeg'),
                'status' => 'active'
            ],
            [
                'name' => 'Maggvela',
                'email' => 'Maggevala@demo.com',
                'password' => bcrypt('123456'),
                'address' => 'Nungambakkam, Chennai, Tamil Nadu, India',
                'maps_address' => 'Kodambakkam, Chennai, Tamil Nadu, India',
                'latitude' => '13.0595',
                'longitude' => '80.2425',
                'estimated_delivery_time' => '30',
                'phone' => '7645637465',
                'description' => 'good resturant',
                'avatar' => url('/seeddata/shops/44.jpeg'),
                'default_banner' => url('/seeddata/shops/44a.jpeg'),
                'status' => 'active'
            ],
            [
                'name' => 'Thalapaktti',
                'email' => 'thalapakatti@demo.com',
                'password' => bcrypt('123456'),
                'address' => 'Thousand lights, Chennai, Tamil Nadu, India',
                'maps_address' => 'Thousand lights, Chennai, Tamil Nadu, India',
                'latitude' => '13.0590',
                'longitude' => '80.2542',
                'estimated_delivery_time' => '30',
                'phone' => '8967584657',
                'description' => 'good resturant',
                'avatar' => url('/seeddata/shops/55.jpeg'),
                'default_banner' => url('/seeddata/shops/55a.jpeg'),
                'status' => 'active'
            ],
            [
                'name' => 'Zaitoon',
                'email' => 'zaitoon@demo.com',
                'password' => bcrypt('123456'),
                'address' => 'Triplicane, Chennai, Tamil Nadu, India',
                'maps_address' => 'Triplicane, Chennai, Tamil Nadu, India',
                'latitude' => '13.05871070',
                'longitude' => '80.27570630',
                'estimated_delivery_time' => '30',
                'phone' => '8765654345',
                'description' => 'good resturant',
                'avatar' => url('/seeddata/shops/66.jpeg'),
                'default_banner' => url('/seeddata/shops/66a.jpeg'),
                'status' => 'active'
            ]
        ]);       
        
    }
}
