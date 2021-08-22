<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('sk_test_5twoOxoGyKx6zNUmBlUcMvZ2000bB0ZXpm');

header('Content-Type: application/json');

if ($_POST['amntselect'] == 'Other') {
  $amnt = $_POST['other_text'];
}
else {
  $amnt = $_POST['amntselect'];
}
$amnt = $amnt * 100;
$curr = $_POST['currselect'];

$YOUR_DOMAIN = 'https://hullseals.space/donate';

if ($curr == "eur") {
  $checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    'amount' => $amnt,
    'currency' => $curr,
    'name' => "One Time Donation to the Hull Seals",
    'quantity' => 1,
    'images' => ['https://hullseals.space/images/emblem_mid.png'],
  ]],
  'payment_method_types' => [
    'card',
    'giropay',
    'eps',
    'p24',
    'bancontact',
    'ideal',
    'sofort',
  ],
  'mode' => 'payment',
  'submit_type' => 'donate',
  'success_url' => $YOUR_DOMAIN . '/success.php',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.php',
]);
}
else {
  $checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    'amount' => $amnt,
    'currency' => $curr,
    'name' => "One Time Donation to the Hull Seals",
    'quantity' => 1,
    'images' => ['https://hullseals.space/images/emblem_mid.png'],
  ]],
  'payment_method_types' => [
    'card',
  ],
  'mode' => 'payment',
  'submit_type' => 'donate',
  'success_url' => $YOUR_DOMAIN . '/success.php',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.php',
]);
}

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
