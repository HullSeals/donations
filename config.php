<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_live_BV1kYNf3SafXzZtJy5tv4KI800Jh9PyMcX",
  "publishable_key" => "pk_live_KiZ55OXEwCXcsyvKRoszm0mw00AJM6XE4j",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>