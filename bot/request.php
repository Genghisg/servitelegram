<?php

//echo "Hola como están, aquí desde Bolivia";
$botToken = "740210909:AAHqnF1gkdrD_1PXibnzd7W4lpn7M8ixDhk";

$sitioweb = "https://api.telegram.org/bot".$botToken;
$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);

$chatId = $update["message"]["chat"]["id"];
$chatType = $update["message"]["chat"]["type"];

$message = $update["message"]["text"];

switch ($message) {
    case '/ayuda':
        $response = "Le ayudaré en lo que pueda";
        sendMessage($chatId, $response);
        break;
    default:
        break;
}

function sendMessage($chatId, $message){
    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
    file_get_contents($url);
}
?>
