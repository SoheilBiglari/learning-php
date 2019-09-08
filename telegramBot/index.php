<?php

use http\Url;

$token ="926234743:AAE9UT0juW-pjSnAOHkLCJrxyPci-THdfaQ";

$user_id ="267821085";
$msg = "Hello! can I help you?";
/*$gif = "goh nakhor";*/



$request_params =[
  'chat_id' => $user_id,
    'text'=> $msg,
];
/*if ($user_id = 'hello') {
    $request_params2 = [
        'chat_id' => $user_id,
        'text' => $gif
    ];
}*/

/*$request_params =[
  'chat_id' => $user_id,
  'text'=> $msg
];*/
/*if ($user_id = 'send me gif pls')*/

$request_url = "https://api.telegram.org/bot" . $token . '/sendMessage?' . http_build_query($request_params);
/*$request_url = "https://api.telegram.org/bot" . $token . '/sendMessage?' . http_build_query($request_params2);*/


file_get_contents($request_url);