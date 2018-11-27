<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
