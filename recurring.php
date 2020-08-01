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
    <meta content="Recurring Donations to the Hull Seals" name="description">
    <title>Recurring Donations | The Hull Seals</title>
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
				<h1><em>Thank You</em> for considering a recurring donation!</h1>
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
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sQpllhOPEB6">Donate $1 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sLqUrfsb7Wy">Donate $5 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8siH3tFjfZXP">Donate $10 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sNHxQwi3tSQ">Donate $20 Per Month</button>
</div>
<div id="GBP" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sfKTcZjaCOC">Donate £1 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8skSsZRCI5iF">Donate £5 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8svVfnXhMDPg">Donate £10 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sZEeUnV9c00">Donate £20 Per Month</button>
</div>
<div id="EUR" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8saj08rDr1uv">Donate €1 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sWAqWjomhwV">Donate €5 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sLtCqIopBgN">Donate €10 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sxXulH9AKVp">Donate €20 Per Month</button>
</div>
<div id="CAD" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sxeq2i7vZAd">Donate CA$1 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sM4ZSc2d9Dn">Donate CA$5 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8stKk0YzkEaY">Donate CA$10 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sbScmNUx6Ee">Donate CA$20 Per Month</button>
</div>
<div id="AUD" class="curr_chart">
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8smyjvzNaKuY">Donate A$1 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sK9Mwy5xcra">Donate A$5 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sbxRR5T9RPO">Donate A$10 Per Month</button>
	<button type="button" class="btn btn-secondary btn-block" data-checkout-mode="subscription" data-price-id="price_HM8sEgMtKrPD72">Donate A$20 Per Month</button>
</div>
</div>
<br />
<p>If you have any questions, please email our team at <a class="btn btn-secondary" href="mailto:finance@hullseals.space" style="text-decoration: none;">finance@hullseals.space</a></p>
<p>Looking for one-time donations? <a class="btn btn-secondary" href="index.php" style="text-decoration: none;">Go Here</a></p>
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
