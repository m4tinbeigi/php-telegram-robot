<?php

$telegram = new TelegramAPI('YOUR_BOT_TOKEN');
$message = $telegram->sendMessage($chat_id, $text);
echo 'Message sent!';