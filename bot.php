<?php

$botToken = "311504118:AAHp_UmGfAI1sQP3NlnvJkzEbMfBchNkiwI";
$website = "https://api.telegram.org/bot".$botToken;

$update = file_get_contents($website."/getupdates");

$updateArray = json_decode($update, TRUE);

print_r($updateArray);

$chatId = $updateArray["result"][0]["message"]["chat"]["id"];


file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=KIGS");  
file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=that's my nickname"); 

?>
