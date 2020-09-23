<?php

use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('addons')->truncate();
        DB::table('addons')->insert([
            [
                'name' => 'Cheese',
                'shop_id' => 1
            ],
            [
                'name' => 'Pepper',
                'shop_id' => 1
            ],            
             [
                'name' => 'Sauce',
                'shop_id' => 1
            ],
            [
                'name' => 'Red chilli',
                'shop_id' => 1
            ],            
             [
                'name' => 'Onions',
                'shop_id' => 1
            ],
            [
                'name' => 'Capsicum',
                'shop_id' => 1
            ],            
             [
                'name' => 'mayonnaise',
                'shop_id' => 1
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 1
            ],            
             [
                'name' => 'Barbeque sauce',
                'shop_id' => 1
            ],
            [
                'name' => 'Ketchup',
                'shop_id' => 1
            ],            
            [
                'name' => 'Cheese',
                'shop_id' => 2
            ],
            [
                'name' => 'Pepper',
                'shop_id' => 2
            ],            
             [
                'name' => 'Sauce',
                'shop_id' => 2
            ],
            [
                'name' => 'Red chilli',
                'shop_id' => 2
            ],            
             [
                'name' => 'Onions',
                'shop_id' => 2
            ],
            [
                'name' => 'Capsicum',
                'shop_id' => 2
            ],            
             [
                'name' => 'mayonnaise',
                'shop_id' => 2
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 2
            ],            
             [
                'name' => 'Barbeque sauce',
                'shop_id' => 2
            ],
            [
                'name' => 'Ketchup',
                'shop_id' => 2
            ],  
            [
                'name' => 'Cheese',
                'shop_id' => 3
            ],
            [
                'name' => 'Pepper',
                'shop_id' => 3
            ],            
             [
                'name' => 'Sauce',
                'shop_id' => 3
            ],
            [
                'name' => 'Red chilli',
                'shop_id' => 3
            ],            
             [
                'name' => 'Onions',
                'shop_id' => 3
            ],
            [
                'name' => 'Capsicum',
                'shop_id' => 3
            ],            
             [
                'name' => 'mayonnaise',
                'shop_id' => 3
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 3
            ],            
             [
                'name' => 'Barbeque sauce',
                'shop_id' => 3
            ],
            [
                'name' => 'Ketchup',
                'shop_id' => 3
            ],    
            [
                'name' => 'Cheese',
                'shop_id' => 4
            ],
            [
                'name' => 'Pepper',
                'shop_id' => 4
            ],            
             [
                'name' => 'Sauce',
                'shop_id' => 4
            ],
            [
                'name' => 'Red chilli',
                'shop_id' => 5
            ],            
             [
                'name' => 'Onions',
                'shop_id' => 5
            ],
            [
                'name' => 'Capsicum',
                'shop_id' => 5
            ],            
             [
                'name' => 'mayonnaise',
                'shop_id' => 6
            ],
            [
                'name' => 'Tomato',
                'shop_id' => 6
            ],            
             [
                'name' => 'Barbeque sauce',
                'shop_id' => 6
            ],
            [
                'name' => 'Ketchup',
                'shop_id' => 6
            ],                              
            
            
        ]);
    }
}
