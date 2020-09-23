<?php

use Illuminate\Database\Seeder;

class ProductPricesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_prices')->truncate();
        DB::table('product_prices')->insert([
            [
                'product_id' => '1',
                'price' => '100',
                'orignal_price'=>'100',
                'currency'=>'$'
            ],
            [
                'product_id' => '2',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '3',
                'price' => '40',
                'orignal_price'=>'40',
                'currency'=>'$'
            ],
            [
                'product_id' => '4',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ],
            [
                'product_id' => '5',
                'price' => '70',
                'orignal_price'=>'70',
                'currency'=>'$'
            ],
            [
                'product_id' => '6',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '7',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ],
            [
                'product_id' => '8',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '9',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '10',
                'price' => '30',
                'orignal_price'=>'30',
                'currency'=>'$'
            ],
            [
                'product_id' => '11',
                'price' => '100',
                'orignal_price'=>'100',
                'currency'=>'$'
            ],
            [
                'product_id' => '12',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '13',
                'price' => '40',
                'orignal_price'=>'40',
                'currency'=>'$'
            ],
            [
                'product_id' => '14',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ],
            [
                'product_id' => '15',
                'price' => '70',
                'orignal_price'=>'70',
                'currency'=>'$'
            ],
            [
                'product_id' => '16',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '17',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ],
            [
                'product_id' => '18',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '19',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '20',
                'price' => '30',
                'orignal_price'=>'30',
                'currency'=>'$'
            ],
            [
                'product_id' => '21',
                'price' => '100',
                'orignal_price'=>'100',
                'currency'=>'$'
            ],
            [
                'product_id' => '22',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '23',
                'price' => '40',
                'orignal_price'=>'40',
                'currency'=>'$'
            ],
            [
                'product_id' => '24',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ],
            [
                'product_id' => '25',
                'price' => '70',
                'orignal_price'=>'70',
                'currency'=>'$'
            ],
            [
                'product_id' => '26',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '27',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ],
            [
                'product_id' => '28',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '29',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '30',
                'price' => '30',
                'orignal_price'=>'30',
                'currency'=>'$'
            ],
            [
                'product_id' => '31',
                'price' => '100',
                'orignal_price'=>'100',
                'currency'=>'$'
            ],
            [
                'product_id' => '32',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '33',
                'price' => '40',
                'orignal_price'=>'40',
                'currency'=>'$'
            ],
            [
                'product_id' => '34',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ],
            [
                'product_id' => '35',
                'price' => '70',
                'orignal_price'=>'70',
                'currency'=>'$'
            ],
            [
                'product_id' => '36',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '37',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ],
            [
                'product_id' => '38',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '39',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '40',
                'price' => '30',
                'orignal_price'=>'30',
                'currency'=>'$'
            ],
            [
                'product_id' => '41',
                'price' => '100',
                'orignal_price'=>'100',
                'currency'=>'$'
            ],
            [
                'product_id' => '42',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '43',
                'price' => '40',
                'orignal_price'=>'40',
                'currency'=>'$'
            ],
            [
                'product_id' => '44',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ],
            [
                'product_id' => '45',
                'price' => '70',
                'orignal_price'=>'70',
                'currency'=>'$'
            ],
            [
                'product_id' => '46',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '47',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ],
            [
                'product_id' => '48',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '49',
                'price' => '80',
                'orignal_price'=>'80',
                'currency'=>'$'
            ],
            [
                'product_id' => '50',
                'price' => '30',
                'orignal_price'=>'30',
                'currency'=>'$'
            ],
            [
                'product_id' => '51',
                'price' => '100',
                'orignal_price'=>'100',
                'currency'=>'$'
            ],
            [
                'product_id' => '52',
                'price' => '50',
                'orignal_price'=>'50',
                'currency'=>'$'
            ]
            ,
            [
                'product_id' => '53',
                'price' => '40',
                'orignal_price'=>'40',
                'currency'=>'$'
            ],
            [
                'product_id' => '54',
                'price' => '60',
                'orignal_price'=>'60',
                'currency'=>'$'
            ]
             
        ]);
    }
}
