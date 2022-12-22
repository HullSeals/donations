  <?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  //Declare Title, Content, Author
  $pgAuthor = "David Sangrey";
  $pgContent = "Donate to The Hull Seals";
  $useIP = 0; //1 if Yes, 0 if No.

  //Any custom CSS that must come BEFORE the normal CSS. Rare, but it happens.
  $preContent = '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>';

  //If you have any custom scripts, CSS, etc, you MUST declare them here.
  //They will be inserted at the bottom of the <head> section.
  $customContent = '<script src="https://js.stripe.com/v3/" integrity="sha384-IcJobwtpOJ5MQNlv9U1XTLcQQ4bsN6bPddO3yqGDCDihih0yv81OVhEXYylml8GX" crossorigin="anonymous"></script>';

  //UserSpice Required
  require_once '../users/init.php';  //make sure this path is correct!
  require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';
  if (!securePage($_SERVER['PHP_SELF'])) {
    die();
  }
  ?>
  <h2><em>Thank You</em> for considering donating!</h2>
  <br />
  <p>As simple as this all seems, it costs us almost $100 per month to operate our servers. Our Admins pay for this out of pocket, but any contributions help lessen the burden.</p>
  <p>Your generous donation will go toward maintenance of our servers, and expansion into bigger, and better, things in the future!</p>
  <hr>
  <div id="donationarea">
    <div style="max-width:65%;text-align:center;" class="mx-auto">
      <br>
      <form action="processing.php" method="post">
        <h4>Please select your currency...</h4>
        <div class="btn-group" role="group">
          <input type="radio" class="btn-check" name="currselect" id="usd" autocomplete="off" onclick="currType('$')" value="usd" checked required>
          <label class="btn btn-outline-light" for="usd">USD</label>
          <input type="radio" class="btn-check" name="currselect" id="gbp" autocomplete="off" onclick="currType('£')" value="gbp">
          <label class="btn btn-outline-light" for="gbp">GBP</label>
          <input type="radio" class="btn-check" name="currselect" id="eur" autocomplete="off" onclick="currType('€')" value="eur">
          <label class="btn btn-outline-light" for="eur">EUR</label>
          <input type="radio" class="btn-check" name="currselect" id="can" autocomplete="off" onclick="currType('C$')" value="cad">
          <label class="btn btn-outline-light" for="can">CAN</label>
          <input type="radio" class="btn-check" name="currselect" id="aud" autocomplete="off" onclick="currType('A$')" value="aud">
          <label class="btn btn-outline-light" for="aud">AUD</label>
        </div>
        <br />
        <h4>...and Amount...</h4>
        <div class="btn-group" role="group" id="currgroup">
          <input type="radio" class="btn-check" name="amntselect" id="1" autocomplete="off" onclick="setValue()" value="1" required>
          <label class="btn btn-outline-light" for="1" id="lbl1">$1</label>
          <input type="radio" class="btn-check" name="amntselect" id="5" autocomplete="off" onclick="setValue()" value="5">
          <label class="btn btn-outline-light" for="5" id="lbl5">$5</label>
          <input type="radio" class="btn-check" name="amntselect" id="10" autocomplete="off" onclick="setValue()" value="10">
          <label class="btn btn-outline-light" for="10" id="lbl10">$10</label>
          <input type="radio" class="btn-check" name="amntselect" id="20" autocomplete="off" onclick="setValue()" value="20">
          <label class="btn btn-outline-light" for="20" id="lbl20">$20</label>
          <input type="radio" class="btn-check" name="amntselect" id="Other" autocomplete="off" onclick="otherValue()" value="other">
          <label class="btn btn-outline-light" for="Other">Other</label>
        </div>
        <br>
        <div id="otheramnt" style="display:none">
          <input type="number" placeholder="Other..." id="other_text" name="other_text" width="100%" min=1 pattern="[0-9.]">
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
      <sub style="float:left">Questions? Email us at finance@hullseals.space</sub>
      <br><br>
    </div>
  </div>
  <br />
  <script>
    function currType(symbol) {
      document.getElementById("lbl1").innerHTML = symbol + "1"
      document.getElementById("lbl5").innerHTML = symbol + "5"
      document.getElementById("lbl10").innerHTML = symbol + "10"
      document.getElementById("lbl20").innerHTML = symbol + "20"
    }

    function setValue() {
      document.getElementById('otheramnt').style.display = 'none'
      document.getElementById('other_text').required = false
    }

    function otherValue() {
      document.getElementById('otheramnt').style.display = 'block'
      document.getElementById('other_text').required = true;
    }
  </script>
  <?php require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php'; ?>