<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="../favicon.ico" rel="icon" type="image/x-icon">
	<link href="../favicon.ico" rel="shortcut icon" type="image/x-icon">
	<meta charset="UTF-8">
	<meta content="Wolfii Namakura" name="author">
	<meta content="hull seals, elite dangerous, distant worlds, seal team fix, mechanics, dw2" name="keywords">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
	<meta content="Welcome to the Hull Seals, Elite Dangerous's Premier Hull Repair Specialists!" name="description">
	<title>Donate | The Hull Seals</title>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.min.js">
	</script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
	<link href="../styles.css" rel="stylesheet" type="text/css">
	<link href="donate.css" rel="stylesheet" type="text/css">
	<link href="//cdnpub.websitepolicies.com/lib/cookieconsent/1.0.2/cookieconsent.min.css" rel="stylesheet" type="text/css">
	<script src="https://cdnpub.websitepolicies.com/lib/cookieconsent/1.0.2/cookieconsent.min.js">
	</script>
  <script src="https://js.stripe.com/v3/">
  </script>
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
	<script>
	window.addEventListener("load", function() {window.wpcc.init({"colors": {"popup": {"background": "#222222","text": "#ffffff","border": "#bd9851"},"button": {"background": "#bd9851","text": "#000000"}},"border": "thin","corners": "small","padding": "small","margin": "small","transparency": "25","fontsize": "small","content": {"href": "https://hullseals.space/knowledge/books/important-information/page/cookie-policy"}})});
	</script>
</head>
<body>
	<div id="home">
		<header>
			<nav class="navbar container navbar-expand-lg navbar-expand-md navbar-dark" role="navigation">
				<a class="navbar-brand" href="../"><img alt="Logo" class="d-inline-block align-top" height="30" src="../images/emblem_scaled.png"> Hull Seals</a><button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="../">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../knowledge">Knowledge Base</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../journal">Journal Reader</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../about">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="../contact">Contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="https://hullseals.space/users">Login/Register</a>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<section class="introduction">
			<article>
				<p></p>
				<h1><em>Thank You</em> for considering a recurring donation!</h1>
				<br />
				<p>As simple as this all seems, it costs us almost $100 per month to operate our servers. Our Admins pay for this out of pocket, but any contributions help lessen the burden.</p>
				<p>Your generous donation will go toward maintenance of our servers, and expansion into bigger, and better, things in the future!</p>
				<hr>
				<div>
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
<br />
<p>If you have any questions, please email our team at <a class="btn btn-secondary" href="mailto:finance@hullseals.space" style="text-decoration: none;">finance@hullseals.space</a></p>
<p>Looking for one-time donations? <a class="btn btn-secondary" href="index.php" style="text-decoration: none;">Go Here</a></p>
			</article>
		</section>
		<div class="clearfix"></div>
	</div>
	<footer class="page-footer font-small">
		<div class="container">
			<div class="row">
				<div class="col-md-9 mt-md-0 mt-3">
					<h5 class="text-uppercase">Hull Seals</h5>
					<p><em>The Hull Seals</em> were established in January of 3305, and have begun plans to roll out galaxy-wide!</p><a class="btn btn-sm btn-secondary" href="https://fuelrats.com/i-need-fuel">Need Fuel? Call the Rats!</a>
				</div>
				<hr class="clearfix w-100 d-md-none pb-3">
				<div class="col-md-3 mb-md-0 mb-3">
					<h5 class="text-uppercase">Links</h5>
					<ul class="list-unstyled">
						<li>
							<a href="https://twitter.com/HullSeals" target="_blank"><img alt="Twitter" height="20" src="../images/twitter_loss.png" width="20"></a> <a href="https://reddit.com/r/HullSeals" target="_blank"><img alt="Reddit" height="20" src="../images/reddit.png" width="20"></a> <a href="https://www.youtube.com/channel/UCwKysCkGU_C6V8F2inD8wGQ" target="_blank"><img alt="Youtube" height="20" src="../images/youtube.png" width="20"></a> <a href="https://www.twitch.tv/hullseals" target="_blank"><img alt="Twitch" height="20" src="../images/twitch.png" width="20"></a> <a href="https://gitlab.com/hull-seals-cyberseals" target="_blank"><img alt="GitLab" height="20" src="../images/gitlab.png" width="20"></a>
						</li>
						<li>
							<a href="#">Donate</a>
						</li>
						<li>
							<a href="https://hullseals.space/knowledge/books/important-information/page/privacy-policy">Privacy & Cookies Policy</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
			Site content copyright © 2019, The Hull Seals. All Rights Reserved. Elite Dangerous and all related marks are trademarks of Frontier Developments Inc.
		</div>
	</footer>
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

