<?php
  $priceID = $_GET['product'];
require 'vendor/autoload.php';
// This is your live secret API key.
\Stripe\Stripe::setApiKey('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');

header('Content-Type: application/json');
    

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

