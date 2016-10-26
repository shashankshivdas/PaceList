
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
	<!-- Faq -->
	<div class="faq main-grid-border">
		<div class="container">
			<h2 class="head">Faqs</h2>
			<dl class="faq-list">
				<dt class="faq-list_h">
				<h4 class="marker">Q? </h4>
				<h5 class="marker_head">What is a PaceList?</h5>
				</dt>
				<dd>
				<h4 class="marker1">A.</h4>
				<p class="m_13"><br></br> A PaceList is a comprehensive solution for the students of Pace University that helps you get the best marketplace within the Pace University Campus. You get exclusive marketing and merchandising tools, plus great customization features to build a strong brand that keeps customers coming back. By showcasing all of your merchandise in one location, PaceList creates a central shopping destination where buyers can learn more about you, your products, and your policies.
				</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q? </h4>
				<h5 class="marker_head">Is PaceList right for me</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13"><br></br>PaceList is a best solution for all the Pace University students who are interested in buying and selling the items. It provides the price quote to buy and sell items so the students within the University wouldn't have to wander for finding an apartment or buying/ selling items.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q?</h4>
				<h5 class="marker_head">Why to open an account in PaceList?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13"><br></br>Opening an account in PaceList is free. One can get clear idea and larger access to the website and the search becomes much easire. It gives an account holder a wider experience to the website.</p>
				</dd>
				<dt class="faq-list_h">
				<h4 class="marker">Q? </h4>
				<h5 class="marker_head">What is the best way to promote the product for attracting more buyers?</h5>
				</dt>
				<dd>
				<h4 class="marker">A.</h4>
				<p class="m_13"><br> </br>Sellers have a variety of methods to drive traffic to their Store, including links to specific listings, links to their customized Store, and links to a customized Store category landing page. Learn strategies for how to drive traffic to your Store</p>
				</dd>
				
				
          </dl>

		</div>	
	</div>
	<!-- // Faq -->
	<!--footer section start-->
<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>