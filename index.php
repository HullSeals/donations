<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//UserSpice Required
require_once '../users/init.php';  //make sure this path is correct!
if (!securePage($_SERVER['PHP_SELF'])){die();}?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta content="Donate to the Hull Seals" name="description">
    <title>Donate | The Hull Seals</title>
    <?php include '../assets/includes/headerCenter.php'; ?>
    <script src="https://js.stripe.com/v3/"></script>
  	<script>
  	$(document).on('change', '.div-toggle', function() {
  	  var target = $(this).data('target');
  	  var show = $("option:selected", this).data('show');
  	  $(target).children().addClass('hide');
  	  $(show).removeClass('hide');
  	});
  	$(document).ready(function(){
  	    $('.div-toggle').trigger('change');
  	});</script>
</head>
<body>
    <div id="home">
      <?php include '../assets/includes/menuCode.php';?>
        <section class="introduction container">
	    <article id="intro3">
				<p></p>
				<h1><em>Thank You</em> for considering donating!</h1>
				<br />
				<p>As simple as this all seems, it costs us almost $100 per month to operate our servers. Our Admins pay for this out of pocket, but any contributions help lessen the burden.</p>
				<p>Your generous donation will go toward maintenance of our servers, and expansion into bigger, and better, things in the future!</p>
				<hr>
        <div>
				<div style="max-width:85%" class="mx-auto">
<div class="input-group mb-3">
		<select id="curr_select" class="custom-select">
				<option>Please select your currency.</option>
				<option value="USD">US Dollars</option>
				<option value="GBP">UK Pounds</option>
				<option value="EUR">Euros</option>
				<option value="CAD">Canadian Dollars</option>
				<option value="AUD">Australian Dollars</option>
		</select>
</div>
<div id="USD" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgvpnViwhaTpf">Donate $1</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgvnQUKV1smy2">Donate $5</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgvIaoExsEgos">Donate $10</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgvTfA6AgInkn">Donate $20</button>
</div>
<div id="GBP" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwemKESvpUvC">Donate £1</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwzDOUx8VyB2">Donate £5</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwZGt1nGfV82">Donate £10</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgw1DHOPSwuuc">Donate £20</button>
</div>
<div id="EUR" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgv5iGQ06qZQ6">Donate €1</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgvivSZaOL7oC">Donate €5</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwZg0qFI1LCu">Donate €10</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgw3HJRQg1CQ9">Donate €20</button>
</div>
<div id="CAD" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwFsb4jlAH3q">Donate CA$1</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwd847US8Yeb">Donate CA$5</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwdtebsh9erj">Donate CA$10</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgw9Yr5vN8Cl1">Donate CA$20</button>
</div>
<div id="AUD" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwNxYs4rUuMa">Donate A$1</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwJDxA2F5jAh">Donate A$5</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgwgDYfyfeSQt">Donate A$10</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="payment" data-price-id="sku_HHgxUqnrskXk5s">Donate A$20</button>
</div>
</div>
<br />
<p>If you have any questions, please email our team at <a class="btn btn-secondary" href="mailto:finance@hullseals.space" style="text-decoration: none;">finance@hullseals.space</a></p>
<p>Looking for recurring donations? <a class="btn btn-secondary" href="recurring.php" style="text-decoration: none;">Go Here</a></p>
<hr style="border: 5px solid orange; border-radius: 5px;">
<div style="text-align:center;">
<p>Or, donate via Paypal</p>
<form action="https://www.paypal.com/donate" method="post" target="_top">
<input type="hidden" name="hosted_button_id" value="7QW38UUWV6CMN" />
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
</form>
</div>
</article>
<div class="clearfix"></div>
</section>
</div>
<?php include '../assets/includes/footer.php'; ?>
	<script>
	$(document).ready(function(){

	  //hides dropdown content
	  $(".curr_chart").hide();
	  //listen to dropdown for change
	  $("#curr_select").change(function(){
	    //rehide content on change
	    $('.curr_chart').hide();
	    //unhides current item
	    $('#'+$(this).val()).show();
	  });

	});
	</script>

	<script>
		 // Replace with your own publishable key: https://dashboard.stripe.com/test/apikeys
		 var PUBLISHABLE_KEY = 'pk_live_KiZ55OXEwCXcsyvKRoszm0mw00AJM6XE4j';
		 // Replace with the domain you want your users to be redirected back to after payment
		 var DOMAIN = location.href.replace(/[^/]*$/, '');

		 if (PUBLISHABLE_KEY === 'NULL') {
			 console.log(
				 'Replace the hardcoded publishable key with your own publishable key: https://dashboard.stripe.com/test/apikeys'
			 );
		 }

		 var stripe = Stripe(PUBLISHABLE_KEY);

		 // Handle any errors from Checkout
		 var handleResult = function (result) {
			 if (result.error) {
				 var displayError = document.getElementById('error-message');
				 displayError.textContent = result.error.message;
			 }
		 };

		 document.querySelectorAll('button').forEach(function (button) {
			 button.addEventListener('click', function (e) {
				 var mode = e.target.dataset.checkoutMode;
				 var priceId = e.target.dataset.priceId;
				 var items = [{ price: priceId, quantity: 1 }];

				 // Make the call to Stripe.js to redirect to the checkout page
				 // with the sku or plan ID.
				 stripe
					 .redirectToCheckout({
						 mode: mode,
						 lineItems: items,
						 successUrl:
							 DOMAIN + 'success.php?session_id={CHECKOUT_SESSION_ID}',
						 cancelUrl:
							 DOMAIN + 'canceled.php?session_id={CHECKOUT_SESSION_ID}',
					 })
					 .then(handleResult);
			 });
		 });
	 </script>
</body>
</html>
