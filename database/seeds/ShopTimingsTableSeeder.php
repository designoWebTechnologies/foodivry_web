<?php

use Illuminate\Database\Seeder;

class ShopTimingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shop_timings')->truncate();
        DB::table('shop_timings')->insert([
            [
                'shop_id' => '1',
                'start_time' => '00:00',
                'end_time' => '23:59',
                'day' => 'ALL',
            ],
            [
                'shop_id' => '2',
                'start_time' => '00:00',
                'end_time' => '23:59',
                'day' => 'ALL',
            ],
            [
                'shop_id' => '3',
                'start_time' => '00:00',
                'end_time' => '23:59',
                'day' => 'ALL',
            ],
            [
                'shop_id' => '4',
                'start_time' => '00:00',
                'end_time' => '23:59',
                'day' => 'ALL',
            ],
            [
                'shop_id' => '5',
               'start_time' => '00:00',
                'end_time' => '23:59',
                'day' => 'ALL',
            ],
            [
                'shop_id' => '6',
               'start_time' => '00:00',
                'end_time' => '23:59',
                'day' => 'ALL',
            ]
        ]);
    }
}
