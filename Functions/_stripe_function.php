<?php


require '../Admin/vendor/autoload.php';
// This is your test secret API key.
\Stripe\Stripe::setApiKey('sk_test_51Ka40mAjcEw0DwAAzyenSNcEGViMARHmf2pncLIzHDvQbIkyd65tfz1bngBaktfaFp7YdwPOwzkbQTllAGO6cKwt00zK4tuc72');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://smartmart.test/';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => '{{PRICE_ID}}',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
