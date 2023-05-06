<?php
// Your Twilio account SID and auth token
$account_sid = 'ACffae3653b45a37ef7c220131d55578ac';
$auth_token = '8be8c79cf088de7f94feb2c56eff0706';

// Create a Twilio client
require_once __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;
$client = new Client($account_sid, $auth_token);

// Send a message
$message = $client->messages->create(
    // the number you'd like to send the message to
    '+84 328 910 162',
    array(
        // A Twilio phone number you purchased at twilio.com/console
        'from' => '+13184963773',
        // the body of the text message you'd like to send
        'body' => 'Hey there!'
    )
);

// Print the message SID
echo $message->sid;
?>
