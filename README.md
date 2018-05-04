# Simple-PHP-LINE-BOT
Simple PHP LINE BOT using cURL without line SDK <br />
by Nontachai Korninai

<h1>Setting</h1>
go to file setting.php

	
```php
public function getChannelAccessToken(){
	$channelAccessToken = "<YOUR CHANNEL ACCESS TOKEN>";
	return $channelAccessToken;
}
        
public function getChannelSecret(){
	$channelSecret = "<YOUR CHANNEL SECRET>";
	return $channelSecret;
}
```
<h1>Example : Simple BOT</h1>
When you finished setting, Create new index.php

### reply
```php
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();

$text = $bot->getMessageText(); //when user send text to bot	
$bot->reply($text); // bot reply to user
```
### get User Id
```php
$userId = $bot->getUserId();
```

### Push Text
```php
$bot->pushText($userId, 'Hello Simple Text!');
```

### Push Image
```php
$imageUrl = "https://example.com/panda.jpg";
$bot->pushImage($userId, $imageUrl);
```

### Push Video
```php
$videoUrl = "https://example.com/avengers.mp4";
$coverImage = "https://example.com/cover.jpg";
$bot->pushVideo($userId, $videoUrl, $coverImage);
```

<h1>About LINE Messaging API</h1>

Please refer to the official API documents for details.

en: https://devdocs.line.me/en/

ja: https://devdocs.line.me/ja/
