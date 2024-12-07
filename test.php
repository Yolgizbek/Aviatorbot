<?php
//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

$admin = '1722623741'; // Admin ID
  $MK="☃️Bot: @Yangiyilsertifikati_tBot";
$token = '8126890936:AAEwm7ncO5OE4JszK6R3Z2LR0yr9sT3CZ38';  //Bot token
$userR = "Player_of_Gamer"; //admin user
$kanalimz ="@XXXTENTACION_MUSIC_1"; //kanal useri

function bot($method,$datas=[]){
global $token;
$url = "https://api.telegram.org/bot".$token."/".$method;
$ch = curl_init();
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

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$data = $callback->data;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$step = file_get_contents("step/$cid.step");
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$username = $message->from->username;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$ccid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$photo = $message->photo;
$name = $message->from->first_name;
$userini = $message->from->username;
$Muhiddin = file_get_contents("data/$from_id/muh.txt");
$Uzkmm1 = file_get_contents("data/$from_id/Uzkmm1.txt");
$Uzkmm2 = file_get_contents("data/$from_id/Uzkmm2.txt");
$to =  file_get_contents("data/$from_id/token.txt");
$url =  file_get_contents("data/$from_id/url.txt");

$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"☃️Rasm Tayyorlash"],['text'=>"🗞Yangiliklar"]],
[['text'=>"👨‍💻Dasturchi"],],
[['text'=>"📚Ism Ma'nosi"],['text'=>"🎄Yangi Yil"]], 
[['text'=>"♻️Yangilash♻️"],],
]
]);

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

$ret1 = bot("getChatMember",[
         "chat_id"=>"-1001506238103", // Glavniyga_kartinkalar_rasmlar
         "user_id"=>$uid
         ]);
$ret2 = bot("getChatMember",[
         "chat_id"=>"-1001506238103", // Botlar_Robotlari
         "user_id"=>$uid
         ]);
$stat1 = $ret1->result->status;
$stat2 = $ret2->result->status;

         if(($stat1=="creator" or $stat1=="administrator" or $stat1=="member") and ($stat2=="creator" or $stat2=="administrator" or $stat2=="member")){}else{
     bot("sendmessage",[
         "chat_id"=>$uid,
         "text"=>"➕<b>Quyidagi kanalimizga obuna bo?ling. A'zo bo'lib qayta /start bosing! Botni keyin to?liq ishlatishingiz mumkin!</b>",
         'disable_web_page_preview'=>true,
         'parse_mode'=>'html',
         "reply_to_message_id"=>$mid,
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"Azo bo'lish🎯","url"=>"https://t.me/XXTENTACION_MUSIC_1"],],
]
]),
]); 
return false;
}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

if($text=="💫Orqaga"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🏡<b>Siz Bosh menyudasiz.</b>",
'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu
]);
}


if($type=="private"){
if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"👋Assalomu Alaykum $name

🤖: Men orqali ismingiz ajoyib rasmga joylashingiz mumkin!

👇Buning uchun pastdagi bo'limlarni birini tanlang👇",
'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu,
]);
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"🌋Diqqat <a href = 'tg://user?id=$cid'>$name</a> Botga🤖 /start Bosdi!
<b>🌖Usernamesi:</b> @$userini
<b>🆔️ Raqami:</b> <code>$cid</code>",
'parse_mode'=>'html',
]);
}}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

$lichka=file_get_contents("Muhiddin.db");
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("Muhiddin.db","$lichka\n$cid");
}
}

if($tx == "/stat"){
if($cid == $admin){
$lichka=file_get_contents("Muhiddin.db");
$lich=substr_count($lichka,"\n");
$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentabr9 10Oktabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oy = "$ex2[1]";
$kun = date("d",strtotime("2 hour"));
$kunlar = date("d.m",strtotime("2 hour"));
$soat = date("H:i:s",strtotime("2 hour"));
$yil = date('Y',strtotime('2 hour'));
$sana="📆Hozir: $yil-Yil, $kun-$oy, $soat";
bot('sendmessage',[
'chat_id'=>$cid,
    'text'=> "📈<b>Bot statatistikasi:</b>    
👥A'zolar: <b>$lich</b>
📣Kanalimiz: <b>@XXXTENTACION_MUSIC_1</b>
🖤Admin: <b>@Player_of_gamer</b>

$sana ",
'parse_mode' => 'html',
]);
}
}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp
//yangi yil
if($text=="🎄Yangi Yil"){
  $kun1 = date('z ',strtotime('2 hour')); 
  $a = 365;
  $c2 = $a-$kun1;
  $d = date('L ',strtotime('2 hour'));
  $b = $c2+$d;
  $f = $b+81;
  $e = $b+240;
  $kun2 = date('H ',strtotime('2 hour')); 
  $a2 = 23;
  $b2 = $a2-$kun2;
  $kun3 = date('i ',strtotime('2 hour')); 
  $a3 = 59;
  $b3 = $a3-$kun3;
  $kun4 = date('s ',strtotime('2 hour')); 
  $a4 = 60;
  $b4 = $a4-$kun4;
  $mmtxt="
☃️Yangi yilga Bayramiga

 🎄$b kun 
 🎊$b2 soat
 🎁 $b3 minut
 ❄️$b4 sekund qoldi!

🎅🏽Hurmatli '$name' 
🎉Kirib kelayotgan
🎁Yangi yil bilan! ";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'user_id'=>$cid,
    'reply_to_message_id'=>$mid,
    'text'=>$mmtxt,
    'parse_mode'=>'html',
'reply_markup'=>$menu,
  ]);
}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

if($tx == "👨‍💻Dasturchi"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
🔥*Adminga murojat qilish uchun pastdagi '👨‍💻Adminstrator' tugmasini bosing!*",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👨‍💻Adminstrator","url"=>"https://t.me/Player_of_Gamer"],],
]
])
]);
}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp
//Yangiliklar
$url = "https://daryo.uz/feed/";
$rss = simplexml_load_file($url);
foreach ($rss->channel->item as $item) {
$line = $item->title;
$link = $item->link;
}  

if($text == "🗞Yangiliklar"){
bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
🎩Eng So'ngi va Qaynoq 🗞️Yangiliklar

[$line]($link)

📚To'liq O'qish Uchun Bosing!⤴️",
'parse_mode'=>'Markdown',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu, 
]);
}


//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp
//Ismlar manosi
if($text == "📚Ism Ma'nosi"){
  bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"📚Ismingizni yuboring va biroz vaqt kuting!",
  'reply_markup'=>$rpl,
    ]);
    }
if($reply=="📚Ismingizni yuboring va biroz vaqt kuting!"){
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"🕵️‍♂️ismingiz maʼnosini izlayapman...",
 'parse_mode'=>"HTML"
 ]);
 sleep(2);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.4);
$ism = file_get_contents("https://ismlar.com/search/$text");
  $exp = explode('<p class="text-size-5">',$ism);
  $expl = explode('<div class="col-12 col-md-4 text-md-right">',$exp[1]);
  $im = str_replace($expl[1],' ',$exp[1]);
  $ims = str_replace('</p>',' ',$im);
  $isms = str_replace('</div>',' ',$ims);
  $ismn = str_replace('<div class="col-12 col-md-4 text-md-right">',' ',$isms);
  $ismk = str_replace('&#039;','`',$ismn);
  $ismsm = trim("$ismk");
 bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
📚 ISMLAR MA'NOSI 📚
➖➖➖➖➖➖➖➖➖➖➖
🖍Siz Yozgan So'z: $text
➖➖➖➖➖➖➖➖➖➖➖

💠Manosi: | $ismsm! |

$MK",
 'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu, 
]);
}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp
//yangilash
if($text == "♻️Yangilash♻️"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"♻️Ma'lumotlar Yangilanmoqda...",
 'parse_mode'=>"HTML"
 ]);
 sleep(1.1);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'text'=>'🔄Yangilanmoqda... 0%🔅🔆
🦠🦠🦠🦠🦠🦠🦠🦠🦠🚑'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid +1,
 'text'=>'🔃Yangilanmoqda... 10%🔆🔅
🦠🦠🦠🦠🦠🦠🦠🦠🚑🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔄Yangilanmoqda... 20%🔅🔆
🦠🦠🦠🦠🦠🦠🦠🚑🦠🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔃Yangilanmoqda... 30%🔆🔅
🦠🦠🦠🦠🦠🦠🚑🦠🦠🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔄Yangilanmoqda... 40%🔅🔆
🦠🦠🦠🦠🦠🚑🦠🦠🦠🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔃Yangilanmoqda... 50% 🔆🔅
🦠🦠🦠🦠🚑🦠🦠🦠🦠🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔄Yangilanmoqda... 60%🔅🔆
🦠🦠🦠🚑🦠🦠🦠🦠🦠🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔃Yangilanmoqda... 70%🔆🔅
🦠🦠🚑🦠🦠🦠🦠🦠🦠🦠'
 ]); 
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔄Yangilanmoqda... 80%🔅🔆
🦠🚑🦠🦠🦠🦠🦠🦠🦠🦠'
]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'🔃Yangilanmoqda... 90%🔆🔅
🚑🦠🦠🦠🦠🦠🦠🦠🦠🦠'
 ]);
 sleep(0.5);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳ Yangilandi ⌛✔️'
 ]); 
 sleep(0.7);
  bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.7);
 bot('sendMessage', [
'chat_id'=>$cid,
'text'=>"
🚀Barcha Ma'lumotlar Yangilandi!

$MK",
'parse_mode'=>'html',
'reply_to_message_id'=> $mid, 
'reply_markup'=>$menu, 
]);
}


//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

if($text=="☃️Rasm Tayyorlash" || $text == "🎉Yana Yasash"){
file_put_contents("data/$from_id/Uzkmm1.txt", 'to');
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"🖍Ismingizni yozib 🤖Menga Yuboring!
🙂Men Sizga Rasm Tayyorlab beraman!",
'parse_mode'=>'html',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"💫Orqaga"]],

]
])
]);
}
elseif($Uzkmm1 == "to"){
$ex=$text;
$ex=$text;
bot('SendMessage',[
'chat_id'=>$chat_id,
 'text'=>"📛Iltimos biroz kuting, buyurtmangiz hozir tayyor bo'ladi...",
 'parse_mode'=>"HTML"
 ]);
 sleep(1.1);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'text'=>'⏳Tayyorlanmoqda...
🌚🌚🌚🌚🌚🌚🌚🌚🌚🌚 0% 0️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid +1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌚🌚🌚🌚🌚🌚🌚🌚🌚 10% 1️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌚🌚🌚🌚🌚🌚🌚🌚 20% 2️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌚🌚🌚🌚🌚🌚🌚 30% 3️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌚🌚🌚🌚🌚🌚 40% 4️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌝🌚🌚🌚🌚🌚 50% 5️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌝🌝🌚🌚🌚🌚 60% 6️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌝🌝🌝🌚🌚🌚 70% 7️⃣'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌝🌝🌝🌝🌚🌚 80% 8️⃣'
]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌝🌝🌝🌝🌝🌚 90% 9️⃣'
 ]);
 sleep(0.3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$mid + 1,
 'text'=>'⏳Tayyorlanmoqda...
🌝🌝🌝🌝🌝🌝🌝🌝🌝🌝 100% 🔟'
 ]);
 sleep(0.3);
bot('editMessageText',[
 'chat_id'=>$cid,
 'message_id'=>$mid + 1,
 'text'=>'✔️Tayyor 100%✔️'
 ]); 
  bot('deletemessage',[
    'chat_id'=>$cid,
    'message_id'=>$mid + 1,
  ]);
 sleep(0.5);
bot('sendphoto',[
'chat_id'=>$cid,
'photo'=>"https://muhiddin.xvest.ru/Apilar/NewYear/api.php?text=$ex",
'caption'=>"🤩Buyurtma qilgan Rasmingiz tayyor bo'ldi!
🤗Ismingiz: $ex

$MK",
'parse_mode'=>'HTML',
'reply_markup'=>json_encode([
'resize_keyboard'=>false,
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"🎉Yana Yasash"],['text'=>"💫Orqaga"]],
]
])
]);
unlink("data/$from_id/Uzkmm1.txt");
exit();
}

//Ushbu Cod @UzKMM | @KingsOfPhp ga tegishli
//Erkak bo'lsang Manba qolsin | Kanalimizga obuna bo'ling @KingsOfPhp

?>
