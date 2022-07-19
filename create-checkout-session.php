<?php

require 'vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51LMBLYGvSc684Tudw7W3TJhoOwXeXuf3l4zHk8OeAbvJU3PI80xp5ENPpTXm4rsZ7Szidxbd773gqnNcLUtNaaIS00YjFJGxUm');

header('Content-Type: application/json');
/* {{PRICE_ID}}*/


    $priceID = $_GET['product'];
    

    
            

$YOUR_DOMAIN = 'http://localhost/mywebsite/';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. price_1LMxFJGvSc684TudbeZxJJY2pr_1234) of the product you want to sell
    'price' => $priceID,
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
  'automatic_tax' => [
    'enabled' => true,
  ],
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);

