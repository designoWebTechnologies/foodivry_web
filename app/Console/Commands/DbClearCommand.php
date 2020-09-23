<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Setting;
use DB;
class DbClearCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cronjob:demodata';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clearing the demo data Daily basics';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {   
        

        if(Setting::get('DEMO_MODE', 0) == 0) {
            \Log::info('demo data deleting');
            //$uservalues=array('stripe_cust_id'=>NULL,'wallet_balance'=>0);
            DB::table('users')->truncate();
            //DB::table('users')->update($uservalues);
            DB::table('password_resets')->truncate();
            DB::table('addons')->truncate();
            DB::table('addon_products')->truncate();
            DB::table('cards')->truncate();
            DB::table('cart_addons')->truncate();
            DB::table('categories')->truncate();
            DB::table('category_images')->truncate();
            DB::table('category_product')->truncate();
            DB::table('cuisines')->truncate();
            DB::table('cuisine_shop')->truncate();
            DB::table('custom_pushes')->truncate();
            DB::table('documents')->truncate();
            DB::table('email_templates')->truncate();
            DB::table('enquiry_transporters')->truncate();
            DB::table('favorites')->truncate();
            DB::table('newsletters')->truncate();
            DB::table('notice_boards')->truncate();
            DB::table('notifications')->truncate();
            DB::table('orders')->truncate();
            DB::table('order_disputes')->truncate();
            DB::table('order_dispute_comments')->truncate();
            DB::table('order_dispute_helps')->truncate();
            DB::table('order_invoices')->truncate();
            DB::table('order_ratings')->truncate();
            DB::table('order_timings')->truncate();
            DB::table('password_resets')->truncate();
            // DB::table('permissions')->truncate();
            DB::table('products')->truncate();
            DB::table('product_images')->truncate();
            DB::table('product_prices')->truncate();
            DB::table('promocodes')->truncate();
            DB::table('promocode_usages')->truncate();
            DB::table('request_filters')->truncate();
            DB::table('restuarants')->truncate();
            DB::table('shops')->truncate();
            DB::table('shop_banners')->truncate();
            DB::table('shop_password_resets')->truncate();
            DB::table('shop_timings')->truncate();
            DB::table('surge_pricings')->truncate();
            DB::table('transporters')->truncate();
            DB::table('transporter_password_resets')->truncate();
            DB::table('transporter_shifts')->truncate();
            DB::table('transporter_shift_timings')->truncate();
            DB::table('transporter_vehicles')->truncate();
            DB::table('user_addresses')->truncate();
            DB::table('user_carts')->truncate();
            DB::table('wallet_passbooks')->truncate();
            DB::table('zones')->truncate();

            $command = sprintf('php artisan db:seed --class=AddonsTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=AdminsTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=TransportersTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=UsersTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=CuisinesTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=CategoriesTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ProductsTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ProductPricesTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ProductImagesTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=CategoriesProductTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ShopsTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ShopCuisinesTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ShopsBannerTableSeeder');
             
            exec($command);
            $command = sprintf('php artisan db:seed --class=ShopTimingsTableSeeder');
             
            exec($command);
             

        }
    }
}
