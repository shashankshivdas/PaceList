
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
	<!-- Regions -->
		<div class="container">
			<h2 class="head">Sitemap</h2>
		</div>
		<div class="sitemap-regions">
			<div class="container">
				<div class="sitemap-region-grid">
					<div class="sitemap-region">
						<h4>Furniture</h4>
						<ul>
							<li><a href="furnitures.php">Sofa & Dining</a></li>
							<li><a href="furnitures.php">Other Household Items</a></li>
							<li><a href="furnitures.php">Beds & Wardrobes</a></li>
							<li><a href="furnitures.php">Home Decor & Garden</a></li>
							<li><a href="furnitures.php">Kitchen & Other Appliances</a></li>
							<li><a href="furnitures.php">Fridge - AC - Washing Machine</a></li>
							<li class="left-gap"><a href="furnitures.php">Fridges</a></li>
							<li class="left-gap"><a href="furnitures.php">AC</a></li>
							<li class="left-gap"><a href="furnitures.php">Washing Machine</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Services</h4>
						<ul>
							<li><a href="services.php">Other Services</a></li>
							<li><a href="services.php">Education & Classes</a></li>
							<li class="left-gap"><a href="services.php">Tutoring</a></li>
							<li class="left-gap"><a href="services.php">Other</a></li>
							<li class="left-gap"><a href="services.php">Computer</a></li>
							<li class="left-gap"><a href="services.php">Language Classes</a></li>
							<li class="left-gap"><a href="services.php">Music & Dance</a></li>
							<li><a href="services.php">Drivers & Taxi</a></li>
							<li><a href="services.php">Web Development</a></li>
							<li><a href="services.php">Electronics & Computer Repair</a></li>
							<li class="left-gap"><a href="services.php">Computer</a></li>
							<li class="left-gap"><a href="services.php">Home Appliances</a></li>
							<li class="left-gap"><a href="services.php">Other Electronics</a></li>
							<li class="left-gap"><a href="services.php">Mobile</a></li>
							<li><a href="services.php">Health & Beauty</a></li>
							<li><a href="services.php">Event Services</a></li>
							<li><a href="services.php">Movers & Packers</a></li>
							<li><a href="services.php">Maids & Domestic Help</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Real Estate</h4>
						<ul>
							<li><a href="real-estate.php">Land & Plots</a></li>
							<li class="left-gap"><a href="real-estate.php">Sale</a></li>
							<li class="left-gap"><a href="real-estate.php">Rent</a></li>
							<li><a href="real-estate.php">Apartments</a></li>
							<li class="left-gap"><a href="real-estate.php">Rent</a></li>
							<li class="left-gap"><a href="real-estate.php">Sale</a></li>
							<li><a href="real-estate.php">Houses</a></li>
							<li class="left-gap"><a href="real-estate.php">Rent</a></li>
							<li class="left-gap"><a href="real-estate.php">Sale</a></li>
							<li><a href="real-estate.php">Shops - Offices - Commercial Space</a></li>
							<li class="left-gap"><a href="real-estate.php">Lease</a></li>
							<li class="left-gap"><a href="real-estate.php">Sale</a></li>
							<li><a href="real-estate.php">PG & Roommates</a></li>
							<li><a href="real-estate.php">Vacation Rentals - Guest Houses</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Bikes</h4>
						<ul>
							<li><a href="bikes.php">Motorcycles</a></li>
							<li><a href="bikes.php">Bajaj</a></li>
							<li><a href="bikes.php">Hero Honda</a></li>
							<li><a href="bikes.php">Yamaha</a></li>
							<li><a href="bikes.php">Royal Enfield</a></li>
							<li><a href="bikes.php">Honda</a></li>
							<li><a href="bikes.php">Hero</a></li>
							<li><a href="bikes.php">TVS</a></li>
							<li><a href="bikes.php">Suzuki</a></li>
							<li><a href="bikes.php">Other Brands</a></li>
							<li><a href="bikes.php">KTM</a></li>
							<li><a href="bikes.php">Mahindra</a></li>
							<li><a href="bikes.php">Kawasaki</a></li>
							<li><a href="bikes.php">Harley Davidson</a></li>
							<li><a href="bikes.php">Spare Parts</a></li>
							<li><a href="bikes.php">Scooters</a></li>
							<li><a href="bikes.php">Honda</a></li>
							<li><a href="bikes.php">TVS </a></li>
							<li><a href="bikes.php">Bajaj</a></li>
							<li><a href="bikes.php">Hero</a></li>
							<li><a href="bikes.php">Suzuki</a></li>
							<li><a href="bikes.php">Mahindra</a></li>
							<li><a href="bikes.php">LML</a></li>
							<li><a href="bikes.php">Kinetic</a></li>
							<li><a href="bikes.php">Other Brands</a></li>
							<li><a href="bikes.php">Yamaha</a></li>
							<li><a href="bikes.php">Vespa</a></li>
							<li><a href="bikes.php">Lambretta</a></li>
							<li><a href="bikes.php">Bicycles</a></li>
							<li><a href="bikes.php">Hero</a></li>
							<li><a href="bikes.php">Other Brands</a></li>
							<li><a href="bikes.php">Hercules</a></li>
							<li><a href="bikes.php">BSA</a></li>
							<li><a href="bikes.php">Atlas</a></li>
							<li><a href="bikes.php">Avon</a></li>
							<li><a href="bikes.php">Firefox</a></li>
							<li><a href="bikes.php">Trek</a></li>
						</ul>
					</div>
				</div>
				<div class="sitemap-region-grid">
					<div class="sitemap-region">
						<h4>Jobs</h4>
						<ul>
							<li><a href="jobs.php">Online</a></li>
							<li><a href="jobs.php">Other Jobs</a></li>
							<li><a href="jobs.php">Customer Service</a></li>
							<li><a href="jobs.php">IT</a></li>
							<li><a href="jobs.php">Marketing</a></li>
							<li><a href="jobs.php">Sales</a></li>
							<li><a href="jobs.php">Manufacturing</a></li>
							<li><a href="jobs.php">Clerical & Administration</a></li>
							<li><a href="jobs.php">Hotels & Tourism</a></li>
							<li><a href="jobs.php">Accounting & Finance</a></li>
							<li><a href="jobs.php">Advertising & PR</a></li>
							<li><a href="jobs.php">Human Resources</a></li>
							<li><a href="jobs.php">Education</a></li>
						</ul>
					</div>				
					<div class="sitemap-region">
						<h4>Cars</h4>
						<ul>
							<li><a href="vehicles.php">Cars</a></li>
							<li class="left-gap"><a href="vehicles.php">Maruti Suzuki</a></li>
							<li class="left-gap"><a href="vehicles.php">Hyundai</a></li>
							<li class="left-gap"><a href="vehicles.php">Tata</a></li>
							<li class="left-gap"><a href="vehicles.php">Mahindra</a></li>
							<li class="left-gap"><a href="vehicles.php">Honda</a></li>
							<li class="left-gap"><a href="vehicles.php">Ford</a></li>
							<li class="left-gap"><a href="vehicles.php">Toyota</a></li>
							<li class="left-gap"><a href="vehicles.php">Chevrolet</a></li>
							<li class="left-gap"><a href="vehicles.php">Skoda</a></li>
							<li class="left-gap"><a href="vehicles.php">Volkswagen</a></li>
							<li class="left-gap"><a href="vehicles.php">Fiat</a></li>
							<li class="left-gap"><a href="vehicles.php">Mitsubishi</a></li>
							<li class="left-gap"><a href="vehicles.php">Other Brands</a></li>
							<li class="left-gap"><a href="vehicles.php">Mercedes-Benz</a></li>
							<li class="left-gap"><a href="vehicles.php">Nissan</a></li>
							<li class="left-gap"><a href="vehicles.php">BMW</a></li>
							<li class="left-gap"><a href="vehicles.php">Renault</a></li>
							<li class="left-gap"><a href="vehicles.php">Hindustan Motors</a></li>
							<li class="left-gap"><a href="vehicles.php">Audi</a></li>
							<li class="left-gap"><a href="vehicles.php">Mahindra Renault</a></li>
							<li class="left-gap"><a href="vehicles.php">Opel</a></li>
							<li class="left-gap"><a href="vehicles.php">Daewoo</a></li>
							<li class="left-gap"><a href="vehicles.php">Force Motors</a></li>
							<li class="left-gap"><a href="vehicles.php">Landrover</a></li>
							<li class="left-gap"><a href="vehicles.php">Premier</a></li>
							<li class="left-gap"><a href="vehicles.php">Jaguar</a></li>
							<li class="left-gap"><a href="vehicles.php">Volvo</a></li>
							<li class="left-gap"><a href="vehicles.php">Isuzu</a></li>
							<li class="left-gap"><a href="vehicles.php">Mini</a></li>
							<li class="left-gap"><a href="vehicles.php">Porsche</a></li>
							<li class="left-gap"><a href="vehicles.php">Ssangyong</a></li>
							<li class="left-gap"><a href="vehicles.php">Mahindra Reva</a></li>
							<li class="left-gap"><a href="vehicles.php">Rolls Royce</a></li>
							<li class="left-gap"><a href="vehicles.php">Bentley</a></li>
							<li class="left-gap"><a href="vehicles.php">Ferrari</a></li>
							<li class="left-gap"><a href="vehicles.php">Lamborghini </a></li>
							<li><a href="vehicles.php">Spare Parts</a></li>
							<li class="left-gap"><a href="vehicles.php">Car Parts</a></li>
							<li class="left-gap"><a href="vehicles.php">Other Parts</a></li>
							<li class="left-gap"><a href="vehicles.php">Spare Parts</a></li>
							<li><a href="vehicles.php">Commercial Vehicles</a></li>
							<li><a href="vehicles.php">Other Vehicles</a></li>
							<li><a href="vehicles.php">Motorcycles</a></li>
							<li class="left-gap"><a href="vehicles.php">Hero Honda</a></li>
							<li class="left-gap"><a href="vehicles.php">Honda</a></li>
							<li class="left-gap"><a href="vehicles.php">Bajaj</a></li>
							<li class="left-gap"><a href="vehicles.php">TVS</a></li>
							<li class="left-gap"><a href="vehicles.php">Royal Enfield</a></li>
							<li class="left-gap"><a href="vehicles.php">Suzuki</a></li>
							<li><a href="vehicles.php">Scooters</a></li>
							<li class="left-gap"><a href="vehicles.php">Honda</a></li>
							<li class="left-gap"><a href="vehicles.php">Bajaj</a></li>
							<li class="left-gap"><a href="vehicles.php">TVS</a></li>
							<li class="left-gap"><a href="vehicles.php">Suzuki</a></li>
							<li class="left-gap"><a href="vehicles.php">Kinetic</a></li>
							<li class="left-gap"><a href="vehicles.php">Mahindra</a></li>
							<li><a href="vehicles.php">Bicycles</a></li>
							<li class="left-gap"><a href="vehicles.php">Other Brands</a></li>
							<li class="left-gap"><a href="vehicles.php">Hero</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Pets</h4>
						<ul>
							<li><a href="pets.php">Dogs</a></li>
							<li class="left-gap"><a href="pets.php">Other Breeds</a></li>
							<li class="left-gap"><a href="pets.php">Labrador</a></li>
							<li class="left-gap"><a href="pets.php">German Shepherd</a></li>
							<li class="left-gap"><a href="pets.php">Rottweiler</a></li>
							<li class="left-gap"><a href="pets.php">Pug</a></li>
							<li class="left-gap"><a href="pets.php">Mastiff</a></li>
							<li class="left-gap"><a href="pets.php">Saint Bernard</a></li>
							<li class="left-gap"><a href="pets.php">Golden Retriever</a></li>
							<li class="left-gap"><a href="pets.php">Beagle</a></li>
							<li class="left-gap"><a href="pets.php">Pomeranian</a></li>
							<li class="left-gap"><a href="pets.php">Doberman</a></li>
							<li class="left-gap"><a href="pets.php">Husky</a></li>
							<li class="left-gap"><a href="pets.php">Cocker Spaniel</a></li>
							<li class="left-gap"><a href="pets.php">Boxer</a></li>
							<li class="left-gap"><a href="pets.php">Bulldog</a></li>
							<li class="left-gap"a href="pets.html">Dalmatian</a></li>
							<li><a href="pets.php">Other Pets</a></li>
							<li><a href="pets.php">Aquariums</a></li>
							<li><a href="pets.php">Pet Food & Accessories</a></li>
						</ul>
					</div>
				</div>
				<div class="sitemap-region-grid">
					<div class="sitemap-region">					
						<h4>Mobiles</h4>
						<ul>
							<li><a href="mobiles.php">Mobile Phones</a></li>
							<li class="left-gap"><a href="mobiles.php">Samsung</a></li>
							<li class="left-gap"><a href="mobiles.php">Nokia</a></li>
							<li class="left-gap"><a href="mobiles.php">Other Mobiles</a></li>
							<li class="left-gap"><a href="mobiles.php">Micromax</a></li>
							<li class="left-gap"><a href="mobiles.php">iPhone</a></li>
							<li class="left-gap"><a href="mobiles.php">Sony</a></li>
							<li class="left-gap"><a href="mobiles.php">HTC</a></li>
							<li class="left-gap"><a href="mobiles.php">Lenovo</a></li>
							<li class="left-gap"><a href="mobiles.php">Intex</a></li>
							<li class="left-gap"><a href="mobiles.php">Motorola</a></li>
							<li class="left-gap"><a href="mobiles.php">Lava</a></li>
							<li class="left-gap"><a href="mobiles.php">LG</a></li>
							<li class="left-gap"><a href="mobiles.php">Mi</a></li>
							<li class="left-gap"><a href="mobiles.php">BlackBerry</a></li>
							<li class="left-gap"><a href="mobiles.php">Karbonn</a></li>
							<li class="left-gap"><a href="mobiles.php">Asus</a></li>
							<li><a href="mobiles.php">Accessories</a></li>
							<li class="left-gap"><a href="mobiles.php">Mobile</a></li>
							<li class="left-gap"><a href="mobiles.php">Tablets</a></li>
							<li><a href="mobiles.php">Tablets</a></li>
							<li class="left-gap"><a href="mobiles.php">Samsung</a></li>
							<li class="left-gap"><a href="mobiles.php">Other Tablets</a></li>
							<li class="left-gap"><a href="mobiles.php">iPads</a></li>
							<li class="left-gap"><a href="mobiles.php">iBall</a></li>
							<li class="left-gap"><a href="mobiles.php">Micromax</a></li>
							<li class="left-gap"><a href="mobiles.php">Lenovo</a></li>
							<li class="left-gap"><a href="mobiles.php">Asus</a></li>
							<li class="left-gap"><a href="mobiles.php">HP</a></li>
							<li class="left-gap"><a href="mobiles.php">Dell</a></li>
							<li class="left-gap"><a href="mobiles.php">HCL</a></li>
							<li class="left-gap"><a href="mobiles.php">Acer</a></li>
							<li class="left-gap"><a href="mobiles.php">Blackberry</a></li>
							<li class="left-gap"><a href="mobiles.php">Sony</a></li>
						</ul>
					</div>
					<div class="sitemap-region">					
						<h4>Kids</h4>
						<ul>
							<li><a href="kids.php">Furniture And Toys</a></li>
							<li><a href="kids.php">Accessories</a></li>
							<li><a href="kids.php">Prams & Walkers</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Fashion</h4>
						<ul>
							<li><a href="fashion.php">Accessories</a></li>
							<li class="left-gap"><a href="fashion.php">Women</a></li>
							<li class="left-gap"><a href="fashion.php">Men</a></li>
							<li><a href="fashion.php">Clothes</a></li>
							<li class="left-gap"><a href="fashion.php">Women</a></li>
							<li class="left-gap"><a href="fashion.php">Men</a></li>
							<li><a href="fashion.php">Footwear</a></li>
							<li class="left-gap"><a href="fashion.php">Men</a></li>
							<li class="left-gap"><a href="fashion.php">Women</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Electronics & Appliances</h4>
						<ul>
							<li><a href="electronics-appliances.php">Computers & Accessories</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Laptops</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Computers</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Other Accessories</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Internet</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Printers</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Monitors</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Hard Disk</a></li>
							<li><a href="electronics-appliances.php">Kitchen & Other Appliances</a></li>
							<li><a href="electronics-appliances.php">TV - Video - Audio</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Video - Audio</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">TV</a></li>
							<li><a href="electronics-appliances.php">Cameras & Accessories</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Cameras</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Other Accessories</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Lenses</a></li>
							<li><a href="electronics-appliances.php">Games & Entertainment</a></li>
							<li><a href="electronics-appliances.php">Fridge - AC - Washing Machine</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Fridges</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">Washing Machine</a></li>
							<li class="left-gap"><a href="electronics-appliances.php">AC</a></li>
						</ul>
					</div>
					<div class="sitemap-region">
						<h4>Books, Sports & Hobbies</h4>
						<ul>
							<li><a href="books-sports-hobbies.php">Gym & Fitness</a></li>
							<li><a href="books-sports-hobbies.php">Other Hobbies</a></li>
							<li><a href="books-sports-hobbies.php">Musical Instruments</a></li>
							<li><a href="books-sports-hobbies.php">Books & Magazines</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">Education & Training</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">Competitive Exam</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">Literature & Fiction</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">Professional & Technical</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">Other Books</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">School Books</a></li>
							<li class="left-gap"><a href="books-sports-hobbies.php">Children</a></li>
							<li><a href="books-sports-hobbies.php">Sports Equipment</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	<!-- //Regions -->
	<!--footer section start-->
<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>