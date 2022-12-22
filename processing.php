<?php
require 'vendor/autoload.php';
\Stripe\Stripe::setApiKey('');

header('Content-Type: application/json');

if (!isset($_POST['currselect'])) {
  header("Location: .");
}

if ($_POST['amntselect'] == 'other') {
  $amnt = $_POST['other_text'];
} else {
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
      'success_url' => $YOUR_DOMAIN . '/complete.php?status=complete',
      'cancel_url' => $YOUR_DOMAIN . '/complete.php?status=canceled',
    ]);
  } else {
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
      'success_url' => $YOUR_DOMAIN . '/complete.php?status=complete',
      'cancel_url' => $YOUR_DOMAIN . '/complete.php?status=canceled',
    ]);
  }
}
if (isset($_POST['recurring'])) {
  if ($curr == 'usd') {
    $price = 'price_1JRRyDG70gztiKLsSBdd4sTG';
  } elseif ($curr == "eur") {
    $price = 'price_1JRRyDG70gztiKLsUubg9N7d';
  } elseif ($curr == "gbp") {
    $price = 'price_1JRRyDG70gztiKLsDEnbEzTc';
  } elseif ($curr == "cad") {
    $price = 'price_1JRRyDG70gztiKLsi4HoeHqy';
  } elseif ($curr == "aud") {
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
      'success_url' => $YOUR_DOMAIN . '/complete.php?status=complete',
      'cancel_url' => $YOUR_DOMAIN . '/complete.php?status=canceled',
    ]);
  } else {
    $checkout_session = \Stripe\Checkout\Session::create([
      'line_items' => [[
        'price' => $price,
        'quantity' => $amnt,
      ]],
      'payment_method_types' => [
        'card',
      ],
      'mode' => 'subscription',
      'success_url' => $YOUR_DOMAIN . '/complete.php?status=complete',
      'cancel_url' => $YOUR_DOMAIN . '/complete.php?status=canceled',
    ]);
  }
}
header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);
// Based on https://github.com/stripe-archive/checkout-subscription-and-add-on/blob/699e48cf6943b973904f72a8f3cfaddef0c811b4/server/php/public/create-checkout-session.php
