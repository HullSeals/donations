<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Declare Title, Content, Author
$pgAuthor = "David Sangrey";
$pgContent = "Successful Donation";
$useIP = 0; //1 if Yes, 0 if No.

//UserSpice Required
require_once '../users/init.php';  //make sure this path is correct!
require_once $abs_us_root . $us_url_root . 'users/includes/template/prep.php';
if (!securePage($_SERVER['PHP_SELF'])) {
  die();
}
?>
<h1>Donation Successful!</h1>
<h5 class="text-success">Thank you for generous donation, CMDR!<br /><br /> You may now close the tab.<br /><br /> If you do not receive a confirmation email soon, please contact us.</h5>
<?php
require_once $abs_us_root . $us_url_root . 'users/includes/html_footer.php';
?>