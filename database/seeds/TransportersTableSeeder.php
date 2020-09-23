<?php

use Illuminate\Database\Seeder;

class TransportersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transporters')->truncate();
        DB::table('transporters')->insert([
            [
                'name' => 'Demo User',
                'email' => 'demo@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919898765654',
                'id' => '111'
            ],
            [
                'name' => 'Justus Demo ',
                'email' => 'justus@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '919875214010',
                'id' => '112'
            ],

            [

                'name' => 'Kaine Demo ',
                'email' => 'kaine@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918521473020',
                'id' => '113'
            ],

            [
                'name' => 'Danica Demo ',
                'email' => 'danica@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919865321470',
                'id' => '114'
            ],
             [
                'name' => 'Brayden Demo ',
                'email' => 'brayden@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917524115248',
                'id' => '115'
            ],

            [

                'name' => 'Arizona Demo ',
                'email' => 'arizona@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917452639852',
                'id' => '116'
            ],

            [
                'name' => 'Hilaria Demo ',
                'email' => 'hilaria@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+916985475852',
                'id' => '117'
            ],
            
             
            [

                'name' => 'Gwen Demo ',
                'email' => 'gwen@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918508536501',
                'id' => '118'
            ],

            [
                'name' => 'Mirri Demo ',
                'email' => 'Mirri@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918479632540',
                'id' => '119'
            ],
             [
                'name' => 'Sybil Demo ',
                'email' => 'sybil@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919873025001',
                'id' => '120'
            ],

            [

                'name' => 'Ebo Demo ',
                'email' => 'ebo@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919500629500',
                'id' => '121'
            ],

            [
                'name' => 'Pim Demo ',
                'email' => 'pim@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918520074120',
                'id' => '122'
            ],
            [

                'name' => 'Hart Demo ',
                'email' => 'hart@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+916395258741',
                'id' => '123'
            ],

            [
                'name' => 'Damaris Demo ',
                'email' => 'damaris@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918533552210',
                'id' => '124'
            ],
            
             
            [

                'name' => 'Tarquin Demo ',
                'email' => 'tarquin@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918520014700',
                'id' => '125'
            ],

            [
                'name' => 'Nik Demo ',
                'email' => 'nik@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917894561235',
                'id' => '126'
            ],
             [
                'name' => 'Oceane Demo ',
                'email' => 'oceane@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919820120141',
                'id' => '127'
            ],

            [

                'name' => 'Merida Demo ',
                'email' => 'merida@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918574203366',
                'id' => '128'
            ],

            [
                'name' => 'Booker Demo ',
                'email' => 'booker@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918546699852',
                'id' => '129'
            ],
              [
                'name' => 'Pascoe Demo ',
                'email' => 'pascoe@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+91857493210',
                'id' => '130'
            ]

        ]);
    }
}
