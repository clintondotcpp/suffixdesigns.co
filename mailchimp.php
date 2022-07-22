<?php
require_once 'vendor/autoload.php';

$client = new MailchimpMarketing\ApiClient();
$client->setConfig([
    'apiKey' => '',
    'server' => 'YOUR_SERVER_PREFIX',
]);

$response = $client->lists->batchListMembers("list_id", ["members" => [[]]]);
print_r($response);
