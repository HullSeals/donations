<?php
 require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $amount = $_POST['amount'];

  $customer = \Stripe\Customer::create([
      'email' => $email,
      'source'  => $token,
  ]);

  $charge = \Stripe\Charge::create([
      'customer' => $customer->id,
      'amount'   => $_POST['amount'],
      'currency' => 'usd',
  ]);
  echo '<h1>Transaction successfully completed. You may now close the page.</h1>';
?>
