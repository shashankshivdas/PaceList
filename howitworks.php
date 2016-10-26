
<!DOCTYPE html>
<html>
<head>
<title>Buy|Sell|Rent - Pace List</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/font-awesome.min.css" />
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
		<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
    <script src="js/easyResponsiveTabs.js"></script>
</head>
<body>
<?php
require_once("header.php");
?>
<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Buy   <span class="segment-heading">    anything online </span> with PaceList</h1>
			<p>Developed for the convenience of Pace University Students</p>
			<a href="post-ad.php">Post Free Ad</a>
	  </div>
	</div>
	<!-- How it works -->
		<div class="work-section">
			<div class="container">
				<h2 class="head">How It Works</h2>
					<div class="work-section-head text-center">
						<p>Fast, easy and free to post an ad and you will find, what you are looking for.</p>
					</div>
					<div class="work-section-grids text-center">
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-pencil-square-o"></i>
							<h4>Post an Ad</h4>
							<span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-eye"></i>
							<h4>Find an item</h4>
							<span class="arrow2"><img src="images/arrow2.png" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-phone"></i>
							<h4>contact the seller</h4>
							<span class="arrow1"><img src="images/arrow1.png" alt="" /></span>
						</div>
						<div class="col-md-3 work-section-grid">
							<i class="fa fa-money"></i>
							<h4>make transactions</h4>
						</div>
					</div>
				<div class="clearfix"></div>
				<div class="new_people">
				<a class="work" href="register.php">Get started Now</a>
				</div>
				</div>
		</div>	

	<!-- // How it works -->
	<!--footer section start-->
<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>