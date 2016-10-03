<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}