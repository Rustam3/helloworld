<?php

$bottoken = "212604140:AAFjfHcqZhJrf350R0cq3GPWle9SNnUWxEo";
$website = "https://api.telegram.org/bot".$bottoken;

echo"hello1";
$update = file_get_contents('php://input');
echo"hello2";
$updatearray = json_decode($update, TRUE);

$length = count($updatearray["result"]);
$chatid = $updatearray["result"][$length-1]["message"]["chat"]["id"];
$text = $updatearray["result"][$length-1]["message"]["text"];

file_get_contents($website."/sendmessage?chat_id=".$chatid."&text=".$text);
