<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Transporter;
use Exception;
use Log;
use Setting;
use App\Notification;
use PushNotification;
use App\Shop;
/*use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;
use App\Notifications\WebPush;*/
class SendPushNotification extends Controller{
    /**
     * Money added to user wallet.
     *
     * @return void
     */
     
    public function __construct(){
        if (!defined('API_ACCESS_KEY')) define('API_ACCESS_KEY', 'AAAATJ8vYi0:APA91bH9EVigAdTNEm9ZHN3YRj9q-OwPvDpXHTAGJ5Be1AnfOzdUs9iX4ZOT29KrLN-oWEt3uUC-vV33BQ_ExOqe5H1IxpZKRX_ftAoVTK0c-VGRsyt7pdTM9fExOqKkJyteiIOiymzH');
    }
    
    public function WalletMoney($user_id, $money){
        Log::info($user_id);
        return $this->sendPushToUser($user_id, $money.' '.trans('form.push.added_money_to_wallet'));
    }

    /**
     * Money charged from user wallet.
     *
     * @return void
     */
    public function ChargedWalletMoney($user_id, $money){
        return $this->sendPushToUser($user_id, $money.' '.trans('form.push.charged_from_wallet'));
    }

    /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToUser($user_id, $push_message,$page = null){
        try{
            $user = User::findOrFail($user_id);
            Notification::create([
                'user_id' => $user_id,
                'message' => $push_message
            ]);
            $message = \PushNotification::Message($push_message,array(
                'badge' => 1,
                'sound' => 'example.aiff',
                'actionLocKey' => 'Action button title!',
                'locKey' => 'localized key',
                'locArgs' => array(
                    'localized args',
                    'localized args',
                ),
                'launchImage' => 'image.jpg',
                'custom' => array('custom data' => array(
                    $page
                ))
            ));
            if($user->device_token != ""){
                \Log::info($page);
                if($user->device_type == 'ios'){
                    return \PushNotification::app('IOSUser')
                        ->to($user->device_token)
                        ->send($message);
                }elseif($user->device_type == 'android'){
                    return \PushNotification::app('AndroidUser')
                        ->to($user->device_token)
                        ->send($push_message);
                }
            }

        } catch(Exception $e){
            return $e;
        }
    }
    
    // public function getAccessKey(){
    //     $matchThese = ['key' => 'FIREBASE_ACCESS_KEY'];
    //     $keys = Settings::select()->where($matchThese)->first()->toArray();
    //     if (!defined('API_ACCESS_KEY')) return define('API_ACCESS_KEY', $keys['value']);
    // }
    
    public function sendPushNotificationToUser($user_id, $push_message,$page = null){
        $users = User::find($user_id);
        $registrationIds = array($users->device_token);
        $msg = array(
            'title'=>'Your order id is:'.$page['order_id'],
            'body' => $push_message,
        );
        $fields = array(
            'registration_ids' => $registrationIds,
            'data' => $msg
        );
        $headers = array (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        // echo "hi User".json_encode($fields);exit;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);    
        if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

     /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToShop($user_id, $push_message,$page = null){
        try{
            $user = Shop::findOrFail($user_id);
            Notification::create([
                'user_id' => $user_id,
                'message' => $push_message
            ]);
            $message = PushNotification::Message($push_message,array(
                'badge' => 1,
                'sound' => 'example.aiff',
                'actionLocKey' => 'Action button title!',
                'locKey' => 'localized key',
                'locArgs' => array(
                    'localized args',
                    'localized args',
                ),
                'launchImage' => 'image.jpg',
                'custom' => array('custom data' => array(
                    $page
                ))
            ));
            if($user->device_token != ""){
                \Log::info('sending push for user : '. $user->name);
                if($user->device_type == 'ios'){
                    return PushNotification::app('IOSShop')
                        ->to($user->device_token)
                        ->send($message);
                }elseif($user->device_type == 'android'){
                    return PushNotification::app('AndroidUser')
                        ->to($user->device_token)
                        ->send($message);
                }
            }
        } catch(Exception $e){
            return $e;
        }
    }
    
    public function sendPushNotificationToShop($shop_id, $push_message,$page = null){
        $shops = Shop::find($shop_id);
        $registrationIds = array($shops->device_token);
        $msg = array(
            'title'=>'New Order Request',
            'body' => $push_message,
        );
        $fields = array(
            'registration_ids' => $registrationIds,
            'data' => $msg
        );
        $headers = array (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        // echo "hi Shop".json_encode($fields);exit;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);    
        if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }

    /**
     * Sending Push to a user Device.
     *
     * @return void
     */
    public function sendPushToProvider($provider_id, $push_message,$page = null){
        try{
            $provider = Transporter::findOrFail($provider_id);
            Notification::create([
                'transporter_id' => $provider_id,
                'message' => $push_message
            ]);
            $message = PushNotification::Message($push_message,array(
                'badge' => 1,
                'sound' => 'example.aiff', 
                'actionLocKey' => 'Action button title!',
                'locKey' => 'localized key',
                'locArgs' => array(
                    'localized args',
                    'localized args',
                ),
                'launchImage' => 'image.jpg',
                'custom' => array('custom data' => array(
                    $page
                ))
            ));
            if($provider->device_token != ""){
                \Log::info('sending push for provider : '. $provider->name);
                if($provider->device_type == 'ios'){
                    return \PushNotification::app('IOSProvider')
                        ->to($provider->device_token)
                        ->send($message);
                }elseif($provider->device_type == 'android'){
                    return \PushNotification::app('AndroidUser')
                        ->to($provider->device_token)
                        ->send($message);
                }
            }
        } catch(Exception $e){
            return $e;
        }
    }
    
    public function sendPushNotificationToProvider($providor_id, $push_message,$page = null){
        $transporter = Transporter::find($providor_id);
        $registrationIds = array($transporter->device_token);
        $msg = array(
            'title'=>'Your new ride here',
            'body' => $push_message,
        );
        $fields = array(
            'registration_ids' => $registrationIds,
            'data' => $msg
        );
        $headers = array (
            'Authorization: key=' . API_ACCESS_KEY,
            'Content-Type: application/json'
        );
        // echo 'hi providor'.json_encode($fields);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);  
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result = curl_exec($ch);    
        if ($result === FALSE) {
           die('Curl failed: ' . curl_error($ch));
        }
        curl_close($ch);
    }
}