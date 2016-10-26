
<!DOCTYPE html>
<html>
<head>
	<title>Buy|Sell|Rent - Pace List</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //for-mobile-apps -->
	<!--fonts-->
	<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!--//fonts-->
	<!-- js -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<!-- js -->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-select.js"></script>
	<script>
		$(document).ready(function () {
			var mySelect = $('#first-disabled2');

			$('#special').on('click', function () {
				mySelect.find('option:selected').prop('disabled', true);
				mySelect.selectpicker('refresh');
			});

			$('#special2').on('click', function () {
				mySelect.find('option:disabled').prop('disabled', false);
				mySelect.selectpicker('refresh');
			});

			$('#basic2').selectpicker({
				liveSearch: true,
				maxOptions: 1
			});
		});
	</script>
	<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
	<link href="css/jquery.uls.css" rel="stylesheet"/>
	<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
	<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
	<!-- Source -->
	<script src="js/jquery.uls.data.js"></script>
	<script src="js/jquery.uls.data.utils.js"></script>
	<script src="js/jquery.uls.lcd.js"></script>
	<script src="js/jquery.uls.languagefilter.js"></script>
	<script src="js/jquery.uls.regionfilter.js"></script>
	<script src="js/jquery.uls.core.js"></script>
	<script>
		$( document ).ready( function() {
			$( '.uls-trigger' ).uls( {
				onSelect : function( language ) {
					var languageName = $.uls.data.getAutonym( language );
					$( '.uls-trigger' ).text( languageName );
				},
				quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
			} );
		} );
	</script>
	<link rel="stylesheet" href="css/flexslider.css" media="screen" />
</head>
<body>
<?php
require_once("header.php");
require_once("config.php");

$adId = $_GET["adId"];
$adDetails= getAllAdId($adId);

?>
<div class="banner text-center">
	<div class="container">
		<h1>Sell or Buy   <span class="segment-heading">    anything online </span> with PaceList</h1>
		<p>Developed for the convenience of Pace University Students</p>
		<a href="post-ad.php">Post Free Ad</a>
	</div>
</div>
<!--single-page-->
<div class="single-page main-grid-border">
	<div class="container">

		<div class="product-desc">
			<div class="col-md-7 product-view">
				<h2><?php echo $adDetails[0]['AdTitle']; ?></h2>

				<div class="flexslider">
					<ul class="slides">

							<?php
								foreach ($adDetails as $adDetail) {
									echo "<li data-thumb=\"FileUploads/".$adDetail['NewFileName']."\">
								<img src=\"FileUploads/".$adDetail['NewFileName']."\" />
							</li>";
								}
							?>

					</ul>
				</div>
				<!-- FlexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

				<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						});
					});
				</script>
				<!-- //FlexSlider -->
				<div class="product-details">
					<h4>Views : <strong>
							<?php
							session_start();
							$counter_name = "counter.txt";
							// Check if a text file exists. If not create one and initialize it to zero.
							if (!file_exists($counter_name)) {
								$f = fopen($counter_name, "w");
								fwrite($f,"0");
								fclose($f);
							}
							// Read the current value of our counter file
							$f = fopen($counter_name,"r");
							$counterVal = fread($f, filesize($counter_name));
							fclose($f);
							// Has visitor been counted in this session?
							// If not, increase counter value by one
							if(!isset($_SESSION['hasVisited'])){
								$_SESSION['hasVisited']="yes";
								$counterVal++;
								$f = fopen($counter_name, "w");
								fwrite($f, $counterVal);
								fclose($f);
							}
							echo  $counterVal;
							?>

						</strong></h4>
					<p><strong>Summary</strong> : <?php echo $adDetails[0]['AdDescription']; ?></p>

				</div>
			</div>
			<div class="col-md-5 product-details-grid">
				<div class="item-price">
					<div class="product-price">
						<p class="p-price">Price</p>
						<h3 class="rate"><?php if ($adDetails[0]['Price'] == "") {echo "NA";} else {echo "$ ".$adDetails[0]['Price'];} ?></h3>
						<div class="clearfix"></div>
					</div>

					<div class="itemtype">
						<p class="p-price">Item Type</p>
						<h4><?php echo $adDetails[0]['Category'];?></h4>
						<div class="clearfix"></div>
					</div>
					<div class="itemtype">
						<p class="p-price">Item Sub-type</p>
						<h4><?php echo $adDetails[0]['SubCategory'];?></h4>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="interested text-center">
					<h4>Interested in this Ad?<small> Contact the Seller!</small></h4>
					<p><i class="glyphicon glyphicon-earphone"></i><?php echo $adDetails[0]['ContactNo']; ?></p>
				</div>
				<div class="tips">
					<h4>Safety Tips for Buyers</h4>
					<ol>
						<li>Try to take the full payment at the time of the delivery. Remember to use a safe location to meet.</li>
						<li>Verify the buyer’s credentials if there is a request for a bulk order.</li>
						<li>Never send or wire money to sellers or buyers. </li>
						<li>Be wary of Users with no reliable contact information</li>
						<li>If something sounds too good to be true, it probably is not.</li>
						<li>Protect personal information</li>

					</ol>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--//single-page-->
<!--footer section start-->

<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>