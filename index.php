<?php

$botToken = "740210909:AAHqnF1gkdrD_1PXibnzd7W4lpn7M8ixDhk";

$website = "https://api.telegram.org/bot".$botToken;

echo $website;
$update = file_get_contents("php://input");
$update = json_decode($update, TRUE);

vardump($update);
/*$chatId = $update["message"]["chat"]["id"];
$chatType = $update["message"]["chat"]["type"];

$message = $update["message"]["text"];

switch ($message) {
    case '/ayuda':
        $response = "Le ayudaré en lo que pueda";
        sendMessage($chatId, $response);
        break;
}

function sendMessage($chatId, $mensaje){
    $url = $GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
    file_get_contents($url);
}
*/
?>
