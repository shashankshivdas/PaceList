
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
	<!-- Popular-search -->
	<div class="popular-search main-grid-border">
		<div class="container">
			<h2 class="head">Most popular search phrases</h2>
				<div class="tags">
					<p>
					<a class="tag1" href="productpage.php">  Pace University</a>
					<a class="tag2" href="productpage.php">Seidenberg</a>
					<a class="tag3" href="productpage.php">Furniture</a>
					<a class="tag4" href="productpage.php">Journal square</a>
					<a class="tag5" href="productpage.php">Brooklyn</a>
					<a class="tag6" href="productpage.php">Queens</a>
					<a class="tag7" href="productpage.php">Lubin</a><br></br>
					<a class="tag8" href="productpage.php">Barter</a>
					<a class="tag9" href="productpage.php">Vehicle</a>
					<a class="tag10" href="productpage.php">2bhk on Lease</a>
					<a class="tag11" href="productpage.php">Short term</a>
					<a class="tag12" href="productpage.php">Laptops on rent</a>
					<a class="tag13" href="productpage.php">On sale</a>
					<a class="tag14" href="productpage.php">Television</a>
					<a class="tag15" href="productpage.php">On rent</a><br></br>
					<a class="tag16" href="productpage.php"> Sofa</a>
					<a class="tag17" href="productpage.php">Roommates</a>
					<a class="tag18" href="productpage.php">3bhk on rent</a>
					<a class="tag19" href="productpage.php">Immediate opening</a>
					<a class="tag20" href="productpage.php">Mobile</a>
					</p>
				</div>
		</div>
		<div class="popular-regions">
			<div class="container">
				<h4>Regions</h4>
				<ul>
					<li><a href="regions.php">Alabama</a></li>
					<li><a href="regions.php">Alaska</a></li>
					<li><a href="regions.php">Arizona</a></li>
					<li><a href="regions.php">Arkansas</a></li>
					<li><a href="regions.php">California</a></li>
					<li><a href="regions.php">Colorado</a></li>
					<li><a href="regions.php">Connecticut</a></li>
					<li><a href="regions.php">Delaware</a></li>
					<li><a href="regions.php">Florida</a></li>
					<li><a href="regions.php">Georgia</a></li>
					<li><a href="regions.php">Hawaii</a></li>
					<li><a href="regions.php">Idaho</a></li>
					<li><a href="regions.php">Illinois</a></li>
					<li><a href="regions.php">Indiana</a></li>
					<li><a href="regions.php">Iowa</a></li>
					<li><a href="regions.php">Kansas</a></li>
					<li><a href="regions.php">Kentucky</a></li>
					<li><a href="regions.php">Louisiana</a></li>
					<li><a href="regions.php">Maine</a></li>
					<li><a href="regions.php">Maryland</a></li>
					<li><a href="regions.php">Massachusetts</a></li>
					<li><a href="regions.php">Michigan</a></li>
					<li><a href="regions.php">Minnesota</a></li>
					<li><a href="regions.php">Mississippi</a></li>
					<li><a href="regions.php">Missouri</a></li>
					<li><a href="regions.php">Montana</a></li>
					<li><a href="regions.php">Nebraska</a></li>
					<li><a href="regions.php">Nevada</a></li>
					<li><a href="regions.php">New Hampshire</a></li>
					<li><a href="regions.php">New Jersey</a></li>
					<li><a href="regions.php#">New Mexico</a></li>
					<li><a href="regions.php">New York</a></li>
					<li><a href="regions.php">North Carolina</a></li>
					<li><a href="regions.php">North Dakota</a></li>
					<li><a href="regions.php">Ohio</a></li>
					<li><a href="regions.php">Oklahoma</a></li>
					<li><a href="regions.php">Oregon</a></li>
					<li><a href="regions.php">Pennsylvania</a></li>
					<li><a href="regions.php">Rhode Island</a></li>
					<li><a href="regions.php">South Carolina</a></li>
					<li><a href="regions.php">South Dakota</a></li>
					<li><a href="regions.php">Tennessee</a></li>
					<li><a href="regions.php">Texas</a></li>
					<li><a href="regions.php">Utah</a></li>
					<li><a href="regions.php">Vermont</a></li>
					<li><a href="regions.php">Virginia</a></li>
					<li><a href="regions.php">Washington</a></li>
					<li><a href="regions.php">West Virginia</a></li>
					<li><a href="regions.php">Wisconsin</a></li>
					<li><a href="regions.php">Wyoming</a></li>
					<div class="clearfix"></div>
				</ul>
				<h4 class="mpcwc">Most popular cities in whole country</h4>
				<ul>
					<li><a href="all-classifieds.php">Birmingham</a></li>
					<li><a href="all-classifieds.php">Anchorage</a></li>
					<li><a href="all-classifieds.php">Phoenix</a></li>
					<li><a href="all-classifieds.php">Little Rock</a></li>
					<li><a href="all-classifieds.php">Los Angeles</a></li>
					<li><a href="all-classifieds.php">Denver</a></li>
					<li><a href="all-classifieds.php">Bridgeport</a></li>
					<li><a href="all-classifieds.php">Wilmington</a></li>
					<li><a href="all-classifieds.php">Jacksonville</a></li>
					<li><a href="all-classifieds.php">Atlanta</a></li>
					<li><a href="all-classifieds.php">Honolulu</a></li>
					<li><a href="all-classifieds.php">Boise</a></li>
					<li><a href="all-classifieds.php">Chicago</a></li>
					<li><a href="all-classifieds.php">Indianapolis</a></li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>
		<div class="popular-categories">
			<div class="container">
				<div class="popular-category">
					<h4>Mobiles</h4>
					<ul>
						<li><a href="mobiles.php">Iphone</a></li>
						<li><a href="mobiles.php">Samsung</a></li>
						<li><a href="mobiles.php">Iphone 6</a></li>
						<li><a href="mobiles.php">Iphone 5s</a></li>
						<li><a href="mobiles.php">Exchange</a></li>
						<li><a href="mobiles.php">Nokia</a></li>
						<li><a href="mobiles.php">Sony</a></li>
						<li><a href="mobiles.php">Htc</a></li>
						<li><a href="mobiles.php">I phone</a></li>
						<li><a href="mobiles.php">Iphone 5</a></li>
						<li><a href="mobiles.php">Blackberry</a></li>
						<li><a href="mobiles.php">Cdma</a></li>
						<li><a href="mobiles.php">Micromax</a></li>
						<li><a href="mobiles.php">Iphone 4s</a></li>
						<li><a href="mobiles.php">Lenovo</a></li>
						<li><a href="mobiles.php">Apple</a></li>
						<li><a href="mobiles.php">Mi</a></li>
						<li><a href="mobiles.php">I phone 6</a></li>
						<li><a href="mobiles.php">I phone 5s</a></li>
						<li><a href="mobiles.php">Moto</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Electronics & Appliances</h4>
					<ul>
						<li><a href="electronics-appliances.php">Laptop</a></li>
						<li><a href="electronics-appliances.php">Dj</a></li>
						<li><a href="electronics-appliances.php">Tv</a></li>
						<li><a href="electronics-appliances.php">Projector</a></li>
						<li><a href="electronics-appliances.php">Led tv</a></li>
						<li><a href="electronics-appliances.php">Speakers</a></li>
						<li><a href="electronics-appliances.php">Home theater</a></li>
						<li><a href="electronics-appliances.php">Laptops</a></li>
						<li><a href="electronics-appliances.php">Printer</a></li>
						<li><a href="electronics-appliances.php">Speaker</a></li>
						<li><a href="electronics-appliances.php">Led</a></li>
						<li><a href="electronics-appliances.php">Amplifier</a></li>
						<li><a href="electronics-appliances.php">Generator</a></li>
						<li><a href="electronics-appliances.php">Music system</a></li>
						<li><a href="electronics-appliances.php">Washing machine</a></li>
						<li><a href="electronics-appliances.php">Camera</a></li>
						<li><a href="electronics-appliances.php">Sony</a></li>
						<li><a href="electronics-appliances.php">Fridge</a></li>
						<li><a href="electronics-appliances.php">Cpu</a></li>
						<li><a href="electronics-appliances.php">Ac</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Cars</h4>
					<ul>
						<li><a href="vehicles.php">Innova</a></li>
						<li><a href="vehicles.php">Scorpio</a></li>
						<li><a href="vehicles.php">Jeep</a></li>
						<li><a href="vehicles.php">Alto</a></li>
						<li><a href="vehicles.php">Maruti 800</a></li>
						<li><a href="vehicles.php">Bolero</a></li>
						<li><a href="vehicles.php">Zen</a></li>
						<li><a href="vehicles.php">Honda city</a></li>
						<li><a href="vehicles.php">Delhi</a></li>
						<li><a href="vehicles.php">Omni</a></li>
						<li><a href="vehicles.php">Tavera</a></li>
						<li><a href="vehicles.php">Indica</a></li>
						<li><a href="vehicles.php">Santro</a></li>
						<li><a href="vehicles.php">Bmw</a></li>
						<li><a href="vehicles.php">Mumbai</a></li>
						<li><a href="vehicles.php">Tata sumo</a></li>
						<li><a href="vehicles.php">Kerala</a></li>
						<li><a href="vehicles.php">Swift vdi</a></li>
						<li><a href="vehicles.php">Fortuner</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Bikes</h4>
					<ul>
						<li><a href="bikes.php">Bullet</a></li>
						<li><a href="bikes.php">Royal enfield</a></li>
						<li><a href="bikes.php">R15</a></li>
						<li><a href="bikes.php">Fz</a></li>
						<li><a href="bikes.php">Activa</a></li>
						<li><a href="bikes.php">Pulsar</a></li>
						<li><a href="bikes.php">Yamaha</a></li>
						<li><a href="bikes.php">Mumbai</a></li>
						<li><a href="bikes.php">Ktm</a></li>
						<li><a href="bikes.php">Pulsar 220</a></li>
						<li><a href="bikes.php">Bangalore</a></li>
						<li><a href="bikes.php">Rx</a></li>
						<li><a href="bikes.php">Pune</a></li>
						<li><a href="bikes.php">Apache</a></li>
						<li><a href="bikes.php">Harley davidson</a></li>
						<li><a href="bikes.php">Delhi</a></li>
						<li><a href="bikes.php">Kolkata</a></li>
						<li><a href="bikes.php">Hyderabad</a></li>
						<li><a href="bikes.php">Karizma</a></li>
						<li><a href="bikes.php">Unicorn</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Furniture</h4>
					<ul>
						<li><a href="furnitures.php">Sofa</a></li>
						<li><a href="furnitures.php">Bed</a></li>
						<li><a href="furnitures.php">Dining table</a></li>
						<li><a href="furnitures.php">Sofa set</a></li>
						<li><a href="furnitures.php">Almirah</a></li>
						<li><a href="furnitures.php">Table</a></li>
						<li><a href="furnitures.php">Sofa cum bed</a></li>
						<li><a href="furnitures.php">Chair</a></li>
						<li><a href="furnitures.php">Double bed</a></li>
						<li><a href="furnitures.php">Computer table</a></li>
						<li><a href="furnitures.php">Antique</a></li>
						<li><a href="furnitures.php">Chairs</a></li>
						<li><a href="furnitures.php">Study table</a></li>
						<li><a href="furnitures.php">Office table</a></li>
						<li><a href="furnitures.php">Dressing table</a></li>
						<li><a href="furnitures.php">Tv stand</a></li>
						<li><a href="furnitures.php">Mumbai</a></li>
						<li><a href="furnitures.php">Wardrobe</a></li>
						<li><a href="furnitures.php">Cupboard</a></li>
						<li><a href="furnitures.php">Pune</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Pets</h4>
					<ul>
						<li><a href="pets.php">Cow</a></li>
						<li><a href="pets.php">Cows</a></li>
						<li><a href="pets.php">Goat</a></li>
						<li><a href="pets.php">Cat</a></li>
						<li><a href="pets.php">Aseel</a></li>
						<li><a href="pets.php">Horse</a></li>
						<li><a href="pets.php">Pigeons</a></li>
						<li><a href="pets.php">Pigeon</a></li>
						<li><a href="pets.php">Goats</a></li>
						<li><a href="pets.php">Cats</a></li>
						<li><a href="pets.php">Birds</a></li>
						<li><a href="pets.php">Rottweiler</a></li>
						<li><a href="pets.php">Rabbit</a></li>
						<li><a href="pets.php">Pug</a></li>
						<li><a href="pets.php">Pitbull</a></li>
						<li><a href="pets.php">German shepherd</a></li>
						<li><a href="pets.php">Buffalo</a></li>
						<li><a href="pets.php">Labrador</a></li>
						<li><a href="pets.php">Dog</a></li>
						<li><a href="pets.php">Hens</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Books, Sports & Hobbies</h4>
					<ul>
						<li><a href="books-sports-hobbies.php">Coin</a></li>
						<li><a href="books-sports-hobbies.php">Books</a></li>
						<li><a href="books-sports-hobbies.php">Bat</a></li>
						<li><a href="books-sports-hobbies.php">Football</a></li>
						<li><a href="books-sports-hobbies.php">Treadmill</a></li>
						<li><a href="books-sports-hobbies.php">Guitar</a></li>
						<li><a href="books-sports-hobbies.php">Coins</a></li>
						<li><a href="books-sports-hobbies.php">Moradabad</a></li>
						<li><a href="books-sports-hobbies.php">Cycle</a></li>
						<li><a href="books-sports-hobbies.php">Antique</a></li>
						<li><a href="books-sports-hobbies.php">Gym</a></li>
						<li><a href="books-sports-hobbies.php">Carrom board</a></li>
						<li><a href="books-sports-hobbies.php">Book</a></li>
						<li><a href="books-sports-hobbies.php">Shoes</a></li>
						<li><a href="books-sports-hobbies.php">Cricket bat</a></li>
						<li><a href="books-sports-hobbies.php">Sport</a></li>
						<li><a href="books-sports-hobbies.php">East india</a></li>
						<li><a href="books-sports-hobbies.php">Skates</a></li>
						<li><a href="books-sports-hobbies.php">Cricket bats</a></li>
						<li><a href="books-sports-hobbies.php">Sports</a></li>
					</ul>
				</div>	
				<div class="popular-category">
					<h4>Fashion</h4>
					<ul>
						<li><a href="fashion.php">Watch</a></li>
						<li><a href="fashion.php">Watches</a></li>
						<li><a href="fashion.php">Mumbai</a></li>
						<li><a href="fashion.php">Shoes</a></li>
						<li><a href="fashion.php">Jewellery</a></li>
						<li><a href="fashion.php">Bag</a></li>
						<li><a href="fashion.php">Saree</a></li>
						<li><a href="fashion.php">Jacket</a></li>
						<li><a href="fashion.php">Hyderabad</a></li>
						<li><a href="fashion.php">Kolkata</a></li>
						<li><a href="fashion.php">Kerala</a></li>
						<li><a href="fashion.php">Delhi</a></li>
						<li><a href="fashion.php">Bra</a></li>
						<li><a href="fashion.php">Bags</a></li>
						<li><a href="fashion.php">Ahmedabad</a></li>
						<li><a href="fashion.php">Bangalore</a></li>
						<li><a href="fashion.php">Sarees</a></li>
						<li><a href="fashion.php">Sunglasses</a></li>
						<li><a href="fashion.php">Gold</a></li>
						<li><a href="fashion.php">Nike</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Kids</h4>
					<ul>
						<li><a href="kids.php">Car</a></li>
						<li><a href="kids.php">Cycle</a></li>
						<li><a href="kids.php">Mumbai</a></li>
						<li><a href="kids.php">Toys</a></li>
						<li><a href="kids.php">Bike</a></li>
						<li><a href="kids.php">High chair</a></li>
						<li><a href="kids.php">Delhi</a></li>
						<li><a href="kids.php">Cycles</a></li>
						<li><a href="kids.php">Pune</a></li>
						<li><a href="kids.php">Stroller</a></li>
						<li><a href="kids.php">Hyderabad</a></li>
						<li><a href="kids.php">Cars</a></li>
						<li><a href="kids.php">Walker</a></li>
						<li><a href="kids.php">Tricycle</a></li>
						<li><a href="kids.php">Baby walker</a></li>
						<li><a href="kids.php">Car seat</a></li>
						<li><a href="kids.php">Cradle</a></li>
						<li><a href="kids.php">Kids cycle</a></li>
						<li><a href="kids.php">Kolkata baby</a></li>
						<li><a href="kids.php">Battery car</a></li>
					</ul>
				</div>
				<div class="popular-category">
					<h4>Services</h4>
					<ul>
						<li><a href="services.php">Vip numbers</a></li>
						<li><a href="services.php">Fancy number</a></li>
						<li><a href="services.php">Insurance</a></li>
						<li><a href="services.php">Rent a car</a></li>
						<li><a href="services.php">Massage</a></li>
						<li><a href="services.php">Driver</a></li>
						<li><a href="services.php">Fancy numbers</a></li>
						<li><a href="services.php">Service</a></li>
						<li><a href="services.php">Vip number</a></li>
						<li><a href="services.php">Business</a></li>
						<li><a href="services.php">Loans</a></li>
						<li><a href="services.php">Cook</a></li>
						<li><a href="services.php">Distributors</a></li>
						<li><a href="services.php">Travel</a></li>
						<li><a href="services.php">Services</a></li>
						<li><a href="services.php">Pop up calls</a></li>
						<li><a href="services.php">Icloud</a></li>
						<li><a href="services.php">Visa</a></li>
						<li><a href="services.php">Kerala rent car</a></li>
						<li><a href="services.php">Partners</a></li>
					</ul>
				</div>	
				<div class="popular-category">
					<h4>Jobs</h4>
					<ul>
						<li><a href="jobs.php">Driver</a></li>
						<li><a href="jobs.php">Fresher</a></li>
						<li><a href="jobs.php">Driver job</a></li>
						<li><a href="jobs.php">Delivery boy</a></li>
						<li><a href="jobs.php">Kolkata</a></li>
						<li><a href="jobs.php">Part time</a></li>
						<li><a href="jobs.php">Teacher</a></li>
						<li><a href="jobs.php">Driver jobs</a></li>
						<li><a href="jobs.php">Office boy</a></li>
						<li><a href="jobs.php">Data entry</a></li>
						<li><a href="jobs.php">Delhi</a></li>
						<li><a href="jobs.php">Computer operator</a></li>
						<li><a href="jobs.php">Data entry</a></li>
						<li><a href="jobs.php">Graphic designer</a></li>
						<li><a href="jobs.php">Receptionist</a></li>
						<li><a href="jobs.php">Mumbai</a></li>
						<li><a href="jobs.php">Part time job</a></li>
						<li><a href="jobs.php">Work from home</a></li>
						<li><a href="jobs.php">Accounting finance</a></li>
						<li><a href="jobs.php">Cook</a></li>
						<li><a href="jobs.php">Airport	</a></li>
					</ul>
				</div>	
				<div class="popular-category">
					<h4>Real Estate</h4>
					<ul>
						<li><a href="real-estate.php">House for sale</a></li>
						<li><a href="real-estate.php">Rent</a></li>
						<li><a href="real-estate.php">Wayanad</a></li>
						<li><a href="real-estate.php">Thodupuzha</a></li>
						<li><a href="real-estate.php">Kothamangalam</a></li>
						<li><a href="real-estate.php">Muvattupuzha</a></li>
						<li><a href="real-estate.php">Pala</a></li>
						<li><a href="real-estate.php">Sale</a></li>
						<li><a href="real-estate.php">Agriculture land</a></li>
						<li><a href="real-estate.php">House for rent</a></li>
						<li><a href="real-estate.php">Irinjalakuda</a></li>
						<li><a href="real-estate.php">Kottayam</a></li>
						<li><a href="real-estate.php">Powai</a></li>
						<li><a href="real-estate.php">Changanacherry</a></li>
						<li><a href="real-estate.php">Aluva</a></li>
						<li><a href="real-estate.php">Shop</a></li>
						<li><a href="real-estate.php">Land</a></li>
						<li><a href="real-estate.php">House</a></li>
						<li><a href="real-estate.php">Hyderabad</a></li>
						<li><a href="real-estate.php">Pathanamthitta</a></li>
					</ul>
				</div>					
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //Popular-search -->
	<!--footer section start-->
<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>