
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
	<!-- Terms of use -->
	<div class="terms main-grid-border">
		<div class="container">
			<h2 class="head">Terms of Use</h2>
				<div class="panel-group" id="accordion">
				<!-- First Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseOne">
								 <span>1.</span> Introduction
							 </h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse">
							<div class="panel-body">
								<p>
Welcome to PaceList. These are the terms and conditions governing your use of the Site ("herein after referred to as Acceptable Use Policy "AUP"). By accessing Pace either through the website or any other electronic device, you acknowledge, accept and agree to the following terms of the AUP, which are designed to make sure that Quikr works for everyone. This AUP is effective from the time you log in to PaceList. By accepting this AUP, you are also accepting and agreeing to be bound by the Privacy Policy and the Listing Policy.</p>
								<p></p>
							</div>
						</div>
					</div>
					
					<!-- Second Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse"  data-target="#collapseTwo">
								<span>2.</span> Using PaceList
							 </h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse">
							<div class="panel-body">								
								<p>1. Using PaceList.
You agree and understand that PaceList is an internet enabled electronic platform that facilitates communication for the purposes of advertising and distributing information pertaining to goods and/ or services. You further agree and understand that we do not endorse, market or promote any of the listings, postings or information, nor do we at any point in time come into possession of or engage in the distribution of any of the goods and/ or services, you have posted, listed or provided information about on our site. While interacting with other users on our site, with respect to any listing, posting or information we strongly encourage you to exercise reasonable diligence as you would in traditional off line channels and practice judgment and common sense before committing to or complete intended sale, purchase of any goods or services or exchange of information. We recommend that you read our Safety tips before doing any activity on our site.</p>
							</div>
						</div>
					</div>
					
					<!-- Third Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseThree">
								<span>3.</span> Eligibility
							 </h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse">
							<div class="panel-body">
								<p>Use of PaceList,either by registration or by any other means, is available only to persons, who are Citizens of the United States, who are 18 yrs of age and above and persons who can enter into a legally binding contract, and or are not barred by any law for the time being in force. If you access Quikr, either by registration on the Site or by any other means, not as an individual but on behalf of a legal entity, you represent that you are fully authorized to do so and the listing, posting or information placed on the site on behalf of the legal entity is your responsibility and you agree to be accountable for the same to other users of the Site.</p>
							</div>
						</div>
					</div>
					<!-- Fourth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFour">
								<span>4.</span> Abuse of PaceList
							 </h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse">
							<div class="panel-body">
								<p>You agree to inform us if you come across any listing or posting that is offensive or violates our listing policy or infringes any intellectual property rights by clicking on the following link support@quikr.com to enable us to keep the site working efficiently and in a safe manner. We reserve the right to take down any posting, listing or information and or limit or terminate our services and further take all reasonable technical and legal steps to prevent the misuse of the Site in keeping with the letter and spirit of this AUP and the listing policy. </p>
							</div>
						</div>
					</div>
					<!-- Fifth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseFive">
								<span>5.</span> Violations by user
							 </h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse">
							<div class="panel-body">
								<p>You agree that in the event your listing, posting or your information violates any provision of this AUP or the listing policy, we shall have the right to terminate and or suspend your membership of the Site and refuse to provide you or any person acting on your behalf, access to the Site.</p>
							</div>
						</div>
					</div>
					<!-- Sixth Panel -->
					<div class="panel panel-default">
						<div class="panel-heading">
							 <h4 class="panel-title" data-toggle="collapse" data-target="#collapseSix">
								<span>6.</span> Content
							 </h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse">
							<div class="panel-body">
								<p>The Site contains content which includes Your Information, PaceList's information and information from other users. You agree not to copy, modify, or distribute such content (other than Your Information), PaceList's copyrights or trademarks. When you give us any content as part of Your Information, you are granting us a non-exclusive, worldwide, perpetual, irrevocable, royalty-free, sub-licensable right and license to use, reproduce, , publish, translate, distribute, perform and display such content (in whole or part) worldwide through the Site as well as on any of our affiliates or partners websites, publications and mobile platform. We need these rights with respect to the content in Your Information in order to host and display your content.</p>
							</div>
						</div>
					</div>
					<!-- Seventh Panel -->
					
						
				</div>
		</div>	
	</div>
	<!-- // Terms of use -->
	<!--footer section start-->
<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>