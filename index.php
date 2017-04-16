<?php
	define('API_KEY','**TOKEN**');
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
	//---------
	$update = json_decode(file_get_contents('php://input'));
	var_dump($update);
	//=========
function password_gen($length = 20) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr(str_shuffle($chars), 0, $length);
    return $password;
}
echo("The Pmr CreatorÃ¢ÂÂ¢ V.2.5 Powered By @parsaghafoori");

	$chat_id = $update->message->chat->id;
	$message_id = $update->message->message_id;
	$from_id = $update->message->from->id;
	$name = $update->message->from->first_name;
	$contact = $update->message->contact;
	$cnumber = $update->message->contact->phone_number;
	$cname = $update->message->contact->first_name;

	$SNAME = $update->message->from->first_name;
        $SUSER = $update->message->from->username;
        $SUSERID = $update->message->chat->id;
$STIME = file_get_contents("http://ara-parsa.ir/telegram/date.php");
$PASSRAN = file_get_contents("https://warter.000webhostapp.com/watermark/pard.php");

	$photo = $update->message->photo;
	$video = $update->message->video;
	$sticker = $update->message->sticker;
	$file = $update->message->document;
	$music = $update->message->audio;
	$voice = $update->message->voice;
	$forward = $update->message->forward_from;

	$username = $update->message->from->username;
	$textmessage = isset($update->message->text)?$update->message->text:'';
	$reply = $update->message->reply_to_message->forward_from->id;
	$stickerid = $update->message->reply_to_message->sticker->file_id;
	//------------
	$_sticker = file_get_contents("data/setting/sticker.txt");
	$_video = file_get_contents("data/setting/video.txt");
	$_voice = file_get_contents("data/setting/voice.txt");
	$_file = file_get_contents("data/setting/file.txt");
	$_photo = file_get_contents("data/setting/photo.txt");
	$_music = file_get_contents("data/setting/music.txt");
	$_forward = file_get_contents("data/setting/forward.txt");
	$_joingp = file_get_contents("data/setting/joingp.txt");
	//------------
	$admin = **ADMIN**;
	$bottype = "**free**";
	$step = file_get_contents("data/".$from_id."/step.txt");
	$type = file_get_contents("data/".$from_id."/type.txt");
	$list = file_get_contents("data/blocklist.txt");
	//---Buttons----
	$btn1_name = file_get_contents("data/btn/btn1_name");
	$btn2_name = file_get_contents("data/btn/btn2_name");
	$btn3_name = file_get_contents("data/btn/btn3_name");
	$btn4_name = file_get_contents("data/btn/btn4_name");
	
	$btn1_post =  file_get_contents("data/btn/btn1_post");
	$btn2_post =  file_get_contents("data/btn/btn2_post");
	$btn3_post =  file_get_contents("data/btn/btn3_post");
	$btn4_post =  file_get_contents("data/btn/btn4_post");
	
	//-----------
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
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
	//===========
	if (strpos($list , "$from_id") !== false  ) {
		SendMessage($chat_id,"You Are Blocked!");
	}
	elseif(isset($update->callback_query)){
    $callbackMessage = 'ÃÂ¢ÃÂ¾ÃÂ¯ÃÂÃÂª ÃÂ´ÃÂ¯';
    var_dump(makereq('answerCallbackQuery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>$callbackMessage
    ]));
    $chat_id = $update->callback_query->message->chat->id;
    $message_id = $update->callback_query->message->message_id;
    $data = $update->callback_query->data;
    //SendMessage($chat_id,"$data");
	
    if ($data == "sticker" && $_sticker == "Ã¢ÂÂ") {
      save("setting/sticker.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
    if ($data == "sticker" && $_sticker == "Ã¢ÂÂÃ¯Â¸Â") {

	 save("setting/sticker.txt","Ã¢ÂÂ");
	     var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>"Ã¢ÂÂ",'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 
     if ($data == "video" && $_video == "Ã¢ÂÂ") {
      save("setting/video.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
     if ($data == "video" && $_video == "Ã¢ÂÂÃ¯Â¸Â") {
   save("setting/video.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>"Ã¢ÂÂ",'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 
    if ($data == "voice" && $_voice == "Ã¢ÂÂ") {
      save("setting/voice.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
    if ($data == "voice" && $_voice == "Ã¢ÂÂÃ¯Â¸Â") {

	   save("setting/voice.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>"Ã¢ÂÂ",'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
    if ($data == "file" && $_file == "Ã¢ÂÂ") {
      save("setting/file.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
    if ($data == "file" && $_file == "Ã¢ÂÂÃ¯Â¸Â") {
	  save("setting/file.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>"Ã¢ÂÂ",'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 
     if ($data == "photo" && $_photo == "Ã¢ÂÂ") {
      save("setting/photo.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
     if ($data == "photo" && $_photo == "Ã¢ÂÂÃ¯Â¸Â") {
	 save("setting/photo.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>"Ã¢ÂÂ",'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 
      if ($data == "music" && $_music == "Ã¢ÂÂ") {
      save("setting/music.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
      if ($data == "music" && $_music == "Ã¢ÂÂÃ¯Â¸Â") {
	       save("setting/music.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>"Ã¢ÂÂ",'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 
 
       if ($data == "forward" && $_forward == "Ã¢ÂÂ") {
      save("setting/forward.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
       if ($data == "forward" && $_forward == "Ã¢ÂÂÃ¯Â¸Â") {

	 save("setting/forward.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>"Ã¢ÂÂ",'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 
      if ($data == "joingp" && $_joingp == "Ã¢ÂÂ") {
      save("setting/joingp.txt","Ã¢ÂÂÃ¯Â¸Â");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>"Ã¢ÂÂÃ¯Â¸Â",'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
      if ($data == "joingp" && $_joingp == "Ã¢ÂÂÃ¯Â¸Â") {
	 save("setting/joingp.txt","Ã¢ÂÂ");
    var_dump(
        makereq('editMessageText',[
            'chat_id'=>$chat_id,
            'message_id'=>$message_id,
            'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ´ÃÂ ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ°

 Ã°ÂÂÂ« = ÃÂÃÂÃÂ
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
                    			[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>"Ã¢ÂÂ",'callback_data'=>"joingp"]
					]
		
                ]
            ])
        ])
    );
 }
 //=========================
}
	
	elseif($textmessage == '')
	{
	//Check Kardan (Media)
	if ($contact  != null && $step== 'Set Contact' && $from_id == $admin) {
	save("profile/number.txt",$cnumber);
	save("profile/cname.txt",$cname);
	SendMessage($chat_id,"ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂ°ÃÂ®ÃÂÃÂ±ÃÂ .
	*$cname *: `$cnumber`");
	}
	
	if ($photo != null) {
	if ($_photo == "Ã¢ÂÂÃ¯Â¸Â") {
	SendMessage($chat_id,"Locked!");
	}
	else {
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		Forward($reply,$chat_id,$message_id); 
		
		}
	}
	}
	
	if ($sticker != null ) {
		if ($_sticker == "Ã¢ÂÂÃ¯Â¸Â" && $from_id != $admin) {
	SendMessage($chat_id,"Locked!");
		}
	else {
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		Forward($reply,$chat_id,$message_id); 
		}
	}
	}
	
	if ($video != null) {
		if ($from_id != $admin && $_video == "Ã¢ÂÂÃ¯Â¸Â") {
	SendMessage($chat_id,"Locked!");
		}
		else {
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		Forward($reply,$chat_id,$message_id); 
		}
	}
	}
	
	if ($music != null ) {
		if ($from_id != $admin && $_music == "Ã¢ÂÂÃ¯Â¸Â") {
	SendMessage($chat_id,"Locked!");
	}
	else {
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		Forward($reply,$chat_id,$message_id); 
		}
	}
	}
	
	if ($voice != null) {
		if ($from_id != $admin && $_voice == "Ã¢ÂÂÃ¯Â¸Â") {
	SendMessage($chat_id,"Locked!");
	}
	else {
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		Forward($reply,$chat_id,$message_id); 
		}
	}
	}
	
	if ($file != null ){
		if ($from_id != $admin && $_file == "Ã¢ÂÂÃ¯Â¸Â") {
	SendMessage($chat_id,"Locked!");
		}
		
	}
	else {
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		Forward($reply,$chat_id,$message_id); 
		}
	}
	}
	elseif ($from_id != $chat_id) {
		
	SendMessage($chat_id,"Bye Bye");
makereq('leaveChat',[
	'chat_id'=>$chat_id
	]);
	}
else if($textmessage == 'Ã°ÂÂÂÃÂ³ÃÂ§ÃÂ®ÃÂª ÃÂ¾ÃÂ³ÃÂÃÂ±ÃÂ¯') {
			SendMessage($chat_id,"*Your Password:*
".password_gen());
}
else if($textmessage == 'Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ') {
			SendMessage($chat_id,"_ÃÂ²ÃÂÃÂ§ÃÂ ÃÂ ÃÂªÃÂ§ÃÂ±ÃÂÃÂ®:_
```$STIME ```");
}
else if($textmessage == 'Ã°ÂÂÂÃÂÃÂ´ÃÂ®ÃÂµÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§') {
			SendMessage($chat_id,"Ã°ÂÂÂÃÂÃÂ´ÃÂ®ÃÂµÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§:
ÃÂÃÂ§ÃÂÃ°ÂÂÂ:
$SNAME
Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸
ÃÂÃÂ§ÃÂ ÃÂÃÂ§ÃÂ±ÃÂ¨ÃÂ±ÃÂÃ°ÂÂÂ:
[@$SUSER](https://t.me/$SUSER) 
Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸
ÃÂ§ÃÂÃÂ¯ÃÂ ÃÂ¹ÃÂ¯ÃÂ¯ÃÂÃ°ÂÂÂº: 
$SUSERID
Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸Ã°ÂÂÂ¹Ã°ÂÂÂ¸
[ÃÂ¯ÃÂÃÂª ÃÂ ÃÂ¯ÃÂ ÃÂ¨ÃÂ§ ÃÂ®ÃÂÃÂªÃÂ§ÃÂÃ°ÂÂÂ·](https://t.me/$SUSER) 

ÃÂ¹ÃÂÃÂ³ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ ÃÂ´ÃÂÃÂ§Ã°ÂÂÂÃ°ÂÂÂ»");
}
        
	elseif($textmessage == 'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ') {
	save($from_id."/step.txt","none");
	if ($type == "admin") {
	
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ£ÂÂ½Ã¯Â¸Â",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		}
    		else {
    		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ£ÂÂ½Ã¯Â¸Â",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    	}
	}
	elseif ($step == 'set word') {
		save($from_id."/step.txt","set answer");
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ¬ÃÂÃÂ§ÃÂ¨ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯Ã¢ÂÂ:",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
				
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
			save("words/$textmessaage.txt","Tarif Nashode !");
			save("last_word.txt",$textmessage);
	}
	elseif ($step == 'set answer') {
		save($from_id."/step.txt","none");
		
		$last = file_get_contents("data/last_word.txt");
			$myfile2 = fopen("data/wordlist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$last\n");
			fclose($myfile2);
			save("words/$last.txt","$textmessage");
		
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ°ÃÂ®ÃÂÃÂ±ÃÂ ÃÂ´ÃÂ¯Ã¢ÂÂ!
ÃÂÃÂ ÃÂ¯ÃÂ²ÃÂÃÂÃÂ ÃÂ±ÃÂ§ ÃÂ§ÃÂÃÂªÃÂ®ÃÂ§ÃÂ¨ ÃÂÃÂÃÂÃÂ¯:
			",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
                   ['text'=>'ÃÂ§ÃÂ¶ÃÂ§ÃÂÃÂ ÃÂ©ÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ'],['text'=>'ÃÂ­ÃÂ°ÃÂ ÃÂÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ']
                ],
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		
			
	}
	
	elseif($step == "del words") {
			unlink("data/words/$textmessage.txt");
			var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂÃÂÃÂ ÃÂÃÂÃÂ±ÃÂ¯ ÃÂÃÂ¸ÃÂ± ÃÂ­ÃÂ°ÃÂ ÃÂ´ÃÂ¯!Ã¢ÂÂ
ÃÂÃÂ ÃÂ¯ÃÂ²ÃÂÃÂÃÂ ÃÂ±ÃÂ§ ÃÂ§ÃÂÃÂªÃÂ®ÃÂ§ÃÂ¨ ÃÂÃÂÃÂÃÂ¯: : 
			",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
                         ['text'=>'ÃÂ§ÃÂ¶ÃÂ§ÃÂÃÂ ÃÂ©ÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ'],['text'=>'ÃÂ­ÃÂ°ÃÂ ÃÂÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ']
                ],
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
			save($from_id."/step.txt","none");
	}
	
		elseif ($step== 'Forward' && $type == 'admin') {
			if ($forward != null) {
			$forward_id = file_get_contents("data/forward_id.txt");
			Forward($forward_id,$chat_id,$message_id);
			save($from_id."/step.txt","none");
			SendMessage($chat_id,"ÃÂÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯ ÃÂ´ÃÂ¯Ã¢ÂÂ!");
			}
			else {
				SendMessage($chat_id,"ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯ ÃÂÃÂÃÂÃÂ¯:Ã°ÂÂÂ");
			}
		}
	elseif ($step== 'Set Age' && $type == 'admin') {
	
	save($from_id."/step.txt","none");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ§ÃÂ¾ÃÂ¯ÃÂÃÂª ÃÂ´ÃÂ¯!Ã¢ÂÂ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		save("profile/age.txt","$textmessage");
	}
	
	elseif ($step== 'Set Name' && $type == 'admin') {
	save($from_id."/step.txt","none");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ§ÃÂ¾ÃÂ¯ÃÂÃÂª ÃÂ´ÃÂ¯!Ã¢ÂÂ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		save("profile/name.txt","$textmessage");
	}
	
	elseif ($step== 'Set Bio' && $type == 'admin') {
	save($from_id."/step.txt","none");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ§ÃÂ¾ÃÂ¯ÃÂÃÂª ÃÂ´ÃÂ¯!Ã¢ÂÂ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		save("profile/bio.txt","$textmessage");
	}
	elseif ($step== 'Send To All' && $type == 'admin') {
		SendMessage($chat_id,"Sending Message....");
		save($from_id."/step.txt","none");
		$fp = fopen( "data/users.txt", 'r');
		while( !feof( $fp)) {
 			$users = fgets( $fp);
			SendMessage($users,$textmessage);
		}
		SendMessage($chat_id,"Message Was Sent To All Members!");
		
	}
	elseif ($step== 'Edit Start Text' && $type == 'admin') {
		save($from_id."/step.txt","none");
		save("start_txt.txt",$textmessage);
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ§ÃÂ¾ÃÂ¯ÃÂÃÂª ÃÂ´ÃÂ¯Ã¢ÂÂ.",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($step== 'Edit Message Delivery' && $type == 'admin') {
		save($from_id."/step.txt","none");
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ§ÃÂ¾ÃÂ¯ÃÂÃÂª ÃÂ´ÃÂ¯Ã¢ÂÂ.",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		save("pmsend_txt.txt",$textmessage);
	}
	
	elseif (file_exists("data/words/$textmessage.txt")) {
		SendMessage($chat_id,file_get_contents("data/words/$textmessage.txt"));
		
	}
	
	elseif ($textmessage == 'Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ' && $from_id == $admin) {
		if ($bottype == 'gold') {
			var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ ÃÂ®ÃÂÃÂ´ ÃÂ§ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ³",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
                   ['text'=>'ÃÂ¾ÃÂ§ÃÂ³ÃÂ® ÃÂ³ÃÂ±ÃÂÃÂ¹Ã°ÂÂÂ¦'],['text'=>'ÃÂ¨ÃÂ ÃÂ²ÃÂÃÂ¯ÃÂ...']
                ],
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
        }
		else {
			SendMessage($chat_id,"ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§ ÃÂ±ÃÂ§ÃÂÃÂ¯ÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃ°ÂÂÂ­");
		}
	}
	elseif ($textmessage == 'ÃÂ­ÃÂ°ÃÂ ÃÂÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ' && $from_id == $admin) {
				save($from_id."/step.txt","del words");

		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"Ã¢ÂÂ°ÃÂÃÂÃÂÃÂ ÃÂ§ÃÂ ÃÂÃÂ ÃÂÃÂ ÃÂ®ÃÂÃÂ§ÃÂÃÂÃÂ¯ ÃÂ­ÃÂ°ÃÂ ÃÂ´ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯:",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	elseif ($textmessage == 'ÃÂ¾ÃÂ§ÃÂ³ÃÂ® ÃÂ³ÃÂ±ÃÂÃÂ¹Ã°ÂÂÂ¦' && $bottype == 'gold' && $from_id == $admin) {

		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ¾ÃÂ§ÃÂ³ÃÂ® ÃÂ³ÃÂ±ÃÂÃÂ¹ ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯.Ã°ÂÂÂ¸",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
				[
                   ['text'=>'ÃÂ§ÃÂ¶ÃÂ§ÃÂÃÂ ÃÂ©ÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ'],['text'=>'ÃÂ­ÃÂ°ÃÂ ÃÂÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ']
                ],
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		
	}
	elseif ($textmessage == 'ÃÂ§ÃÂ¶ÃÂ§ÃÂÃÂ ÃÂ©ÃÂ±ÃÂ¯ÃÂÃ¢ÂÂ' && $bottype == 'gold' && $from_id == $admin) {
				save($from_id."/step.txt","set word");
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂÃÂÃÂ ÃÂ ÃÂ§ÃÂÃÂ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯Ã°ÂÂÂ±
			",
			'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
				
                 [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª' && $from_id == $admin) {
	$sttxt = file_get_contents("data/start_txt.txt");
	save($from_id."/step.txt","Edit Start Text");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂÃÂªÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂªÃ°ÂÂÂ¾.
	ÃÂÃÂªÃÂ ÃÂÃÂÃÂÃÂÃÂ: Ã¯Â¸ÂÃ¢ÂÂ³Ã¯Â¸Â
	`".$sttxt."`
	ÃÂÃÂ·ÃÂÃÂ§ ÃÂÃÂªÃÂ ÃÂ¬ÃÂ¯ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯. Ã¢ÂÂ¥",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶' && $from_id == $admin) {
	$sttxt = file_get_contents("data/pmsend_txt.txt");
	save($from_id."/step.txt","Edit Message Delivery");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂÃÂªÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶Ã¯Â¸ÂÃ¢ÂÂ½Ã¯Â¸Â.
	ÃÂÃÂªÃÂ ÃÂÃÂÃÂÃÂÃÂ: Ã¯Â¸ÂÃ¢ÂÂ³Ã¯Â¸Â
	`".$sttxt."`
	ÃÂÃÂ·ÃÂÃÂ§ ÃÂÃÂªÃÂ ÃÂ¬ÃÂ¯ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯. Ã¢ÂÂ¥",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª' && $from_id == $admin) {
	
	var_dump(makereq('sendMessage',[
			'chat_id'=>$update->message->chat->id,
			'text'=>"ÃÂ¨ÃÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯.
`
 Ã°ÂÂÂ« = ÃÂÃÂÃÂ ÃÂ´ÃÂ¯ÃÂ.
 Ã¢ÂÂ = ÃÂ¢ÃÂ²ÃÂ§ÃÂ¯"."`",
			'parse_mode'=>'MarkDown',
			'reply_markup'=>json_encode([
				'inline_keyboard'=>[
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂÃÂ©ÃÂ±",'callback_data'=>"sticker"],['text'=>$_sticker,'callback_data'=>"sticker"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂÃÂ",'callback_data'=>"video"],['text'=>$_video,'callback_data'=>"video"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂÃÂ³",'callback_data'=>"voice"],['text'=>$_voice,'callback_data'=>"voice"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ§ÃÂÃÂ",'callback_data'=>"file"],['text'=>$_file,'callback_data'=>"file"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¹ÃÂ©ÃÂ³",'callback_data'=>"photo"],['text'=>$_photo,'callback_data'=>"photo"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂ¢ÃÂÃÂÃÂ¯",'callback_data'=>"music"],['text'=>$_music,'callback_data'=>"music"]
					],
					[
						['text'=>"ÃÂ¯ÃÂ³ÃÂªÃÂ±ÃÂ³ÃÂ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯",'callback_data'=>"forward"],['text'=>$_forward,'callback_data'=>"forward"]
					],
					[
						['text'=>"ÃÂ¹ÃÂ¶ÃÂÃÂÃÂª ÃÂ¯ÃÂ± ÃÂ¯ÃÂ±ÃÂÃÂ",'callback_data'=>"joingp"],['text'=>$_joingp,'callback_data'=>"joingp"]
					]
				]
			])
		]));
	
	}
	
	elseif ($textmessage == 'Ã°ÂÂÂ ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂ ÃÂÃÂ ÃÂ±ÃÂ ÃÂ¨ÃÂÃÂ±ÃÂ³ÃÂª' && $from_id == $admin) {
	$anumber = file_get_contents("data/profile/number.txt");
	$aname= file_get_contents("data/profile/cname.txt");
	makereq('sendContact',[
	'chat_id'=>$chat_id,
	'phone_number'=>$anumber,
	'first_name'=>$aname
	]);
	}
	elseif ($textmessage == 'ÃÂ³ÃÂÃ¢ÂÂ¡Ã¯Â¸Â' && $from_id == $admin) {
	save($from_id."/step.txt","Set Age");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"Ã°ÂÂÂ¸ÃÂÃÂ·ÃÂÃÂ§ ÃÂ³ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯:
ÃÂÃÂ ÃÂªÃÂÃÂ§ÃÂÃÂÃÂ¯ ÃÂ§ÃÂ² ÃÂÃÂÃÂ³ÃÂª ÃÂ²ÃÂÃÂ± ÃÂÃÂÃÂ² ÃÂ§ÃÂÃÂªÃÂ®ÃÂ§ÃÂ¨ ÃÂÃÂÃÂÃÂ¯Ã°ÂÂÂ°",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
[
                   ['text'=>"7"],['text'=>"8"],['text'=>"9"]
                ],
[
                   ['text'=>"10"],['text'=>"11"],['text'=>"12"]
                ],
[
                   ['text'=>"13"],['text'=>"14"],['text'=>"15"]
                ],
[
                   ['text'=>"16"],['text'=>"17"],['text'=>"18"]
                ],
[
['text'=>"ÃÂ¨ÃÂ ÃÂªÃÂ ÃÂÃÂÃÂÃÂ"]
                ],

                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'ÃÂÃÂ§ÃÂÃ¢ÂÂ¡Ã¯Â¸Â' && $from_id == $admin) {
	save($from_id."/step.txt","Set Name");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"Ã°ÂÂÂ¹ÃÂÃÂ·ÃÂÃÂ§ ÃÂÃÂ§ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯:
ÃÂÃÂ ÃÂªÃÂÃÂ§ÃÂÃÂÃÂ¯ ÃÂ§ÃÂ² ÃÂÃÂÃÂ³ÃÂª ÃÂ²ÃÂÃÂ± ÃÂÃÂÃÂ² ÃÂ§ÃÂÃÂªÃÂ®ÃÂ§ÃÂ¨ ÃÂÃÂÃÂÃÂ¯Ã°ÂÂÂ°",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
[
                   ['text'=>"ÃÂ¾ÃÂ§ÃÂ±ÃÂ³ÃÂ§"],['text'=>"ÃÂÃÂÃÂ¯"],['text'=>"ÃÂ¹ÃÂÃÂ"]
                ],
[
                   ['text'=>"ÃÂ³ÃÂ§ÃÂÃÂ§ÃÂ²"],['text'=>"ÃÂÃÂ±ÃÂÃÂ"],['text'=>"ÃÂÃÂ§ÃÂ·ÃÂÃÂ"]
                ],
[
                   ['text'=>"ÃÂÃÂÃÂÃÂ§ÃÂÃÂÃÂ"],['text'=>"ÃÂ§ÃÂ²ÃÂ±ÃÂ§ÃÂÃÂÃÂ"],['text'=>"ÃÂ­ÃÂ³ÃÂ"]
                ],
[
                   ['text'=>"ÃÂ±ÃÂ¶ÃÂ§"],['text'=>"ÃÂ­ÃÂ³ÃÂÃÂ"],['text'=>"ÃÂ¨ÃÂ±ÃÂ¯ÃÂÃÂ§"]
                ],
[
                   ['text'=>"ÃÂÃÂÃÂÃÂÃÂ§"],['text'=>"ÃÂ¨ÃÂ ÃÂªÃÂ ÃÂÃÂÃÂÃÂ"]
                ],

                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'ÃÂ¨ÃÂÃÂ ÃÂ¯ÃÂ±ÃÂ§ÃÂÃÂÃ¢ÂÂ¡Ã¯Â¸Â' && $from_id == $admin) {
	save($from_id."/step.txt","Set Bio");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"Ã°ÂÂÂºÃÂÃÂ·ÃÂÃÂ§ ÃÂÃÂ ÃÂ¨ÃÂÃÂ ÃÂ¯ÃÂ±ÃÂ§ÃÂÃÂ ÃÂ§ÃÂ² ÃÂ®ÃÂÃÂ¯ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂÃÂ¯:
ÃÂÃÂ ÃÂªÃÂÃÂ§ÃÂÃÂÃÂ¯ ÃÂ§ÃÂ² ÃÂÃÂÃÂ³ÃÂª ÃÂ²ÃÂÃÂ± ÃÂÃÂÃÂ² ÃÂ§ÃÂÃÂªÃÂ®ÃÂ§ÃÂ¨ ÃÂÃÂÃÂÃÂ¯Ã°ÂÂÂ°",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
[
                   ['text'=>"ÃÂ¨ÃÂ±ÃÂÃÂ§ÃÂÃÂ ÃÂÃÂÃÂÃÂ³ÃÂ"],['text'=>"ÃÂÃÂ¯ÃÂÃÂ± ÃÂÃÂ§ÃÂÃÂ§ÃÂÃÂ"],['text'=>"ÃÂÃÂ¯ÃÂÃÂ± ÃÂ³ÃÂ§ÃÂÃÂªÃÂ"]
                ],
[
                   ['text'=>"ÃÂ·ÃÂ±ÃÂ§ÃÂ­ÃÂ"],['text'=>"ÃÂ¯ÃÂÃÂÃÂ±ÃÂ"],['text'=>"ÃÂ±ÃÂÃÂ¾ÃÂÃÂ±ÃÂªÃÂÃ°ÂÂÂ­"]
                ],
[
                   ['text'=>"ÃÂ¯ÃÂ±ÃÂ§ÃÂÃÂÃÂ³ÃÂªÃÂ"],['text'=>"ÃÂ¨ÃÂÃÂÃÂ§ÃÂ±ÃÂªÃÂ ÃÂ¹ÃÂ´ÃÂÃÂ"],['text'=>"ÃÂªÃÂÃÂÃÂ§ÃÂ..."]
                ],
[
                   ['text'=>"ÃÂ´ÃÂ§ÃÂ®ÃÂ"],['text'=>"ÃÂ´ÃÂ§ÃÂ® ÃÂ´ÃÂÃÂ"],['text'=>"ÃÂÃÂÃÂ±ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂÃÂÃ°ÂÂÂ¿"]
                ],
[
               ['text'=>"ÃÂ´ÃÂ§ÃÂ®Ã¢ÂÂÃÂÃÂÃÂ³ÃÂªÃÂÃ¢ÂÂÃÂÃÂÃÂÃ¢ÂÂÃÂ®ÃÂÃÂ¨Ã¢ÂÂ ÃÂ¨ÃÂÃÂ¯ÃÂÃ¢ÂÂÃÂ´ÃÂ§ÃÂ®Ã¢ÂÂÃÂ¨ÃÂ´ÃÂÃÂÃÂÃÂ"]
                ],

                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª' && $from_id == $admin) {
	save($from_id."/step.txt","Set Contact");
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂÃÂ§ÃÂÃÂªÃÂÃÂª ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯:Ã°ÂÂÂ»",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'Ã°ÂÂÂ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂªÃÂÃÂÃÂ' , 'request_contact' => true]
                ],
              	[
                   ['text'=>'Ã°ÂÂÂ ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂ ÃÂÃÂ ÃÂ±ÃÂ ÃÂ¨ÃÂÃÂ±ÃÂ³ÃÂª']
                ],
                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	
	elseif ($textmessage == 'Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±' && $from_id == $admin) {
	$usercount = -1;
	$fp = fopen( "data/users.txt", 'r');
	while( !feof( $fp)) {
    		fgets( $fp);
    		$usercount ++;
	}
	fclose( $fp);
	SendMessage($chat_id," _ÃÂÃÂ§ÃÂ±ÃÂ¨ÃÂ±_:`".$usercount."`");
	}
	
	elseif ($textmessage == 'Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ' && $from_id == $admin) {
	$usercount = -1;
	$fp = fopen( "data/blocklist.txt", 'r');
	while( !feof( $fp)) {
    		$line = fgets( $fp);
    		$usercount ++;	
			
			if ($line == '') {
				$usercount = $usercount-1;
			}
	}
	fclose( $fp);
	SendMessage($chat_id," _ÃÂÃÂ§ÃÂ±ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂÃÂ³ÃÂ¯ÃÂÃÂ¯:_ `".$usercount."`");
	}
	
	elseif ($textmessage == 'Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ' && $from_id == $admin) {
	$text = "
	Ã°ÂÂÂ¥ ÃÂÃÂÃÂÃÂ ÃÂ§ÃÂÃÂ§ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂÃÂÃÂÃÂ (VIP) ÃÂ©ÃÂÃÂÃÂ¯! Ã°ÂÂÂ¥
Ã¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂÃ¢ÂÂ
Ã¢ÂÂ ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂ ÃÂ§ÃÂÃÂ¹ÃÂ§ÃÂ¯ÃÂ ÃÂ§ÃÂ ÃÂ¨ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ¯ ÃÂ¯ÃÂÃÂÃÂ¯! Ã°ÂÂÂ

1Ã¢ÂÂ£ ÃÂ­ÃÂ°ÃÂ ÃÂªÃÂÃÂ§ÃÂÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂ§ÃÂ ÃÂªÃÂ¨ÃÂÃÂÃÂºÃÂ§ÃÂªÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª Ã¢ÂÂ
2Ã¢ÂÂ£ ÃÂÃÂ¯ÃÂÃÂ±ÃÂÃÂª ÃÂ ÃÂ§ÃÂÃÂ¬ÃÂ§ÃÂ¯ ÃÂ¯ÃÂ©ÃÂÃÂ ÃÂ­ÃÂ±ÃÂÃÂ ÃÂ§ÃÂ ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª Ã¢ÂÂ¨
3Ã¢ÂÂ£ ÃÂ±ÃÂÃÂ¹ ÃÂÃÂ´ÃÂ©ÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§ ÃÂ¯ÃÂ± ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ¾ÃÂ´ÃÂªÃÂÃÂ¨ÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ³ÃÂ§ÃÂ² Ã°ÂÂÂ£
4Ã¢ÂÂ£ ÃÂ¯ÃÂ³ÃÂªÃÂÃÂ± /creator ÃÂ©ÃÂ ÃÂÃÂ´ÃÂ§ÃÂ ÃÂ¯ÃÂÃÂÃÂ¯ÃÂ ÃÂ³ÃÂ§ÃÂ®ÃÂªÃÂ ÃÂ´ÃÂ¯ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§ ÃÂªÃÂÃÂ³ÃÂ· ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ¾ÃÂÃÂ§ÃÂÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ³ÃÂ§ÃÂ² ÃÂ§ÃÂ³ÃÂª ÃÂ§ÃÂ² ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§ ÃÂ­ÃÂ°ÃÂ ÃÂÃÂÃÂ´ÃÂÃÂ¯. Ã°ÂÂÂ
5Ã¢ÂÂ£ ÃÂ¯ÃÂ± ÃÂµÃÂÃÂ±ÃÂª ÃÂ§ÃÂ¶ÃÂ§ÃÂÃÂ ÃÂ´ÃÂ¯ÃÂ ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂ¬ÃÂ¯ÃÂÃÂ¯ ÃÂ¨ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ¾ÃÂÃÂ§ÃÂÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂÃÂ§ÃÂ VIP ÃÂ§ÃÂÃÂÃÂÃÂÃÂª ÃÂ§ÃÂÃÂ ÃÂ±ÃÂ§ ÃÂ¯ÃÂ§ÃÂ±ÃÂÃÂ¯. Ã°ÂÂ¤Â

Ã°ÂÂÂ° ÃÂÃÂ²ÃÂÃÂÃÂ ÃÂªÃÂ¨ÃÂ¯ÃÂÃÂ ÃÂ¨ÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª (VIP) ÃÂ³ÃÂ ÃÂÃÂ§ÃÂ 5,000 ÃÂªÃÂÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¨ÃÂ§ÃÂ´ÃÂ¯
ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ÃÂ¡ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ®ÃÂÃÂ¯ÃÂ ÃÂ¨ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ¾ÃÂ´ÃÂªÃÂÃÂ¨ÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¯ÃÂÃÂÃÂ¯.
[@parsa_masager2Bot](https://telegram.me/parsa_masager2bot)
";
	SendMessage($chat_id,$text);
	}

	
	elseif ($textmessage == 'Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§' && $from_id == $admin) {
	$text = "

- ÃÂ§ÃÂÃÂ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ¬ÃÂÃÂª ÃÂ±ÃÂ§ÃÂ­ÃÂªÃÂ ÃÂ´ÃÂÃÂ§ ÃÂ ÃÂ¾ÃÂ´ÃÂªÃÂÃÂ¨ÃÂ§ÃÂÃÂ ÃÂ§ÃÂ² ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂÃÂÃÂ¯ÃÂ±ÃÂÃÂ ÃÂÃÂ§ ÃÂ­ÃÂªÃÂ ÃÂÃÂ¨ÃÂ³ÃÂ§ÃÂÃÂª ÃÂ´ÃÂÃÂ§ ÃÂ³ÃÂ§ÃÂ®ÃÂªÃÂ ÃÂ´ÃÂ¯ÃÂ ÃÂ§ÃÂ³ÃÂª

- ÃÂÃÂÃÂ´ÃÂªÃÂ ÃÂ´ÃÂ¯ÃÂ ÃÂ¨ÃÂ ÃÂ²ÃÂ¨ÃÂ§ÃÂ PHP

- ÃÂ¨ÃÂ±ÃÂÃÂ§ÃÂÃÂ ÃÂÃÂÃÂÃÂ³ÃÂ ÃÂ´ÃÂ¯ÃÂ ÃÂªÃÂÃÂ³ÃÂ· : @parsaghafoori

ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂÃÂ´ÃÂ§ÃÂÃÂ¯ÃÂ ÃÂ ÃÂ¯ÃÂ³ÃÂªÃÂÃÂ±ÃÂ§ÃÂª ÃÂ§ÃÂ² ÃÂ¯ÃÂ©ÃÂÃÂ ÃÂÃÂ§ÃÂ ÃÂ²ÃÂÃÂ± ÃÂ§ÃÂ³ÃÂªÃÂÃÂ§ÃÂ¯ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ Ã°ÂÂÂÃ°ÂÂÂ»

iKD CompanyÃ¢ÂÂ¢
Copy Right 2017 ÃÂ©
[ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª](https://t.me/pmr_creator_bot)
[ÃÂÃÂ§ÃÂÃÂ§ÃÂ](https://t.me/pmr_creator)
[ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ¾ÃÂ´ÃÂªÃÂÃÂ¨ÃÂ§ÃÂ](https://t.me/parsa_masager2bot)
	";
	
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>$text,
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"Ã°ÂÂÂ° ÃÂ¯ÃÂ³ÃÂªÃÂÃÂ±ÃÂ§ÃÂª"],['text'=>"Ã°ÂÂÂ° ÃÂ¯ÃÂÃÂÃÂ ÃÂÃÂ§"]
                ],
                [ 
                 ['text'=>"Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ "]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
	}
	elseif ($textmessage == 'Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ') {
		if ($from_id == $admin) {
	var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>":ÃÂ¨ÃÂ ÃÂ¨ÃÂ®ÃÂ´ ÃÂÃÂ¯ÃÂÃÂ±ÃÂÃÂª ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯Ã°ÂÂÂ¾",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"ÃÂÃÂ§ÃÂÃ¢ÂÂ¡Ã¯Â¸Â"]
                ],
                [
                   ['text'=>"ÃÂ³ÃÂÃ¢ÂÂ¡Ã¯Â¸Â"]
                ],
           [
                   ['text'=>"ÃÂ¨ÃÂÃÂ ÃÂ¯ÃÂ±ÃÂ§ÃÂÃÂÃ¢ÂÂ¡Ã¯Â¸Â"]
                ],
                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		}
		else {
			$name = file_get_contents("data/profile/name.txt");
			$age = file_get_contents("data/profile/age.txt");
			$bio = file_get_contents("data/profile/bio.txt");
			$protxt = "";
			if ($name == '' && $age == '' && $bio == '') {
				$protxt = "ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ ÃÂªÃÂÃÂ¸ÃÂÃÂ ÃÂÃÂ´ÃÂ¯ÃÂ ÃÂ§ÃÂ³ÃÂª!Ã°ÂÂÂÃ°ÂÂÂ»";
			}
			if ($name != '') {
				$protxt = $protxt."\nName : ".$name;
			}
			
			if ($age != '') {
				$protxt = $protxt."\nAge : ".$age;
			}
			
			if ($bio != '') {
				$protxt = $protxt."\nBioGraphy : \n".$bio;
			}
			SendMessage($chat_id,$protxt);
		}
	}
	elseif ($textmessage == 'Ã°ÂÂÂ° ÃÂ¯ÃÂ³ÃÂªÃÂÃÂ±ÃÂ§ÃÂª' && $from_id == $admin) {
	$text = " `
	Ã°ÂÂÂ°ÃÂ¯ÃÂ³ÃÂªÃÂÃÂ±ÃÂ§ÃÂª

- ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ¾ÃÂ§ÃÂ³ÃÂ® ÃÂ¨ÃÂ§ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂ§ÃÂ ÃÂ©ÃÂ§ÃÂ±ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ±ÃÂÃÂ ÃÂ§ÃÂ ÃÂÃÂ§ ÃÂ±ÃÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯.

+ ÃÂÃÂÃÂ³ÃÂª ÃÂ¯ÃÂ³ÃÂªÃÂÃÂ±ÃÂ§ÃÂª:

  /ban : 
 ÃÂ±ÃÂÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ±ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ  ban/ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯
 ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ§ÃÂ¶ÃÂ§ÃÂÃÂ ÃÂ©ÃÂ±ÃÂ¯ÃÂ ÃÂ©ÃÂ§ÃÂ±ÃÂ¨ÃÂ± ÃÂ¨ÃÂ ÃÂÃÂÃÂª ÃÂ³ÃÂÃÂ§ÃÂ
--------------------------------------------
  /unban : 
 ÃÂ±ÃÂÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ±ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ  unban/ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯
 ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ¾ÃÂ§ÃÂ© ÃÂ©ÃÂ±ÃÂ¯ÃÂ ÃÂ©ÃÂ§ÃÂ±ÃÂ¨ÃÂ± ÃÂ§ÃÂ² ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ
--------------------------------------------
  /forward : 
 ÃÂ±ÃÂÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ±ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ  forward/ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯
 ÃÂ¬ÃÂÃÂª ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯ ÃÂ©ÃÂ±ÃÂ¯ÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ©ÃÂ§ÃÂ±ÃÂ¨ÃÂ± 
 ÃÂ§ÃÂ¨ÃÂªÃÂ¯ÃÂ§ ÃÂ±ÃÂÃÂ ÃÂ´ÃÂ®ÃÂ³ ÃÂ±ÃÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ forward/ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ ÃÂ¨ÃÂ¹ÃÂ¯ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ±ÃÂ¯ ÃÂÃÂ¸ÃÂ±ÃÂªÃÂ§ÃÂ ÃÂ±ÃÂ§ ÃÂ§ÃÂÃÂÃÂ¬ÃÂ§ ÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯ ÃÂ©ÃÂÃÂÃÂ¯
--------------------------------------------
  /share :  
 ÃÂ±ÃÂÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ±ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯ ÃÂ  share/ ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ©ÃÂÃÂÃÂ¯
 ÃÂ¨ÃÂ±ÃÂ§ÃÂ ÃÂ´ÃÂÃÂ± ÃÂ©ÃÂ±ÃÂ¯ÃÂ ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª(ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂ´ÃÂÃÂ§) [ÃÂ´ÃÂÃÂ§ ÃÂ§ÃÂ¨ÃÂªÃÂ¯ÃÂ§ ÃÂ¨ÃÂ§ÃÂÃÂ¯ ÃÂ§ÃÂ² ÃÂ¨ÃÂ®ÃÂ´ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂ«ÃÂ¨ÃÂª ÃÂ©ÃÂÃÂÃÂ¯]
	`";
	SendMessage($chat_id,$text);
	}
	
	elseif ($textmessage == 'Ã°ÂÂÂ° ÃÂ¯ÃÂÃÂÃÂ ÃÂÃÂ§' && $from_id == $admin) {
	$text = "
	Ã°ÂÂÂ°ÃÂ¯ÃÂ©ÃÂÃÂ ÃÂÃÂ§

+ Buttons List:

  Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£ :
  ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¨ÃÂ ÃÂ§ÃÂ¹ÃÂ¶ÃÂ§ ÃÂ ÃÂ¯ÃÂ±ÃÂÃÂ ÃÂÃÂ§.
----------------------
  Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª :
  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ±ÃÂ¨ÃÂ§ÃÂª.
----------------------
  Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª :
  ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§.
----------------------
 Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ :
  ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ ÃÂ±ÃÂ¨ÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§.
----------------------
  Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±:
  ÃÂÃÂ´ÃÂ§ÃÂÃÂ¯ÃÂ ÃÂ ÃÂªÃÂ¹ÃÂ¯ÃÂ§ÃÂ¯ ÃÂ§ÃÂ¹ÃÂ¶ÃÂ§ ÃÂ ÃÂ¯ÃÂ±ÃÂÃÂ ÃÂÃÂ§.
----------------------
  Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ :
  ÃÂÃÂ´ÃÂ§ÃÂÃÂ¯ÃÂ ÃÂ ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ.
----------------------
  Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª :
  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§ÃÂ±ÃÂ ÃÂ ÃÂ´ÃÂÃÂ§.
----------------------
  Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ :
  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ ÃÂ´ÃÂÃÂ§.
----------------------
  Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ :
  ÃÂÃÂÃÂ§ÃÂÃÂ´ ÃÂ²ÃÂÃÂ§ÃÂ ÃÂ¯ÃÂÃÂÃÂ.

	";
	SendMessage($chat_id,$text);
	}
	
	elseif($textmessage == '/start')
	{
		$txt = file_get_contents("data/start_txt.txt");
		//==============
		if ($type == "admin") {
		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ³ÃÂÃÂ§ÃÂ ÃÂ±ÃÂÃÂ³ ÃÂ¬ÃÂ§ÃÂ!!Ã°ÂÂÂ
ÃÂ¨ÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂ¾ÃÂÃÂ§ÃÂÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ®ÃÂÃÂ´ ÃÂ¢ÃÂÃÂ¯ÃÂÃÂ¯!!Ã°ÂÂÂ¹",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
            [
                   ['text'=>"Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£"],['text'=>"Ã¢ÂÂÃ¯Â¸Â ÃÂ±ÃÂ§ÃÂÃÂÃÂÃÂ§"],['text'=>"Ã¢ÂÂ ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ¾ ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ³ÃÂªÃÂ§ÃÂ±ÃÂª"],['text'=>"Ã¢ÂÂ½Ã¯Â¸Â ÃÂÃÂÃÂ±ÃÂ§ÃÂÃÂ´ ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ¾ÃÂÃÂ´ÃÂÃÂ±ÃÂ¶ "]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ´ ÃÂ¢ÃÂÃÂ§ÃÂ±"],['text'=>"Ã°ÂÂÂªÃÂ§ÃÂ±ÃÂªÃÂÃÂ§ ÃÂ±ÃÂ¨ÃÂ§ÃÂªÃ°ÂÂÂ"],['text'=>"Ã¢ÂÂ«Ã¯Â¸Â ÃÂÃÂÃÂ³ÃÂª ÃÂ³ÃÂÃÂ§ÃÂ"]
                ],
                [
                   ['text'=>"Ã¢ÂÂÃ¯Â¸Â  ÃÂªÃÂÃÂ¸ÃÂÃÂÃÂ§ÃÂª ÃÂ©ÃÂ§ÃÂÃÂªÃÂ©ÃÂª"],['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
                [
                   ['text'=>"Ã°ÂÂÂ°ÃÂ§ÃÂÃÂ©ÃÂ§ÃÂÃÂ§ÃÂª ÃÂÃÂÃÂÃÂ"],['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		}
    		else {
    		if ($bottype != "gold") {

    		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>$txt."\n\n[PMR CreatorÃ¢ÂÂ¢](https://telegram.me/pmr_creator_bot)",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
[
                   ['text'=>"Ã°ÂÂÂÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂÃ¢ÂÂÃÂÃÂÃÂ§ÃÂ" , 'request_location' => true]
                ],
[
                   ['text'=>"Ã¢ÂÂÃ¯Â¸ÂÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂÃ¢ÂÂÃÂ´ÃÂÃÂ§ÃÂ±ÃÂÃ¢ÂÂÃÂªÃÂÃÂÃÂ" , 'request_contact' => true]
                ],
[
                   ['text'=>"Ã°ÂÂÂÃÂÃÂ´ÃÂ®ÃÂµÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§"], ['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		}
    		else {
    		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>$txt,
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
[
                   ['text'=>"Ã°ÂÂÂÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂÃ¢ÂÂÃÂÃÂÃÂ§ÃÂ" , 'request_location' => true]
                ],
[
                   ['text'=>"Ã¢ÂÂÃ¯Â¸ÂÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂÃ¢ÂÂÃÂ´ÃÂÃÂ§ÃÂ±ÃÂÃ¢ÂÂÃÂªÃÂÃÂÃÂ" , 'request_contact' => true]
                ],
[
                   ['text'=>"Ã°ÂÂÂÃÂÃÂ´ÃÂ®ÃÂµÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§"], ['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
    		}
    		}
		//==============
		$users = file_get_contents("data/users.txt");
		if (strpos($users , "$chat_id") !== false)
		{ 
		
		}
		else { 
			$myfile2 = fopen("data/users.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$from_id\n");
			fclose($myfile2);
			mkdir("data/".$from_id);
			save($from_id."/type.txt","member");
			save($from_id."/step.txt","none");
		     }
	}
	elseif ($reply != null && $from_id == $admin) {
		if ($textmessage == '/share') {
		$anumber = file_get_contents("data/profile/number.txt");
		$aname= file_get_contents("data/profile/cname.txt");
		makereq('sendContact',[
		'chat_id'=>$reply,
		'phone_number'=>$anumber,
		'first_name'=>$aname
		]);
		SendMessage($chat_id,"ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ´ÃÂ¯!Ã¢ÂÂ");
		}
		elseif ($textmessage == '/forward') {
		SendMessage($chat_id,"ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ®ÃÂÃÂ¯ ÃÂ±ÃÂ§ ÃÂÃÂÃÂ±ÃÂÃÂ§ÃÂ±ÃÂ¯ ÃÂÃÂÃÂÃÂ¯Ã°ÂÂÂ:");	
		save($from_id."/step.txt","Forward");
		save("forward_id.txt","$reply");
		}
		elseif ($textmessage == '/ban') {
			$myfile2 = fopen("data/blocklist.txt", "a") or die("Unable to open file!");	
			fwrite($myfile2, "$reply\n");
			fclose($myfile2);
			SendMessage($chat_id,"*User Banned!*");
			SendMessage($reply,"*You Are Banned!*");
		}
		elseif ($textmessage == '/unban') {
			
			$newlist = str_replace($reply,"",$list);
			save("blocklist.txt",$newlist);
			SendMessage($chat_id,"*User UnBanned!*");
			SendMessage($reply,"*You Are UnBanned!*");
		}
		else {
	SendMessage($reply ,$textmessage);
	SendMessage($chat_id,"ÃÂ¾ÃÂÃÂ§ÃÂ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂ´ÃÂ¯Ã¢ÂÂ.");	
		}
	}
	
	elseif ($textmessage == '/creator' && $bottype != "gold") {
    		var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂ§ÃÂÃÂ ÃÂ±ÃÂÃÂ¨ÃÂ§ÃÂª ÃÂªÃÂÃÂ³ÃÂ· [Pmr Creator](https://telegram.me/pmr_creator_bot) ÃÂ³ÃÂ§ÃÂ®ÃÂªÃÂ ÃÂ´ÃÂ¯ÃÂ ÃÂ§ÃÂ³ÃÂª.Ã°ÂÂÂ",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>"Ã°ÂÂÂ¬ ÃÂ¾ÃÂ±ÃÂÃÂÃÂ§ÃÂÃÂ"]
                ],
[
                   ['text'=>"Ã°ÂÂÂÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂÃ¢ÂÂÃÂÃÂÃÂ§ÃÂ" , 'request_location' => true]
                ],
[
                   ['text'=>"Ã¢ÂÂÃ¯Â¸ÂÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂÃ¢ÂÂÃÂ´ÃÂÃÂ§ÃÂ±ÃÂÃ¢ÂÂÃÂªÃÂÃÂÃÂ" , 'request_contact' => true]
                ],
[
                   ['text'=>"Ã°ÂÂÂÃÂÃÂ´ÃÂ®ÃÂµÃÂ§ÃÂª ÃÂ´ÃÂÃÂ§"], ['text'=>"Ã°ÂÂÂÃÂªÃÂ§ÃÂ±ÃÂÃÂ® ÃÂ ÃÂ²ÃÂÃÂ§ÃÂ"]
                ]
            	],

            	'resize_keyboard'=>true
       		])
    		]));
    		
	}
	elseif ($forward != null && $_forward == "Ã¢ÂÂÃ¯Â¸Â") {
		SendMessage($chat_id,"Locked!");
	}
	elseif (strpos($textmessage , "/toall") !== false  || $textmessage == "Ã°ÂÂÂÃÂ¾ÃÂÃÂ§ÃÂ ÃÂÃÂÃÂ¯ÃÂ§ÃÂÃÂÃ°ÂÂÂ£") {
		if ($from_id == $admin) {
			save($from_id."/step.txt","Send To All");
				var_dump(makereq('sendMessage',[
        	'chat_id'=>$update->message->chat->id,
        	'text'=>"ÃÂÃÂªÃÂ ÃÂ®ÃÂÃÂ¯ÃÂ±ÃÂ§ ÃÂ§ÃÂ±ÃÂ³ÃÂ§ÃÂ ÃÂÃÂÃÂ§ÃÂÃÂÃÂ¯.",
		'parse_mode'=>'MarkDown',
        	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'Ã°ÂÂÂÃÂÃÂÃÂÃÂ ÃÂ§ÃÂµÃÂÃÂÃ°ÂÂÂ ']
                ]
            	],
            	'resize_keyboard'=>true
       		])
    		]));
		}
		else {
			SendMessage($chat_id,"You Are Not Admin");
		}
	}
	else
	{
		if ($from_id != $admin) {
		$txt = file_get_contents("data/pmsend_txt.txt");
		SendMessage($chat_id,$txt);
		Forward($admin,$chat_id,$message_id); 
		}
		else {
		SendMessage($chat_id,"[$textmessage](https://t.me/a) *is unknown!*Ã°ÂÂÂ");
		}
	}
	
	
	?>