<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();
        DB::table('users')->insert([
            [
                'name' => 'Demo User',
                'email' => 'demo@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919856985125',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            
            [
                'name' => 'Clinton Demo',
                'email' => 'clinton@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918548562581',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Gabriel Demo',
                'email' => 'gabriel@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917425968521',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],            
            [
                'name' => 'Scott Demo',
                'email' => 'scott@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919712345679',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Edwar Demo',
                'email' => 'edwar@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918456248621',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Becky Demo',
                'email' => 'becky@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918527419632',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],           
            [
                'name' => 'Jennifer Demo',
                'email' => 'jennifer@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917418529630',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Sharon Demo',
                'email' => 'sharon@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918791230212',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Carolyn Demo',
                'email' => 'carolyn@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919632587410',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Diana Demo',
                'email' => 'diane@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917415296385',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Julie Demo',
                'email' => 'julie@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919527523124',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Jesse Demo',
                'email' => 'jesse@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917596587450',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Charles Demo',
                'email' => 'charles@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918795463210',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Cesar Demo',
                'email' => 'cesar@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917418419410',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'rike demo',
                'email' => 'rike@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+919876543233',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Andre Demo',
                'email' => 'andre@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917896540202',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Derrick Demo',
                'email' => 'derrick@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+916303014021',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Nuggets Demo',
                'email' => 'nuggets@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+917963025010',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Spork Demo',
                'email' => 'spork@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918531601452',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ],
            [
                'name' => 'Lloyd Demo',
                'email' => 'lloyd@demo.com',
                'password' => bcrypt('123456'),
                'phone' => '+918565237410',
                'device_type' => 'ios',
                'login_by' => 'manual'
            ]
            
        ]);
    }
}
