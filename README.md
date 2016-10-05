# Simple-PHP-LINE-BOT
Simple PHP LINE BOT using cURL without line SDK <br />
by Nontachai Korninai

<h1>Setting</h1>
go to file setting.php

	public function getChannelAccessToken(){
		$channelAccessToken = "<YOUR CHANNEL ACCESS TOKEN>";
		return $channelAccessToken;
	}
        
	public function getChannelSecret(){
		$channelSecret = "<YOUR CHANNEL SECRET>";
		return $channelSecret;
	}
	
<h1>Example : Simple BOT</h1>
When you finished setting, Create new index.php

	require_once __DIR__ . '/lineBot.php';

	$bot = new Linebot();
	$text = $bot->getMessageText(); //when user send text to bot
	
	$bot->reply($text); // bot reply to user

<h1>About LINE Messaging API</h1>

Please refer to the official API documents for details.

en: https://devdocs.line.me/en/

ja: https://devdocs.line.me/ja/
