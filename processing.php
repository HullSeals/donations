<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('');

header('Content-Type: application/json');

if (!isset($_POST['currselect'])) {
  header("Location: .");
}

if ($_POST['amntselect'] == 'Other') {
  $amnt = $_POST['other_text'];
}
else {
  $amnt = $_POST['amntselect'];
}
$amnt = $amnt * 100;
$curr = $_POST['currselect'];

$YOUR_DOMAIN = 'https://hullseals.space/donate';

if (!isset($_POST['recurring'])) {
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
}
if (isset($_POST['recurring'])) {
  if ($curr == 'usd') {
    $price = 'price_1JRRyDG70gztiKLsSBdd4sTG';
  }
  elseif ($curr == "eur") {
    $price = 'price_1JRRyDG70gztiKLsUubg9N7d';
  }
  elseif ($curr == "gbp") {
    $price = 'price_1JRRyDG70gztiKLsDEnbEzTc';
  }
  elseif ($curr == "cad") {
    $price = 'price_1JRRyDG70gztiKLsi4HoeHqy';
  }
  elseif ($curr == "aud") {
    $price = 'price_1JRRyDG70gztiKLs1NQOAtb9';
  }
  if ($curr == "eur") {
    $checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
      'price' => $price,
      'quantity' => $amnt,
    ]],
    'payment_method_types' => [
      'card',
    ],
    'mode' => 'subscription',
    'success_url' => $YOUR_DOMAIN . '/success.php',
    'cancel_url' => $YOUR_DOMAIN . '/cancel.php',
  ]);
  }
  else {
    $checkout_session = \Stripe\Checkout\Session::create([
      'line_items' => [[
        'price' => $price,
        'quantity' => $amnt,
      ]],
    'payment_method_types' => [
      'card',
    ],
    'mode' => 'subscription',
    'success_url' => $YOUR_DOMAIN . '/success.php',
    'cancel_url' => $YOUR_DOMAIN . '/cancel.php',
  ]);
  }

}
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
