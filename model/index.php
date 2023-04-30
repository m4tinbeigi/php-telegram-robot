<?php

use GuzzleHttp\Client;

class TelegramAPI {
    private $bot_token;
    private $api_url;
    private $client;

    public function __construct($bot_token) {
        $this->bot_token = $bot_token;
        $this->api_url = 'https://api.telegram.org/bot' . $this->bot_token;
        $this->client = new Client();
    }

    public function getMe() {
        return $this->sendRequest('getMe');
    }

    public function sendMessage($chat_id, $text) {
        $params = [
            'chat_id' => $chat_id,
            'text' => $text
        ];
        return $this->sendRequest('sendMessage', $params);
    }

    private function sendRequest($method, $params = []) {
        $response = $this->client->request('POST', $this->api_url . '/' . $method, ['form_params' => $params]);
        return json_decode($response->getBody()->getContents(), true);
    }
}
