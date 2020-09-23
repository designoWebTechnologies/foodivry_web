<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        $this->call(AddonsTableSeeder::class);
    	$this->call(AdminsTableSeeder::class);
        $this->call(TransportersTableSeeder::class);
        $this->call(UsersTableSeeder::class);   
        $this->call(CuisinesTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProductPricesTableSeeder::class);
        $this->call(ProductImagesTableSeeder::class);
        $this->call(CategoriesProductTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(ShopCuisinesTableSeeder::class);
        $this->call(ShopsBannerTableSeeder::class);
        $this->call(ShopTimingsTableSeeder::class);
        //$this->call(RolesTableSeeder::class);      
        $this->call(SettingsTableSeeder::class);        
    }
}
