<?php

namespace App\Http\Common;

use Illuminate\Http\Request;
use Curl\Curl;


 class FcmHelper {

    public static function push($device_token, $title, $text, $payload=[]) {
        // use App\Http\Common\NotificationHelper;
        // use App\Http\Common\FcmHelper;


        // TO send USE THIS SYNTAX
        // $notification = [   
        //     'receiver_id' => $ride->user_id,
        //     'receiver_type' => 'customer',
        //     'title' => $ride->ride_number,
        //     'text' => "A truck has been assigned on your ride",
        //     'payload' => json_encode(['module' => 'ride','id' => $ride->id,'icon_type' => "truck_assigned"]),
        // ];
        // NotificationHelper::create($notification);
        // $fcm = new FcmHelper;
        // $fcm->send($user->fcm_tokens(),$notification['title'],$notification['text'],json_decode($notification['payload']));
        // $token = $device_token;
        // $notification = ['title' =>$title , 'text' => $text, 'sound' => 'default', 'badge' => '1'];
        // $arrayToSend = ['to' => $token, 'notification' => $notification, 'data' => $payload, 'priority'=>'high'];

        $serverKey = env('FIREBASE_SERVER_KEY');
        $arrayToSend = [
            'to' => $device_token, 
            "notification" => [
                'title' => $title,
                'body'=> $text,
                'subtitle' => $text,
            ],
        ];
        $json = json_encode($arrayToSend);
        $headers = array();
        $headers[] = 'Content-Type: application/json';
        $headers[] = 'Authorization: key='. $serverKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($ch);
        if ($response === FALSE) {
            die('FCM Send Error: ' . curl_error($ch));
        }
        curl_close($ch);
        return $response;
    }
       
    
}
