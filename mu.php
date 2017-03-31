<?php

define('API_KEY','303405704:AAFmzSOaS4ozBaHQ5qe3QZlprVNfsMVwiD0');
//----######------
function makereq($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,http_build_query($datas));
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//##############=--API_REQ
function apiRequest($method, $parameters) {
  if (!is_string($method)) {
    error_log("Method name must be a string\n");
    return false;
  }
  if (!$parameters) {
    $parameters = array();
  } else if (!is_array($parameters)) {
    error_log("Parameters must be an array\n");
    return false;
  }
  foreach ($parameters as $key => &$val) {
    // encoding to JSON array parameters, for example reply_markup
    if (!is_numeric($val) && !is_string($val)) {
      $val = json_encode($val);
    }
  }
  $url = "https://api.telegram.org/bot".API_KEY."/".$method.'?'.http_build_query($parameters);
  $handle = curl_init($url);
  curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 5);
  curl_setopt($handle, CURLOPT_TIMEOUT, 60);
  return exec_curl_request($handle);
}
//----######------
//---------
$update = json_decode(file_get_contents('php://input'));
var_dump($update);
//=========
$chat_id = $update->message->chat->id;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$textmessage = isset($update->message->text)?$update->message->text:'';
$txtmsg = $update->message->text;
$reply = $update->message->reply_to_message->forward_from->id;
$stickerid = $update->message->reply_to_message->sticker->file_id;
$admin = 67516785;
$step = file_get_contents("data/".$from_id."/step.txt");
$ban = file_get_contents('data/banlist.txt');
//-------
function SendMessage($ChatId, $TextMsg)
{
 makereq('sendMessage',[
'chat_id'=>$ChatId,
'text'=>$TextMsg,
'parse_mode'=>"MarkDown"
]);
}
function SendSticker($ChatId, $sticker_ID)
{
 makereq('sendSticker',[
'chat_id'=>$ChatId,
'sticker'=>$sticker_ID
]);
}
function Forward($KojaShe,$AzKoja,$KodomMSG)
{
makereq('ForwardMessage',[
'chat_id'=>$KojaShe,
'from_chat_id'=>$AzKoja,
'message_id'=>$KodomMSG
]);
}
function save($filename,$TXTdata)
	{
	$myfile = fopen($filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
//===========
$inch = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@pmr_creator=".$from_id);
	
	if (strpos($inch , '"status":"left"') !== false ) {
SendMessage($chat_id,"Ø¨Ø±Ø§ÛŒ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Ø±Ø¨Ø§Øª Ø§ÙˆÙ„ Ø¯Ø± Ú©Ø§Ù†Ø§Ù„ Ù…Ø§ Ø¹Ø¶Ùˆ Ø´ÙˆÛŒØ¯.
@pmr_creator");
}
if (strpos($ban , "$from_id") !== false  ) {
SendMessage($chat_id,"You Are Banned From Server.ðŸ¤“\nDon't Message Again...ðŸ˜Ž\nâž–âž–âž–âž–âž–âž–âž–âž–âž–âž–\nØ¯Ø³ØªØ±Ø³ÛŒ Ø´Ù…Ø§ Ø¨Ù‡ Ø§ÛŒÙ† Ø³Ø±ÙˆØ± Ù…Ø³Ø¯ÙˆØ¯ Ø´Ø¯Ù‡ Ø§Ø³Øª.ðŸ¤“\nÙ„Ø·ÙØ§ Ù¾ÛŒØ§Ù… Ù†Ø¯Ù‡ÛŒØ¯...ðŸ˜Ž");
	}

elseif(isset($update->callback_query)){
    $callbackMessage = '';
    var_dump(makereq('answerCallbackQuery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>$callbackMessage
    ]));
    $chat_id = $update->callback_query->message->chat->id;
    
    $message_id = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
    if (strpos($data, "del") !== false ) {
    $botun = str_replace("del ","",$data);
    unlink("bots/".$botun."/index.php");
    save("data/$chat_id/bots.txt","");
    save("data/$chat_id/tedad.txt","0");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"Ø±Ø¨Ø§Øª Ø´Ù…Ø§ Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ø­Ø°Ù Ø´Ø¯ !\n Robot has ben deleted!",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"Ø¨Ù‡ Ú©Ø§Ù†Ø§Ù„ Ù…Ø§ Ø¨Ù¾ÛŒÙˆÙ†Ø¯ÛŒØ¯ - Pease join to my channel",'url'=>"https://telegram.me/pmr_creator"]
                    ]
                ]
            ])
        ])
    );
 }
 else {
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"Ø®Ø·Ø§-Error",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    [
                        ['text'=>"Ø¨Ù‡ Ú©Ø§Ù†Ø§Ù„ Ù…Ø§ Ø¨Ù¾ÛŒÙˆÙ†Ø¯ÛŒØ¯ - Pleas join to my channel",'url'=>"https://telegram.me/pmr_creator"]
                    ]
                ]
            ])
        ])
    );
 }
}

elseif ($textmessage == 'ðŸ”™ Ø¨Ø±Ú¯Ø´Øª - Back') {
save("data/$from_id/step.txt","none");
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ðŸ”ƒ Ø¨Ù‡ Ù…Ù†ÙˆÛŒ Ø§ØµÙ„ÛŒ Ø®ÙˆØ´ Ø¢Ù…Ø¯ÛŒØ¯

ðŸ”ƒ Welcome To Main Menu",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
  [
                   ['text'=>"ÙØ§Ø±Ø³ÛŒ ðŸ‡®ðŸ‡·"],['text'=>"English ðŸ‡¦ðŸ‡º"]          
]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
}
elseif ($step == 'delete') {
$botun = $txtmsg ;
if (file_exists("bots/".$botun."/index.php")) {

$src = file_get_contents("bots/".$botun."/index.php");

if (strpos($src , $from_id) !== false ) {
save("data/$from_id/step.txt","none");
unlink("bots/".$botun."/index.php");
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ðŸš€ Ø±Ø¨Ø§Øª Ø´Ù…Ø§ Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ù¾Ø§Ú© Ø´Ø¯Ù‡ Ø§Ø³Øª 
ÛŒÚ© Ø±Ø¨Ø§Øª Ø¬Ø¯ÛŒØ¯ Ø¨Ø³Ø§Ø²ÛŒØ¯ ðŸ˜„
Yur Robot has ben deleted 
Please create new bot",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"/start"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
}
else {
SendMessage($chat_id,"Ø®Ø·Ø§!
Ø´Ù…Ø§ Ù†Ù…ÛŒ ØªÙˆØ§Ù†ÛŒØ¯ Ø§ÛŒÙ† Ø±Ø¨Ø§Øª Ø±Ø§ Ù¾Ø§Ú© Ú©Ù†ÛŒØ¯ !
Error 
You cant delete this bot");
}
}
else {
SendMessage($chat_id,"ÛŒØ§ÙØª Ù†Ø´Ø¯.\n Not found");
}
}
elseif ($step == 'create bot') {
$token = $textmessage ;

			$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$token .'/getme'));
			//==================
			function objectToArrays( $object ) {
				if( !is_object( $object ) && !is_array( $object ) )
				{
				return $object;
				}
				if( is_object( $object ) )
				{
				$object = get_object_vars( $object );
				}
			return array_map( "objectToArrays", $object );
			}

	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
		if($ok != 1) {
			//Token Not True
			SendMessage($chat_id,"ØªÙˆÚ©Ù† Ù†Ø§ Ù…Ø¹ØªØ¨Ø±!\nYour token is invalid");
		}
		else
		{
		SendMessage($chat_id,"Ø¯Ø± Ø­Ø§Ù„ Ø³Ø§Ø®Øª Ø±Ø¨Ø§Øª ...\n Are making robots...");
		if (file_exists("bots/$un/index.php")) {
		$source = file_get_contents("bot/index.php");
		$source = str_replace("**TOKEN**",$token,$source);
		$source = str_replace("**ADMIN**",$from_id,$source);
		save("bots/$un/index.php",$source);	
		file_get_contents("http://api.telegram.org/bot".$token."/setwebhook?url=https://telegrambots2.000webhostapp.com/PvResanSaz/bots/$un/index.php");

var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ðŸš€ Ø±Ø¨Ø§Øª Ø´Ù…Ø§ Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ø¢Ù¾Ø¯ÛŒØª Ø´Ø¯Ù‡ Ø§Ø³Øª 
Your Robot Has ben Created
[Ø¨Ø±Ø§ÛŒ ÙˆØ±ÙˆØ¯ Ø¨Ù‡ Ø±Ø¨Ø§Øª Ø®ÙˆØ¯ Ú©Ù„ÛŒÚ© Ú©Ù†ÛŒØ¯ ðŸ˜ƒ - start Bot](https://telegram.me/$un)",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª - Back"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		}
		else {
		save("data/$from_id/tedad.txt","1");
		save("data/$from_id/step.txt","none");
		save("data/$from_id/bots.txt","$un");
		
		mkdir("bots/$un");
		mkdir("bots/$un/data");
		mkdir("bots/$un/data/btn");
		mkdir("bots/$un/data/words");
		mkdir("bots/$un/data/profile");
		mkdir("bots/$un/data/setting");
		
		save("bots/$un/data/blocklist.txt","");
		save("bots/$un/data/last_word.txt","");
		save("bots/$un/data/pmsend_txt.txt","Message Sent!");
		save("bots/$un/data/start_txt.txt","Hello World!");
		save("bots/$un/data/forward_id.txt","");
		save("bots/$un/data/users.txt","$from_id\n");
		mkdir("bots/$un/data/$from_id");
		save("bots/$un/data/$from_id/type.txt","admin");
		save("bots/$un/data/$from_id/step.txt","none");
		
		save("bots/$un/data/btn/btn1_name","");
		save("bots/$un/data/btn/btn2_name","");
		save("bots/$un/data/btn/btn3_name","");
		save("bots/$un/data/btn/btn4_name","");
		
		save("bots/$un/data/btn/btn1_post","");
		save("bots/$un/data/btn/btn2_post","");
		save("bots/$un/data/btn/btn3_post","");
		save("bots/$un/data/btn/btn4_post","");
	
		save("bots/$un/data/setting/sticker.txt","âœ…");
		save("bots/$un/data/setting/video.txt","âœ…");
		save("bots/$un/data/setting/voice.txt","âœ…");
		save("bots/$un/data/setting/file.txt","âœ…");
		save("bots/$un/data/setting/photo.txt","âœ…");
		save("bots/$un/data/setting/music.txt","âœ…");
		save("bots/$un/data/setting/forward.txt","âœ…");
		save("bots/$un/data/setting/joingp.txt","âœ…");
		
		$source = file_get_contents("bot/index.php");
		$source = str_replace("**TOKEN**",$token,$source);
		$source = str_replace("**ADMIN**",$from_id,$source);
		save("bots/$un/index.php",$source);	
		file_get_contents("http://api.telegram.org/bot".$token."/setwebhook?url=https://telegrambots2.000webhostapp.com/PvResanSaz/bots/$un/index.php");

var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ðŸš€ Ø±Ø¨Ø§Øª Ø´Ù…Ø§ Ø¨Ø§ Ù…ÙˆÙÙ‚ÛŒØª Ù†ØµØ¨ Ø´Ø¯Ù‡ Ø§Ø³Øª Your Robot Has ben Created
[Ø¨Ø±Ø§ÛŒ ÙˆØ±ÙˆØ¯ Ø¨Ù‡ Ø±Ø¨Ø§Øª Ø®ÙˆØ¯ Ú©Ù„ÛŒÚ© Ú©Ù†ÛŒØ¯ ðŸ˜ƒ - start Bot](https://telegram.me/$un)",		
                'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª - Back"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		}
}
}
elseif (strpos($textmessage, "/setvip") !== false) {
$botun = str_replace("/setvip ","",$textmessage);
SendMessage($chat_id,"$textmessage");
/*$src = file_get_contents("bots/$botun/index.php");
$nsrc = str_replace("**free**","gold",$src);
save("data/$botun/index.php",$nsrc);
SendMessage($chat_id,"Updated!");*/
}
elseif (strpos($textmessage , "/toall") !== false ) {
if ($from_id == $admin) {
$text = str_replace("/toall","",$textmessage);
$fp = fopen( "data/users.txt", 'r');
while( !feof( $fp)) {
 $users = fgets( $fp);
SendMessage($users,"$text");
}
}
else {
SendMessage($chat_id,"You Are Not Admin");
}
}
elseif (strpos($textmessage , "/feedback") !== false ) {
if ($from_id == $ban) {
$text = str_replace("/feedback","",$textmessage);
SendMessage($chat_id," Ù†Ø¸Ø± Ø´Ù…Ø§ Ø§Ø±Ø³Ø§Ù„ Ø´Ø¯\n Your comment has been sent");
SendMessage($admin,"FeedBack : \n name: $name \n username: $username \n id: $from_id\n Text: $text");
}
else {
SendMessage($chat_id,"You Are banned");
}
}
elseif (strpos($textmessage , "/report") !== false ) {
if ($from_id == $ban) {
$text = str_replace("/report","",$textmessage);
SendMessage($chat_id,"Ø¨Ø¹Ø¯ Ø§Ø² ØªØ§ÛŒÛŒØ¯ Ø±Ø¨Ø§Øª Ø±Ø¨Ø§Øª Ø¨Ù† Ù…ÛŒØ´ÙˆØ¯\nRobots Ben is later confirmed");
SendMessage($admin,"Report : \n name: $name \n username: $username \n id: $from_id\n Bot: $text");
}
else {
SendMessage($chat_id,"You Are banned");
}
}
elseif($textmessage == 'ðŸš€ Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ù…Ù†')
{
$botname = file_get_contents("data/$from_id/bots.txt");
if ($botname == "") {
SendMessage($chat_id,"Ø´Ù…Ø§ Ù‡Ù†ÙˆØ² Ù‡ÛŒÚ† Ø±Ø¨Ø§ØªÛŒ Ù†Ø³Ø§Ø®ØªÙ‡ Ø§ÛŒØ¯ !");
return;
}
 	var_dump(makereq('sendMessage',[
	'chat_id'=>$update->message->chat->id,
	'text'=>"Ù„ÛŒØ³Øª Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø´Ù…Ø§ : ",
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"ðŸ‘‰ @".$botname,'url'=>"https://telegram.me/".$botname]
	]
	]
	])
	]));
}
elseif($textmessage == 'ðŸš€ my robots')
{
$botname = file_get_contents("data/$from_id/bots.txt");
if ($botname == "") {
SendMessage($chat_id,"You still have not robots!");
return;
}
 	var_dump(makereq('sendMessage',[
	'chat_id'=>$update->message->chat->id,
	'text'=>"Your Bot Lists : ",
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"ðŸ‘‰ @".$botname,'url'=>"https://telegram.me/".$botname]
	]
	]
	])
	]));
}
elseif($textmessage == '/start' )
{
if (!file_exists("data/$from_id/step.txt")) {
mkdir("data/$from_id");
save("data/$from_id/step.txt","none");
save("data/$from_id/tedad.txt","0");
save("data/$from_id/bots.txt","");
$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
}

var_dump(makereq('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"Please Select your Language.
âž–âž–âž–âž–âž–
Ù„Ø·ÙØ§ Ø²Ø¨Ø§Ù† Ø®ÙˆØ¯ Ø±Ø§ Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯.",
  'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
[
                   ['text'=>"ÙØ§Ø±Ø³ÛŒ ðŸ‡®ðŸ‡·"],['text'=>"English ðŸ‡¦ðŸ‡º"]          
]
             ],
             'resize_keyboard'=>true
         ])
      ]));
}
elseif($textmessage == 'ðŸ‡¦ðŸ‡º ØªØºÛŒÛŒØ± Ø²Ø¨Ø§Ù† ðŸ‡®ðŸ‡·' )
{
if (!file_exists("data/$from_id/step.txt")) {
mkdir("data/$from_id");
save("data/$from_id/step.txt","none");
save("data/$from_id/tedad.txt","0");
save("data/$from_id/bots.txt","");
$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
}

var_dump(makereq('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"Please Select your Language.
âž–âž–âž–âž–âž–
Ù„Ø·ÙØ§ Ø²Ø¨Ø§Ù† Ø®ÙˆØ¯ Ø±Ø§ Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯.",
  'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
[
                   ['text'=>"ÙØ§Ø±Ø³ÛŒ ðŸ‡®ðŸ‡·"],['text'=>"English ðŸ‡¦ðŸ‡º"]          
]
             ],
             'resize_keyboard'=>true
         ])
      ]));
}
elseif($textmessage == 'ðŸ‡¦ðŸ‡º Language ðŸ‡®ðŸ‡·' )
{
if (!file_exists("data/$from_id/step.txt")) {
mkdir("data/$from_id");
save("data/$from_id/step.txt","none");
save("data/$from_id/tedad.txt","0");
save("data/$from_id/bots.txt","");
$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
}

var_dump(makereq('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"Please Select your Language.
âž–âž–âž–âž–âž–
Ù„Ø·ÙØ§ Ø²Ø¨Ø§Ù† Ø®ÙˆØ¯ Ø±Ø§ Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯.",
  'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
[
                   ['text'=>"ÙØ§Ø±Ø³ÛŒ ðŸ‡®ðŸ‡·"],['text'=>"English ðŸ‡¦ðŸ‡º"]          
]
             ],
             'resize_keyboard'=>true
         ])
      ]));
}
elseif($textmessage == 'English ðŸ‡¦ðŸ‡º')
{

if (!file_exists("data/$from_id/step.txt")) {
mkdir("data/$from_id");
save("data/$from_id/step.txt","none");
save("data/$from_id/tedad.txt","0");
save("data/$from_id/bots.txt","");
$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
}

var_dump(makereq('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"HelloðŸ‘‹ðŸ˜‰

ðŸ”¹ WellCome To PvResan Robot ðŸŒ¹

ðŸ”¸ with this Service you can Provide Support  your Robot Mmbers , Channel , Groups and  Websites 

ðŸ”¹ To Create Robot Select 'ðŸ”„ Create a Robot' Button!",
  'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
                [
                   ['text'=>"ðŸ”„ Create a Robot"],['text'=>"ðŸš€ my robots"],['text'=>"â˜¢ Delete a Robot"]
                ],
                [
                   ['text'=>"â„¹ï¸ help"],['text'=>"ðŸ”° rules"]
                ],
                     [
                   ['text'=>"âœ… Send Comment"],['text'=>"âš ï¸ Robot Report"]
                ],
[
                   ['text'=>"ðŸ‡¦ðŸ‡º Language ðŸ‡®ðŸ‡·"]          
]
             ],
             'resize_keyboard'=>true
         ])
      ]));
}
elseif($textmessage == 'ÙØ§Ø±Ø³ÛŒ ðŸ‡®ðŸ‡·' )
{

if (!file_exists("data/$from_id/step.txt")) {
mkdir("data/$from_id");
save("data/$from_id/step.txt","none");
save("data/$from_id/tedad.txt","0");
save("data/$from_id/bots.txt","");
$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!"); 
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
}

var_dump(makereq('sendMessage',[
         'chat_id'=>$update->message->chat->id,
         'text'=>"Ø³Ù„Ù€Ù€Ø§Ù… ðŸ‘‹ðŸ˜‰

ðŸ”¹ Ø¨Ù‡ Ø³Ø±ÙˆÛŒØ³ Ù¾ÛŒØ§Ù… Ø±Ø³Ø§Ù† ØªÙ„Ú¯Ø±Ø§Ù… Ø®ÙˆØ´ Ø¢Ù…Ø¯ÛŒØ¯ ðŸŒ¹.

ðŸ”¸ Ø¨Ø§ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Ø§ÛŒÙ† Ø³Ø±ÙˆÛŒØ³ Ø´Ù…Ø§ Ù…ÛŒØªÙˆØ§Ù†ÛŒØ¯ Ø±Ø¨Ø§ØªÛŒ Ø¬Ù‡Øª Ø§Ø±Ø§Ø¦Ù‡ Ù¾Ø´ØªÛŒØ¨Ø§Ù†ÛŒ Ø¨Ù‡ Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ø±Ø¨Ø§ØªØŒ Ú©Ø§Ù†Ø§Ù„ØŒ Ú¯Ø±ÙˆÙ‡ ÛŒØ§ ÙˆØ¨Ø³Ø§ÛŒØª Ø®ÙˆØ¯ Ø§ÛŒØ¬Ø§Ø¯ Ú©Ù†ÛŒØ¯.

ðŸ”¹Ø¨Ø±Ø§ÛŒ Ø³Ø§Ø®Øª Ø±Ø¨Ø§Øª Ø§Ø² Ø¯Ú©Ù…Ù‡ ÛŒ ðŸ”„ Ø³Ø§Ø®Øª Ø±Ø¨Ø§Øª Ø§Ø³ØªÙØ§Ø¯Ù‡ Ù†Ù…Ø§ÛŒÛŒØ¯.",
  'parse_mode'=>'MarkDown',
         'reply_markup'=>json_encode([
             'keyboard'=>[
                [
                   ['text'=>"ðŸ”„ Ø³Ø§Ø®Øª Ø±Ø¨Ø§Øª"],['text'=>"ðŸš€ Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ù…Ù†"],['text'=>"â˜¢ Ø­Ø°Ù Ø±Ø¨Ø§Øª"]
                ],
                [
                   ['text'=>"â„¹ï¸ Ø±Ø§Ù‡Ù†Ù…Ø§"],['text'=>"ðŸ”° Ù‚ÙˆØ§Ù†ÛŒÙ†"]
                ],
                [
                   ['text'=>"âœ… Ø§Ø±Ø³Ø§Ù„ Ù†Ø¸Ø±"],['text'=>"âš ï¸ Ú¯Ø²Ø§Ø±Ø´ ØªØ®Ù„Ù"]
                ],
           [
                ['text'=>"ðŸ‡¦ðŸ‡º ØªØºÛŒÛŒØ± Ø²Ø¨Ø§Ù† ðŸ‡®ðŸ‡·"]
            ]
                
             ],
             'resize_keyboard'=>true
         ])
      ]));
}
elseif($textmessage == 'ðŸ”° Ù‚ÙˆØ§Ù†ÛŒÙ†') {
SendMessage($chat_id, "1âƒ£ Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø«Ø¨Øª Ø´Ø¯Ù‡ Ø¯Ø± Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø³Ø§Ø®ØªÙ‡ Ø´Ø¯Ù‡ ØªÙˆØ³Ø· Ù¾ÛŒÙˆÛŒ Ø±Ø³Ø§Ù† Ø§Ø² Ù‚Ø¨ÛŒÙ„ Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ù¾Ø±ÙˆÙØ§ÛŒÙ„ Ù†Ø²Ø¯ Ù…Ø¯ÛŒØ±Ø§Ù† Ù¾ÛŒÙˆÛŒ Ø±Ø³Ø§Ù† Ù…Ø­ÙÙˆØ¸ Ø§Ø³Øª Ùˆ Ø¯Ø± Ø§Ø®ØªÛŒØ§Ø± Ø§Ø´Ø®Ø§Øµ Ø­Ù‚ÛŒÙ‚ÛŒ ÛŒØ§ Ø­Ù‚ÙˆÙ‚ÛŒ Ù‚Ø±Ø§Ø± Ù†Ø®ÙˆØ§Ù‡Ø¯ Ú¯Ø±ÙØª.\n\n2âƒ£ Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒÛŒ Ú©Ù‡ Ø§Ù‚Ø¯Ø§Ù… Ø¨Ù‡ Ø§Ù†Ø´Ø§Ø± ØªØµØ§ÙˆÛŒØ± ÛŒØ§ Ù…Ø·Ø§Ù„Ø¨ Ù…Ø³ØªÙ‡Ø¬Ù† Ú©Ù†Ù†Ø¯ Ùˆ ÛŒØ§ Ø¨Ù‡ Ù…Ù‚Ø§Ù…Ø§Øª Ø§ÛŒØ±Ø§Ù† ØŒ Ø§Ø¯ÛŒØ§Ù† Ùˆ Ø§Ù‚ÙˆØ§Ù… Ùˆ Ù†Ú˜Ø§Ø¯Ù‡Ø§ ØªÙˆÙ‡ÛŒÙ† Ú©Ù†Ù†Ø¯ Ù…Ø³Ø¯ÙˆØ¯ Ø®ÙˆØ§Ù‡Ù†Ø¯ Ø´Ø¯.\n\n3âƒ£ Ø§ÛŒØ¬Ø§Ø¯ Ø±Ø¨Ø§Øª Ø¨Ø§ Ø¹Ù†ÙˆØ§Ù† Ù‡Ø§ÛŒ Ù…Ø¨ØªØ°Ù„ Ùˆ Ø®Ø§Ø±Ø¬ Ø§Ø² Ø¹Ø±Ù Ø¬Ø§Ù…Ø¹Ù‡ Ú©Ù‡ Ø¨Ø±Ø§ÛŒ Ø¬Ø°Ø¨ Ø¢Ù…Ø§Ø± Ùˆ ÙØ±ÙˆØ´ Ù…Ø­ØµÙˆÙ„Ø§Øª ØºÛŒØ± Ù…ØªØ¹Ø§Ø±Ù Ø¨Ø§Ø´Ù†Ø¯ Ù…Ù…Ù†ÙˆØ¹ Ù…ÛŒ Ø¨Ø§Ø´Ø¯ Ùˆ Ø¯Ø± ØµÙˆØ±Øª Ù…Ø´Ø§Ù‡Ø¯Ù‡ Ø±Ø¨Ø§Øª Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ø­Ø°Ù Ùˆ Ù…Ø³Ø¯ÙˆØ¯ Ù…ÛŒØ´ÙˆØ¯.\n\n4âƒ£ Ù…Ø³Ø¦ÙˆÙ„ÛŒØª Ù¾ÛŒØ§Ù… Ù‡Ø§ÛŒ Ø±Ø¯ Ùˆ Ø¨Ø¯Ù„ Ø´Ø¯Ù‡ Ø¯Ø± Ù‡Ø± Ø±Ø¨Ø§Øª Ø¨Ø§ Ù…Ø¯ÛŒØ± Ø¢Ù† Ø±Ø¨Ø§Øª Ù…ÛŒØ¨Ø§Ø´Ø¯ Ùˆ Ù¾ÛŒÙˆÛŒ Ø±Ø³Ø§Ù† Ù‡ÛŒÚ† Ú¯ÙˆÙ†Ù‡ Ù…Ø³Ø¦ÙˆÙ„ÛŒØªÛŒ Ù‚Ø¨ÙˆÙ„ Ù†Ù…ÛŒÚ©Ù†Ø¯.\n\n5âƒ£ Ø±Ø¹Ø§ÛŒØª Ø­Ø±ÛŒÙ… Ø®ØµÙˆØµÛŒ Ùˆ Ø­Ù‚ÙˆÙ‚ÛŒ Ø§ÙØ±Ø§Ø¯ Ø§Ø² Ø¬Ù…Ù„Ù‡ØŒ Ø¹Ø¯Ù… Ø§Ù‡Ø§Ù†Øª Ø¨Ù‡ Ø´Ø®ØµÛŒØª Ù‡Ø§ÛŒ Ù…Ø°Ù‡Ø¨ÛŒØŒ Ø³ÛŒØ§Ø³ÛŒØŒ Ø­Ù‚ÛŒÙ‚ÛŒ Ùˆ Ø­Ù‚ÙˆÙ‚ÛŒ Ú©Ø´ÙˆØ± Ùˆ Ø¨Ù‡ ÙˆÛŒÚ˜Ù‡ Ú©Ø§Ø±Ø¨Ø±Ø§Ù† Ø±Ø¨Ø§Øª Ø¶Ø±ÙˆØ±ÛŒ Ù…ÛŒ Ø¨Ø§Ø´Ø¯.\n\n6âƒ£ Ø³Ø§Ø®Øª Ù‡Ø±Ú¯ÙˆÙ†Ù‡ Ø±Ø¨Ø§Øª Ùˆ ÙØ¹Ø§Ù„ÛŒØª Ø¯Ø± Ø¶Ù…ÛŒÙ†Ù‡ Ù‡Ø§ÛŒ Hacking Ùˆ Sexology Ø®Ù„Ø§Ù Ù‚ÙˆØ§Ù†ÛŒÙ† Ø§Ø³Øª Ø¯Ø± ØµÙˆØ±Øª Ø¨Ø±Ø®ÙˆØ±Ø¯ Ø¯Ø³ØªØ±ÛŒ Ù…Ø¯ÛŒØ± Ø±Ø¨Ø§Øª Ùˆ Ø±Ø¨Ø§Øª Ø³Ø§Ø®ØªÙ‡ Ø´Ø¯Ù‡ Ø¨Ù‡ Ø³Ø±ÙˆØ± Ù…Ø§ Ù…Ø³Ø¯ÙˆØ¯ Ø®ÙˆØ§Ù‡Ø¯ Ø´Ø¯.\n\n7âƒ£ Ø¯Ø± ØµÙˆØ±Øª Ù…Ø´Ø§Ù‡Ø¯Ù‡ Ø§Ø³ØªÙØ§Ø¯Ù‡ Ø§Ø² Ù‚Ø§Ø¨Ù„ÛŒØª Ù‡Ø§ÛŒ Ø±Ø¨Ø§Øª Ø¯Ø± Ø¬Ù‡Ø§Øª Ù…Ù†ÙÛŒ Ù…Ø§Ù†Ù†Ø¯ Spam ÛŒØ§ Hack Ú©Ø§Ø±Ø¨Ø±Ø§Ù† ØªÙ„Ú¯Ø±Ø§Ù… Ø´Ø¯ÛŒØ¯Ø§ Ø¨Ø®ÙˆØ±Ø¯ Ù…ÛŒØ´ÙˆØ¯ Ùˆ ØªÙ…Ø§Ù…ÛŒ Ø§Ø·Ù„Ø§Ø¹Ø§Øª Ø´Ø®Øµ Ù…ÙˆØ±Ø¯ Ù†Ø¸Ø± Ú¯Ø²Ø§Ø±Ø´ Ù…ÛŒØ´ÙˆØ¯.\n\n8âƒ£ Ø§Ú¯Ø± ØªØ¹Ø¯Ø§Ø¯ Ø¯Ø±Ø®ÙˆØ§Ø³Øª Ù‡Ø§ÛŒ Ø±Ø¨Ø§Øª Ø´Ù…Ø§ Ø¨Ù‡ Ø³Ø±ÙˆØ± Ù…Ø§ Ø¨ÛŒØ´ Ø§Ø² Ø­Ø¯ Ù…Ø¹Ù…ÙˆÙ„ Ø¨Ø§ÛŒØ¯ Ùˆ Ù‡Ù…Ú†Ù†ÛŒÙ† Ø±Ø¨Ø§Øª Ø´Ù…Ø§ VIP Ù†Ø¨Ø§Ø´Ø¯ Ú†Ù†Ø¯ Ø¨Ø§Ø± Ø¨Ù‡ Ø´Ù…Ø§ Ø§Ø®Ø·Ø§Ø±ÛŒ Ø¬Ù‡Øª VIP Ú©Ø±Ø¯Ù† Ø±Ø¨Ø§Øª Ù†Ù…Ø§ÛŒØ´ Ø¯Ø§Ø¯Ù‡ Ù…ÛŒØ´ÙˆØ¯ Ø§Ú¯Ø± Ø§ÛŒÙ† Ø§Ø®Ø·Ø§Ø± Ù†Ø§Ø¯ÛŒØ¯Ù‡ Ú¯Ø±ÙØªÙ‡ Ø´ÙˆØ¯ØŒ Ø±Ø¨Ø§Øª Ø´Ù…Ø§ Ø¨Ù‡ ØµÙˆØ±Øª Ø§ØªÙˆÙ…Ø§ØªÛŒÚ© Ø¨Ù‡ Ø­Ø§Ù„Øª ØªØ¹Ù„ÛŒØº Ø¯Ø±.");
}
elseif($textmessage == 'ðŸ”° rules') {
SendMessage($chat_id, "1âƒ£ Recorded data in robots made by PvResan such as profile data , are preserved to PvResan's managers and will not be available for real or juridical people.\n\n 2âƒ£ Robots that publish obscene pictures or subjects and insult the officials , religions and nations and races , will be blocked.\n\n3âƒ£ Creating a robot with vulgar titles and out of norm of society which absorbs the statistics and selling offbeat products are prohibited and in case of witnessing  intended robot will be deleted and blocked.\n\n4âƒ£ The responsibility of exchanged messages in each robot is with the manager of that robot and PvResan does not accept any responsibilities.\n\n5âƒ£ Respecting the privacy and rights of individuals is necessary. Including no offense to religious , political and juridical figures of the country specially robot users.");
}
elseif($textmessage == 'â„¹ï¸ Ø±Ø§Ù‡Ù†Ù…Ø§') {
SendMessage($chat_id, "Ø±Ø¨Ø§Øª Ù¾ÛŒØ§Ù… Ø±Ø³Ø§Ù† Ú†ÛŒØ³ØªØŸ ðŸ¤”\n\nðŸ”¶ Ø±Ø¨Ø§Øª Ù¾ÛŒØ§Ù… Ø±Ø³Ø§Ù† Ø§ÛŒÙ† Ø§Ù…Ú©Ø§Ù† Ø±Ø§ Ø¨Ù‡ Ø´Ù…Ø§ Ù…ÛŒØ¯Ù‡Ø¯ ØªØ§ Ø¨Ø§ Ù…Ø®Ø§Ø·Ø¨ Ù‡Ø§ÛŒØªØ§Ù† Ú©Ù‡ Ø±ÛŒÙ¾ÙˆØ±Øª Ø´Ø¯Ù‡ Ø§ÛŒÙ†Ø¯ ÛŒØ§ Ø¨Ù‡ Ù‡Ø± Ø¯Ù„Ø§ÛŒÙ„ÛŒ Ù†Ù…ÛŒØªÙˆØ§Ù†Ù†ÛŒØ¯ Ø¨Ù‡ Ø´Ù…Ø§ Ø¨Ù‡ ØµÙˆØ±Øª Ø®ØµÙˆØµÛŒ Ù¾ÛŒØ§Ù… Ø¯Ù‡Ù†Ø¯ ØµØ­Ø¨Øª Ú©Ù†ÛŒØ¯.\n\nØ¨Ø±Ø®ÛŒ Ø§Ø² ÙˆÛŒÚ˜Ú¯ÛŒ Ù‡Ø§ÛŒ Ø±Ø¨Ø§Øª Ù¾ÛŒØ§Ù… Ø±Ø³Ø§Ù† :\n\nðŸš€Ø³Ø±Ø¹Øª Ø¨Ù€Ù€Ù€Ù€Ù€Ø§Ù„Ù€Ù€Ø§\n1âƒ£ Ø§Ø±Ø³Ø§Ù„ Ù…Ø·Ù„Ø¨ Ø¨Ù‡ ØªÙ…Ø§Ù… Ú©Ø§Ø±Ø¨Ø±Ø§Ù† ÛŒØ§ ØªÙ…Ø§Ù… Ú¯Ø±ÙˆÙ‡ Ù‡Ø§\n2âƒ£ Ù‚ÙÙ„ Ú©Ø±Ø¯Ù† Ø§Ø±Ø³Ø§Ù„ Ø¹Ú©Ø³ ØŒ ÙÛŒÙ„Ù… ØŒ Ø§Ø³ØªÛŒÚ©Ø± ØŒ ÙØ§ÛŒÙ„ ØŒ ÙˆÙˆÛŒØ³ ØŒ Ø¢Ù‡Ù†Ú¯ Ø¨Ù‡ ØµÙˆØ±Øª Ù…Ø¬Ø²Ø§\n3âƒ£ Ù‚ÙÙ„ Ú©Ø±Ø¯Ù† ÙØ±ÙˆØ§Ø±Ø¯ Ø¯Ø± Ø±Ø¨Ø§Øª\n4âƒ£ Ù‚ÙÙ„ Ú©Ø±Ø¯Ù† Ø¹Ø¶ÙˆÛŒØª Ø±Ø¨Ø§Øª Ø¯Ø± Ú¯Ø±ÙˆÙ‡ Ù‡Ø§\n5âƒ£Ù…Ø´Ø§Ù‡Ø¯Ù‡ ØªØ¹Ø¯Ø§Ø¯ Ø§Ø¹Ø¶Ø§ Ùˆ Ú¯Ø±ÙˆÙ‡ Ù‡Ø§ Ùˆ ÛŒÙˆØ²Ø±Ù†ÛŒÙ… 10 Ú©Ø§Ø±Ø¨Ø± ØªØ§Ø²Ù‡ Ø¹Ø¶Ùˆ Ø´Ø¯Ù‡\n6âƒ£Ù…Ø´Ø§Ù‡Ø¯Ù‡ ØªØ¹Ø¯Ø§Ø¯ Ø§Ø¹Ø¶Ø§ Ø¯Ø± Ù„ÛŒØ³Øª Ø³ÛŒØ§Ù‡ Ùˆ ÛŒÙˆØ²Ø±Ù†ÛŒÙ… 10 Ú©Ø§Ø±Ø¨Ø± Ø¬Ø¯ÛŒØ¯ Ø¯Ø± Ù„ÛŒØ³Øª Ø³ÛŒØ§Ù‡\n7âƒ£ Ù‚Ø±Ø§Ø± Ø¯Ø§Ø¯Ù† Ø§ÙØ±Ø§Ø¯ Ø¯Ø± Ù„ÛŒØ³Øª Ø³ÛŒØ§Ù‡ Ùˆ Ø¨Ù† Ú©Ø±Ø¯Ù† Ø¢Ù†Ù‡Ø§\n8âƒ£ Ù‚Ø§Ø¨Ù„ÛŒØª Ø´ÛŒØ± Ú©Ø±Ø¯Ù† Ø´Ù…Ø§Ø±Ù‡ ÛŒ Ø´Ù…Ø§ Ø¨Ù‡ ØµÙˆØ±Øª Ø³Ø±ÛŒØ¹\n9âƒ£ØªØºÛŒÛŒØ± Ù…ØªÙ† Ø§Ø³ØªØ§Ø±Øª Ùˆ Ù¾ÛŒØ§Ù… Ù¾ÛŒØ´ÙØ±Ø¶\nÙˆ Ú†Ù†Ø¯ÛŒÙ† ÙˆÛŒÚ˜Ú¯ÛŒ Ø¯ÛŒÚ¯Ø±...");
}
elseif($textmessage == 'â„¹ï¸ help') {
SendMessage($chat_id, "What PvResan do?ðŸ¤”\n\nðŸ”¶ With this Service you can Provide Support  your Robot Mmbers , Channel , Groups and  Websites\n\nSome of this Service Features :\n\nðŸš€ Fast Server\n\n1âƒ£ Send Mesage To Members Or Groups Or Both\n2âƒ£ Lock Sending Photos , Videos , Stickers , Documents , Voices and Audios Separately\n3âƒ£ Lock Forward To your Robot\n4âƒ£ Lock Adding Your Robots To Groups\n5âƒ£ Check Robot Membes And Groups\n6âƒ£ Check Your Black List\n7âƒ£ Put Members To Black List\n8âƒ£ Fast Share Your Contact\n9âƒ£ Change Your Start Text\nAnd several other features ...\n\nðŸ”´ For information about how to get a token from @botFather use");
}
elseif($textmessage == 'âœ… Ø§Ø±Ø³Ø§Ù„ Ù†Ø¸Ø±' ) {
SendMessage($chat_id, "ðŸ–Š Ù†Ø¸Ø±Ø§Øª Ø´Ù…Ø§ Ø¨Ù‡ Ù¾ÛŒØ´Ø±ÙØª Ùˆ Ø§Ø±Ø§Ø¦Ù‡ Ø®Ø¯Ù…Ø§Øª Ø¨Ù‡ØªØ± Ú©Ù…Ú© Ù…ÛŒÚ©Ù†Ø¯.\n\nðŸ“ Ø¨Ø±Ø§ÛŒ Ø§Ø±Ø³Ø§Ù„ Ù†Ø¸Ø± Ø®ÙˆØª Ø§Ø² Ø¯Ø³ØªÙˆØ± Ø²ÛŒØ± Ø§Ø³ØªÙØ§Ø¯Ù‡ Ù†Ù…Ø§ÛŒÛŒØ¯.\n\n/feedback (Ù¾ÛŒØ§Ù… Ø®ÙˆØ¯ Ø±Ø§ Ø¨Ù†ÙˆÛŒØ³ÛŒØ¯)");
}
	elseif($textmessage == 'âš ï¸ Ú¯Ø²Ø§Ø±Ø´ ØªØ®Ù„Ù' ) {
SendMessage($chat_id, "Ø§Ú¯Ø± Ø±Ø¨Ø§ØªÛŒ Ø¨Ø± Ø®Ù„Ø§Ù Ù‚ÙˆØ§Ù†ÛŒÙ† Ù…Ø§ Ø¹Ù…Ù„ Ù…ÛŒÚ©Ù†Ø¯ Ø¨Ø§ Ø¯Ø³ØªÙˆØ± Ø²ÛŒØ± Ø¨Ù‡ Ù…Ø§ Ø®Ø¨Ø± Ø¯Ù‡ÛŒØ¯\n/report (usernamebot)");
}
elseif($textmessage == 'âœ… Send Comment') {
SendMessage($chat_id, "ðŸ–Š Your Comments Help Us To Be Better.\n\nðŸ“ To Send Comment Use this Command Below.\n\n/feedback (Your Message)");
}
	elseif($textmessage ==  'âš ï¸ Robot Report') {
SendMessage($chat_id, "If the robot to act contrary to our laws let us know using the following command\n/report (usernamebot)");
}
elseif ($textmessage == 'â˜¢ Ø­Ø°Ù Ø±Ø¨Ø§Øª' ) {
if (file_exists("data/$from_id/step.txt")) {

}
$botname = file_get_contents("data/$from_id/bots.txt");
if ($botname == "") {
SendMessage($chat_id,"Ø´Ù…Ø§ Ù‡Ù†ÙˆØ² Ù‡ÛŒÚ† Ø±Ø¨Ø§ØªÛŒ Ù†Ø³Ø§Ø®ØªÙ‡ Ø§ÛŒØ¯ !");

}
else {
//save("data/$from_id/step.txt","delete");


 	var_dump(makereq('sendMessage',[
	'chat_id'=>$update->message->chat->id,
	'text'=>"ÛŒÚ©ÛŒ Ø§Ø² Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø®ÙˆØ¯ Ø±Ø§ Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯ :",
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"ðŸ‘‰ @".$botname,'callback_data'=>"del ".$botname]
	]
	]
	])
	]));

/*
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÛŒÚ©ÛŒ Ø§Ø² Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø®ÙˆØ¯ Ø±Ø§ Ø¬Ù‡Øª Ù¾Ø§Ú© Ú©Ø±Ø¯Ù† Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯ : ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            	[
            	['text'=>$botname]
            	],
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		])); */
}
}
elseif ($textmessage == 'â˜¢ Delete a Robot' ) {
if (file_exists("data/$from_id/step.txt")) {

}
$botname = file_get_contents("data/$from_id/bots.txt");
if ($botname == "") {
SendMessage($chat_id,"Do robots have not");

}
else {
//save("data/$from_id/step.txt","delete");


 	var_dump(makereq('sendMessage',[
	'chat_id'=>$update->message->chat->id,
	'text'=>"Select one of your robots:",
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"ðŸ‘‰ @".$botname,'callback_data'=>"del ".$botname]
	]
	]
	])
	]));

/*
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÛŒÚ©ÛŒ Ø§Ø² Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø®ÙˆØ¯ Ø±Ø§ Ø¬Ù‡Øª Ù¾Ø§Ú© Ú©Ø±Ø¯Ù† Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯ : ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            	[
            	['text'=>$botname]
            	],
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		])); */
}
}
elseif ($textmessage == 'â˜¢ Delete a Robot' ) {
if (file_exists("data/$from_id/step.txt")) {

}
$botname = file_get_contents("data/$from_id/bots.txt");
if ($botname == "") {
SendMessage($chat_id,"Do robots have not");

}
else {
//save("data/$from_id/step.txt","delete");


 	var_dump(makereq('sendMessage',[
	'chat_id'=>$update->message->chat->id,
	'text'=>"Select one of your robots:",
	'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'inline_keyboard'=>[
	[
	['text'=>"ðŸ‘‰ @".$botname,'callback_data'=>"del ".$botname]
	]
	]
	])
	]));

/*
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÛŒÚ©ÛŒ Ø§Ø² Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø®ÙˆØ¯ Ø±Ø§ Ø¬Ù‡Øª Ù¾Ø§Ú© Ú©Ø±Ø¯Ù† Ø§Ù†ØªØ®Ø§Ø¨ Ú©Ù†ÛŒØ¯ : ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            	[
            	['text'=>$botname]
            	],
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		])); */
}
}
elseif ($textmessage == 'ðŸ”„ Ø³Ø§Ø®Øª Ø±Ø¨Ø§Øª' ) {

$tedad = file_get_contents("data/$from_id/tedad.txt");
if ($tedad >= 1) {
SendMessage($chat_id,"ØªØ¹Ø¯Ø§Ø¯ Ø±Ø¨Ø§Øª Ù‡Ø§ÛŒ Ø³Ø§Ø®ØªÙ‡ Ø´Ø¯Ù‡ Ø´Ù…Ø§ Ø²ÛŒØ§Ø¯ Ø§Ø³Øª !
Ø§ÙˆÙ„ Ø¨Ø§ÛŒØ¯ ÛŒÚ© Ø±Ø¨Ø§Øª Ø±Ø§ Ù¾Ø§Ú© Ú©Ù†ÛŒØ¯ ! $tedad");
return;
}
save("data/$from_id/step.txt","create bot");
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ØªÙˆÚ©Ù† Ø±Ø§ ÙˆØ§Ø±Ø¯ Ú©Ù†ÛŒØ¯ :",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª - Back"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
}
elseif ($textmessage == 'ðŸ”„ Create a Robot') {

$tedad = file_get_contents("data/$from_id/tedad.txt");
if ($tedad >= 1) {
SendMessage($chat_id," The number of robots you $ tedad
Each person can only build other robots you can build a robot");
return;
}
save("data/$from_id/step.txt","create bot");
var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"Please send your token ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"ðŸ”™ Ø¨Ø±Ú¯Ø´Øª - Back"]
                ]
                
            	],
            	'resize_keyboard'=>true
       		])
    		]));
}
	elseif (strpos($textmessage , "/ban" ) !== false ) {
if ($from_id == $admin) {
$text = str_replace("/ban","",$textmessage);
$myfile2 = fopen("data/banlist.txt", 'a') or die("Unable to open file!");	
fwrite($myfile2, "$text\n");
fclose($myfile2);
SendMessage($admin,"Ø´Ù…Ø§ Ú©Ø§Ø±Ø¨Ø± $text Ø±Ø§ Ø¯Ø± Ù„ÛŒØ³Øª Ø¨Ù† Ù„ÛŒØ³Øª Ù‚Ø±Ø§Ø± Ø¯Ø§Ø¯ÛŒØ¯!\n Ø¨Ø±Ø§ÛŒ Ø¯Ø± Ø§ÙˆØ±Ø¯Ù† Ø§ÛŒÙ† Ú©Ø§Ø±Ø¨Ø± Ø§Ø² Ø¨Ù† Ø§Ø² Ø¯Ø³ØªÙˆØ± Ø²ÛŒØ± Ø§Ø³ØªÙØ§Ø¯Ù‡ Ú©Ù†ÛŒØ¯\n/unban $text");
}
else {
SendMessage($chat_id,"â›”ï¸ Ø´Ù…Ø§ Ø§Ø¯Ù…ÛŒÙ† Ù†ÛŒØ³ØªÛŒØ¯.");
}
}

elseif (strpos($textmessage , "/unban" ) !== false ) {
if ($from_id == $admin) {
$text = str_replace("/unban","",$textmessage);
			$newlist = str_replace($text,"",$ban);
			save("data/banlist.txt",$newlist);
SendMessage($admin,"Ø´Ù…Ø§ Ú©Ø§Ø±Ø¨Ø± $text Ø±Ø§ Ø§Ø² Ù„ÛŒØ³Øª Ø¨Ù† Ù‡Ø§ Ø¯Ø± Ø§ÙˆØ±Ø¯ÛŒØ¯!");
}
else {
SendMessage($chat_id,"â›”ï¸ Ø´Ù…Ø§ Ø§Ø¯Ù…ÛŒÙ† Ù†ÛŒØ³ØªÛŒØ¯.");
}
}
	
else
{
SendMessage($chat_id,"Ù¾ÛŒØ§Ù… Ø´Ù…Ø§ Ù¾ÛŒØ¯Ø§ Ù†Ø´Ø¯âŒ\n Your command could not be foundâŒ");
}
?>
