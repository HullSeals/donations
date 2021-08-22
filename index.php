<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//UserSpice Required
require_once '../../users/init.php';  //make sure this path is correct!
if (!securePage($_SERVER['PHP_SELF'])){die();}

if (isset($_GET['send']))
{
  echo "currency:";
  echo $_POST['currselect'];
  echo '<br> Amount:';
  echo $_POST['amntselect'];
  echo '<br> Other:';
  echo $_POST['other_text'];
  echo '<br> Recurring:';
  if (!isset($_POST['recurring'])) {
    echo "single";
  }
  else {
    echo $_POST['recurring'];
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="Recurring Donations to the Hull Seals" name="description">
  <title>Donate | The Hull Seals</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <?php include '../../assets/includes/headerCenter.php'; ?>
  <script src="https://js.stripe.com/v3/" integrity="sha384-kjyYhV/aySviNR/Hp59ySKU+VZfGJYfQDT/2Gv3JBSM3J0iemmgsHyT0XKNlB+NF" crossorigin="anonymous"></script>
</head>
<body>
  <div id="home">
    <?php include '../../assets/includes/menuCode.php';?>
      <section class="introduction container">
    <article id="intro3">
				<h2><em>Thank You</em> for considering donating!</h2>
				<br />
				<p>As simple as this all seems, it costs us almost $100 per month to operate our servers. Our Admins pay for this out of pocket, but any contributions help lessen the burden.</p>
				<p>Your generous donation will go toward maintenance of our servers, and expansion into bigger, and better, things in the future!</p>
				<hr>
        <div id="donationarea" style="text-align:center;background-color:#585858;border-radius: 25px; color:black;">
  				<div style="max-width:85%" class="mx-auto">
            <br>
            <form action="?send" method="post">
          <h4>Please select your currency...</h4>
          <div class="btn-group" role="group">
  <input type="radio" class="btn-check" name="currselect" id="usd" autocomplete="off" onclick="currType('$')" value="usd" checked required>
  <label class="btn btn-outline-success" for="usd">USD</label>
  <input type="radio" class="btn-check" name="currselect" id="gbp" autocomplete="off" onclick="currType('£')" value="gbp">
  <label class="btn btn-outline-success" for="gbp">GBP</label>
  <input type="radio" class="btn-check" name="currselect" id="eur" autocomplete="off" onclick="currType('€')" value="eur">
  <label class="btn btn-outline-success" for="eur">EUR</label>
  <input type="radio" class="btn-check" name="currselect" id="can" autocomplete="off" onclick="currType('C$')" value="cad">
  <label class="btn btn-outline-success" for="can">CAN</label>
  <input type="radio" class="btn-check" name="currselect" id="aud" autocomplete="off" onclick="currType('A$')" value="aud">
  <label class="btn btn-outline-success" for="aud">AUD</label>
</div>
<br />
<h4>And Amount...</h4>
<div class="btn-group" role="group" id="currgroup">
<input type="radio" class="btn-check" name="amntselect" id="1" autocomplete="off" onclick="setValue()" value="1" required>
<label class="btn btn-outline-success" for="1" id="lbl1">$1</label>
<input type="radio" class="btn-check" name="amntselect" id="5" autocomplete="off" onclick="setValue()" value="5">
<label class="btn btn-outline-success" for="5" id="lbl5">$5</label>
<input type="radio" class="btn-check" name="amntselect" id="10" autocomplete="off" onclick="setValue()" value="10">
<label class="btn btn-outline-success" for="10" id="lbl10">$10</label>
<input type="radio" class="btn-check" name="amntselect" id="20" autocomplete="off" onclick="setValue()" value="20">
<label class="btn btn-outline-success" for="20" id="lbl20">$20</label>
<input type="radio" class="btn-check" name="amntselect" id="Other" autocomplete="off" onclick="otherValue()" value="other">
<label class="btn btn-outline-success" for="Other">Other</label>
</div>
<br>
<div id = "otheramnt" style="display:none">
  <input type="number" placeholder="Other..." id="other_text" name="other_text" width="100%" min=1>
</div>
<hr>
<h5>Make this a recurring donation? (Monthly)</h5>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="recurring" name="recurring" value="sub">
  <label class="form-check-label" for="recurring">Yes! Make this a recurring donation.</label>
</div>
<br>
<button class="btn btn-success" type="submit">Donate</button>
</form>
<a href="https://stripe.com" target="_blank"><img src="stripe.svg" alt="Powered by Stripe" width="15%" style='float:right;'></a>
<br><br>
</div>
</div>
<br />
<div class="clearfix"></div>
</section>
</div>
<?php include '../../assets/includes/footer.php'; ?>
</body>
</html>
<script>
function currType(symbol) {
  document.getElementById("lbl1").innerHTML = symbol + " 1"
  document.getElementById("lbl5").innerHTML = symbol + " 5"
  document.getElementById("lbl10").innerHTML = symbol + " 10"
  document.getElementById("lbl20").innerHTML = symbol + " 20"
}
function setValue() {
  document.getElementById('otheramnt').style.display='none'
  document.getElementById('other_text').required=false
}
function otherValue() {
  document.getElementById('otheramnt').style.display='block'
  document.getElementById('other_text').required = true;
}
</script>
