<?php require_once('./config.php'); ?>
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="../styles.css" rel="stylesheet" type="text/css">
	<link href="donate.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="home">
        <header>
            <nav class="navbar container navbar-expand-lg navbar-expand-md navbar-dark" role="navigation">
                <a class="navbar-brand" href="../index.html"><img src="../images/emblem.png" height="30" class="d-inline-block align-top" alt="Logo"> Hull Seals</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="../index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../knowledge">Knowledge Base</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Chat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://forums.frontier.co.uk/showthread.php/452349-DW2-Fleet-Mechanics">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://inara.cz/squadron/5050/">Inara Squadron</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <section class="introduction">
            <article>
                <p>
                <h1><em>Thank You</em> for considering donating to the Hull Seals.</h1>
                </p>
				<p>
					Although our work may seem simple, there a lot of services at work allowing us to continue our work and help you. While we have Seals who generously front the costs, contributions can allow us to expand our services and improve your experience with us.
				</p>
			</article>
			</section>
<div class="clearfix"></div>

	<section class="donations">
		<article>
		<div style="text-align: center;">
			<div class="flex-box">
				<h2>Please type in the amount you'd like to donate.</h2>
	  <p>We thank you for your generous donation. It is only through the generous support of CMDRs like you that we are able to provide services galaxy-wide. After donating, you will receive an email confirming the donation. If you do not, please <a href="mailto:finance@hullseals.space?Subject=Donation%20issues" target="_top">Contact Us.</a> </p>
 <form action="charge.php" method="POST" id="custom_amount_form">
	    <input class="custom_amount" onkeyup="custom_amount_calculate();" placeholder="$ Custom amount" type="number" name="custom_amount" />
	    <input id="custom_amount_value" type="hidden" name="amount" />
      <input type="hidden" name="currency" value="USD" />
	    <script
	      src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	      data-key="pk_live_KiZ55OXEwCXcsyvKRoszm0mw00AJM6XE4j"
	      data-name="The Hull Seals"
	      data-description="Donation Amount"
	      data-image="https://hullseals.space/images/emblem.png"
	      data-locale="auto"
	      data-currency="usd">
	    </script>
		</div>
</div>
    <script type="text/javascript">
function custom_amount() {

  var custom_form = document.getElementById('custom_amount_form');
  var stripe_button = document.querySelector('#custom_amount_form button');
  var stripe_script = document.querySelector('#custom_amount_form script');
  custom_form.removeChild(stripe_button);
  custom_form.removeChild(stripe_script);

  var amount_box = document.querySelector('.custom_amount');
  var amount = amount_box.value;
  var amount_value = document.getElementById('custom_amount_value');
  amount_value.value = amount * 100;

  var sca = document.createElement('script');
  sca.src = 'https://checkout.stripe.com/checkout.js';
  sca.className = 'stripe-button';
  sca.dataset.key = 'pk_live_KiZ55OXEwCXcsyvKRoszm0mw00AJM6XE4j';
  sca.dataset.name = 'The Hull Seals';
  sca.dataset.image = 'https://hullseals.space/images/emblem.png';
  sca.dataset.locale = 'auto';
  sca.dataset.currency = 'usd';
  sca.dataset.amount = amount * 100;
  sca.dataset.description = '$' + amount + ' Donation';

  amount_box.parentNode.insertBefore(sca, amount_box.nextSibling);
}

function custom_amount_calculate() {
  custom_amount();
}
</script>		</article>
</script>		</article>
        </section>
    </div>
<footer class="page-footer font-small">
        <div class="container">
            <div class="row">
                <div class="col-md-9 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Hull Seals</h5>
                    <p><em>The Hull Seals</em> were established in January of 3305 as the premier Hull Repair organization in Elite: Dangerous.</p>
                </div>
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>

                    <ul class="list-unstyled">
                        <li><a href="https://twitter.com/HullSeals"><img alt="Twitter" height="20" src="../images/twitter.png" width="20"> Twitter</a></li>
						<li><a href="#">Donate</a></li>
                        <li><a href="https://hullseals.space/knowledge/books/important-information/page/privacy-policy">Privacy & Cookies Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            Site content copyright © 2019, The Hull Seals. All Rights Reserved. Elite Dangerous and all related marks are trademarks of Frontier Developments Inc.
        </div>
    </footer>
</body>

</html>
