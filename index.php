<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//UserSpice Required
require_once '../../users/init.php';  //make sure this path is correct!
if (!securePage($_SERVER['PHP_SELF'])){die();}?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <?php include '../../assets/includes/headerCenter.php'; ?>
  <script src="https://js.stripe.com/v3/"></script>
</head>
<body>
    <div id="home">
        <section class="introduction container">
	    <article id="intro3">
				<p></p>
				<h1><em>Thank You</em> for considering donating!</h1>
				<br />
				<p>As simple as this all seems, it costs us almost $100 per month to operate our servers. Our Admins pay for this out of pocket, but any contributions help lessen the burden.</p>
				<p>Your generous donation will go toward maintenance of our servers, and expansion into bigger, and better, things in the future!</p>
				<hr>
        <div id="donationarea">
				<div style="max-width:85%" class="mx-auto">
          <h3>Please select your currency...</h3>
          <div class="btn-group" role="group">
  <input type="radio" class="btn-check" name="btnradio" id="usd" autocomplete="off" checked onclick="strReplace();">
  <label class="btn btn-outline-success" for="usd">USD</label>
  <input type="radio" class="btn-check" name="btnradio" id="gbp" autocomplete="off" onclick="strReplace();">
  <label class="btn btn-outline-success" for="gbp">GBP</label>
  <input type="radio" class="btn-check" name="btnradio" id="eur" autocomplete="off" onclick="strReplace();">
  <label class="btn btn-outline-success" for="eur">EUR</label>
  <input type="radio" class="btn-check" name="btnradio" id="can" autocomplete="off" onclick="strReplace();">
  <label class="btn btn-outline-success" for="can">CAN</label>
  <input type="radio" class="btn-check" name="btnradio" id="aud" autocomplete="off" onclick="strReplace();">
  <label class="btn btn-outline-success" for="aud">AUD</label>
</div>
<br /><br />
<h3>And Amount...</h3>
<div class="btn-group" role="group">
<input type="radio" class="btn-check" name="btnradio" id="1" autocomplete="off" checked onclick="document.getElementById('otheramnt').style.display='none'">
<label class="btn btn-outline-success" for="1">$1</label>
<input type="radio" class="btn-check" name="btnradio" id="5" autocomplete="off" onclick="document.getElementById('otheramnt').style.display='none'">
<label class="btn btn-outline-success" for="5">$5</label>
<input type="radio" class="btn-check" name="btnradio" id="10" autocomplete="off" onclick="document.getElementById('otheramnt').style.display='none'">
<label class="btn btn-outline-success" for="10">$10</label>
<input type="radio" class="btn-check" name="btnradio" id="20" autocomplete="off" onclick="document.getElementById('otheramnt').style.display='none'">
<label class="btn btn-outline-success" for="20">$20</label>
<input type="radio" class="btn-check" name="btnradio" id="Other" autocomplete="off" onclick="document.getElementById('otheramnt').style.display='block'">
<label class="btn btn-outline-success" for="Other">Other</label>
</div>
<br><br>
<div id = "otheramnt" style="display:none">
  <input type="number" placeholder="Other..." id="other_text" width="100%" min=1>
</div>
<h3>Make this a recurring donation? (Monthly)</h3>
<div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="recurring">
  <label class="form-check-label" for="recurring">Yes! Make this a recurring donation.</label>
</div></div>
</div>
<br />
</body>
</html>
