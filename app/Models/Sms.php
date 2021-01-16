<?php

namespace App\Models;

use Carbon\Carbon;

class Sms
{
    public static function sms($code,$phone)
    {
        $msg_txt = 'your verification code';
        $msg_txt .= ' '.'for Opportunity app is';
        $msg_txt .= ' '.$code;


        $text = urlencode($msg_txt);

        $url = 'https://api.unifonic.com/rest/Messages/Send';
        $postData = [
            'AppSid' => env('SMS_SID'),
            'Recipient' =>$phone,
            'Body' => $msg_txt,
        ];
        $postData = json_encode($postData);
        $ch = curl_init();
        curl_setopt_array($ch, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $postData,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/x-www-form-urlencoded"
            ),
        ));

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);
    }
}
