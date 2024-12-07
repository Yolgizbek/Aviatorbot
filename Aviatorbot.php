<?php
ob_start(/start);
date_Default_timezone_set("Asia/kyrguzistan/Bishkek");
define("8126890936:AAEwm7ncO5OE4JszK6R3Z2LR0yr9sT3CZ38");

function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot"8126890936:AAEwm7ncO5OE4JszK6R3Z2LR0yr9sT3CZ38"/"$method";
$ch = curl_init("https://mel-bet.kg/ru/allgamesentrance/crash");
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}

function send($text,$key){
global $chat_id;
if($key == null){
return bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);
}else{
return bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'html',
'reply_markup'=>$key
]);
}
}

$update = json_decode(file_get_contents('php://input'));
if(!empty($update->message)){
if(!empty($update->message->chat->id)){
$chat_id = $update->message->chat->id;
}
}

send("<b>⚠️ Maʼlumotlar bazasiga ulanishda muammo yuz berdi!</b>",null);

// Menyuli xabar yuborish

$amenu = json_encode([
'inline_keyboard'=>[
[['text'=>"AVIATOR 🚀",'callback_data'=>"bukmeker=crash"]],
[['text'=>"LUCKY JET 💰",'callback_data'=>"bukmeker=lucky"]],
[['text'=>"JET X ⚡",'callback_data'=>"bukmeker=jet"]],
[['text'=>"Rocket X ⚡",'callback_data'=>"bukmeker=rock"]],
]]);
send("Qaysi oʻyin uchun keyingi koeffitsient kerak bolsa tanlang 👇👇👇",$amenu);
?>