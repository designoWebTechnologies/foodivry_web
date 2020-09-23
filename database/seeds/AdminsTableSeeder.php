<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();
        DB::table('admins')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@demo.com',
                'password' => bcrypt('admin@18$'),
                'phone' => '+911234565434'
            ]
        ]);
    }
}
