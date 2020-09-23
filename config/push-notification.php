<?php

return array(

    'IOSUser'     => array(
        'environment' =>env('IOS_USER_ENV', 'development'),
        'certificate' => app_path().'/apns/user/live_user.pem',
        'passPhrase'  => env('IOS_PUSH_PASS', 'Appoets123$'),
        'service'     =>'apns'
    ),
    'IOSProvider' => array(
        'environment' => env('IOS_PROVIDER_ENV', 'development'),
        'certificate' => app_path().'/apns/provider/live_provider.pem',
        'passPhrase'  => env('IOS_PROVIDER_PUSH_PASS', 'Appoets123$'),
        'service'     => 'apns'
    ),
    'IOSShop' => array(
        'environment' => env('IOS_SHOP_ENV', 'development'),
        'certificate' => app_path().'/apns/shop/FoodieRestaurantDist.pem',
        'passPhrase'  => env('IOS_SHOP_PUSH_PASS', 'Appoets123$'),
        'service'     => 'apns'
    ),
    'AndroidUser' => array(
        'environment' =>env('ANDROID_ENV', 'development'),
        'apiKey'      =>'AAAAyDt2NF4:APA91bGa7C8k-GjfMWRuSUcROWIzHeqEdDP54u0B3JI8Fxixt20c4U4HJ_5c0Zh_rHvqE3075DILv6bkfirjnlDn7T4HhEqYK77bjm2_NiFMfRftWWVk1ftrCnl_GWHTCswyn382xGqw',
        'service'     =>'gcm'
    )

);
