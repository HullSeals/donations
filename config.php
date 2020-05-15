<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_live_SJ8XBT1XtuZLIirDLoCzIBiz00sziNsRjD",
  "publishable_key" => "pk_live_KiZ55OXEwCXcsyvKRoszm0mw00AJM6XE4j",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
