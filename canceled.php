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
    <meta content="Donate to The Hull Seals" name="description">
    <title>Canceled Donation | The Hull Seals</title>
    <?php include '../assets/includes/headerCenter.php'; ?>

</head>
<body>
    <div id="home">
      <?php include '../assets/includes/menuCode.php';?>
        <section class="introduction container">
	    <article id="intro3">
        <h1>Transaction Cancelled.</h1>
        <h5 class="text-danger">Your donation has been canceled.<br /><br /> You may now close the tab.<br /><br /> Your card has not been charged.</h5>
			</article>
			<div class="clearfix"></div>
	</section>
</div>
<?php include '../assets/includes/footer.php'; ?>
</body>
</html>
