<?php

use GuzzleHttp\Client;

class ExampleController {
    public function getData() {
        $client = new Client();
        $response = $client->request('GET', 'https://example.com');
        $data = json_decode($response->getBody());
        return $data;
    }
}

$telegram = new TelegramAPI('YOUR_BOT_TOKEN');
$me = $telegram->getMe();
echo 'Bot name: ' . $me['result']['first_name'];