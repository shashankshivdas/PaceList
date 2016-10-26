
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
	<div class="regions main-grid-border">
		<div class="container">
			<h2 class="head">Location List</h2>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Alabama </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Birmingham </a></li>
						<li><a href="all-classifieds.php"> Montgomery </a></li>
						<li><a href="all-classifieds.php"> Mobile </a></li>
						<li><a href="all-classifieds.php"> Huntsville </a></li>
						<li><a href="all-classifieds.php"> Tuscaloosa </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Alaska </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Anchorage</a></li>
						<li><a href="all-classifieds.php">Fairbanks</a></li>
						<li><a href="all-classifieds.php">Juneau</a></li>
						<li><a href="all-classifieds.php">Sitka</a></li>
						<li><a href="all-classifieds.php">Ketchikan</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Arizona </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Phoenix </a></li>
						<li><a href="all-classifieds.php">Tucson   </a></li>
						<li><a href="all-classifieds.php">Mesa   </a></li>
						<li><a href="all-classifieds.php">Chandler  </a></li>
						<li><a href="all-classifieds.php">Glendale </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Arkansas </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Little Rock  </a></li>
						<li><a href="all-classifieds.php">Fort Smith    </a></li>
						<li><a href="all-classifieds.php">Fayetteville   </a></li>
						<li><a href="all-classifieds.php">Springdale    </a></li>
						<li><a href="all-classifieds.php">Jonesboro   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>California </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Los Angeles  </a></li>
						<li><a href="all-classifieds.php">San Diego    </a></li>
						<li><a href="all-classifieds.php">San Jose</a></li>
						<li><a href="all-classifieds.php">San Francisco</a></li>
						<li><a href="all-classifieds.php">Fresno</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Colorado </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Denver   </a></li>
						<li><a href="all-classifieds.php">Colorado   </a></li>
						<li><a href="all-classifieds.php">Aurora   </a></li>
						<li><a href="all-classifieds.php">Fort Collins  </a></li>
						<li><a href="all-classifieds.php">Lakewood  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Connecticut </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Bridgeport </a></li>
						<li><a href="all-classifieds.php">New Haven  </a></li>
						<li><a href="all-classifieds.php">Hartford  </a></li>
						<li><a href="all-classifieds.php">Stamford </a></li>
						<li><a href="all-classifieds.php">Waterbury   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Delaware </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Wilmington</a></li>
						<li><a href="all-classifieds.php">Dover</a></li>
						<li><a href="all-classifieds.php">Newark </a></li>
						<li><a href="all-classifieds.php">Bear</a></li>
						<li><a href="all-classifieds.php">Middletown</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Florida </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Jacksonville  </a></li>
						<li><a href="all-classifieds.php">Miami  </a></li>
						<li><a href="all-classifieds.php">Tampa  </a></li>
						<li><a href="all-classifieds.php">St. Petersburg   </a></li>
						<li><a href="all-classifieds.php">Orlando  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Georgia </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Atlanta </a></li>
						<li><a href="all-classifieds.php">Augusta </a></li>
						<li><a href="all-classifieds.php">Columbus</a></li>
						<li><a href="all-classifieds.php">Savannah  </a></li>
						<li><a href="all-classifieds.php">Athens   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Hawaii </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Honolulu  </a></li>
						<li><a href="all-classifieds.php">Pearl City </a></li>
						<li><a href="all-classifieds.php">Hilo </a></li>
						<li><a href="all-classifieds.php">Kailua   </a></li>
						<li><a href="all-classifieds.php">Waipahu </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Idaho  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Boise</a></li>
						<li><a href="all-classifieds.php">Nampa  </a></li>
						<li><a href="all-classifieds.php">Meridian </a></li>
						<li><a href="all-classifieds.php">Idaho Falls </a></li>
						<li><a href="all-classifieds.php">Pocatello  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Illinois </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Chicago  </a></li>
						<li><a href="all-classifieds.php">Aurora  </a></li>
						<li><a href="all-classifieds.php">Rockford  </a></li>
						<li><a href="all-classifieds.php">Joliet </a></li>
						<li><a href="all-classifieds.php">Naperville   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Indiana  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Indianapolis </a></li>
						<li><a href="all-classifieds.php"> Fort Wayne </a></li>
						<li><a href="all-classifieds.php"> Evansville  </a></li>
						<li><a href="all-classifieds.php"> South Bend </a></li>
						<li><a href="all-classifieds.php"> Hammond </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Iowa  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Des Moines </a></li>
						<li><a href="all-classifieds.php">Cedar Rapids </a></li>
						<li><a href="all-classifieds.php">Davenport </a></li>
						<li><a href="all-classifieds.php">Sioux City  </a></li>
						<li><a href="all-classifieds.php">Waterloo </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Kansas </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Wichita   </a></li>
						<li><a href="all-classifieds.php">Overland Park  </a></li>
						<li><a href="all-classifieds.php">Kansas City  </a></li>
						<li><a href="all-classifieds.php">Topeka  </a></li>
						<li><a href="all-classifieds.php">Olathe  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Kentucky </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Louisville  </a></li>
						<li><a href="all-classifieds.php">Lexington  </a></li>
						<li><a href="all-classifieds.php">Bowling Green </a></li>
						<li><a href="all-classifieds.php">Owensboro </a></li>
						<li><a href="all-classifieds.php">Covington   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Louisiana </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">New Orleans </a></li>
						<li><a href="all-classifieds.php">Baton Rouge    </a></li>
						<li><a href="all-classifieds.php">Shreveport    </a></li>
						<li><a href="all-classifieds.php">Metairie   </a></li>
						<li><a href="all-classifieds.php">Lafayette   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Maine </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Portland</a></li>
						<li><a href="all-classifieds.php">Lewiston </a></li>
						<li><a href="all-classifieds.php">Bangor </a></li>
						<li><a href="all-classifieds.php">South Portland</a></li>
						<li><a href="all-classifieds.php">Auburn </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Maryland </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Baltimore </a></li>
						<li><a href="all-classifieds.php">Frederick    </a></li>
						<li><a href="all-classifieds.php">Rockville    </a></li>
						<li><a href="all-classifieds.php">Gaithersburg    </a></li>
						<li><a href="all-classifieds.php">Bowie     </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Massachusetts </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Boston   </a></li>
						<li><a href="all-classifieds.php">Worcester    </a></li>
						<li><a href="all-classifieds.php">Springfield   </a></li>
						<li><a href="all-classifieds.php">Lowell    </a></li>
						<li><a href="all-classifieds.php">Cambridge    </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Michigan </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Detroit </a></li>
						<li><a href="all-classifieds.php">Grand Rapids </a></li>
						<li><a href="all-classifieds.php">Warren  </a></li>
						<li><a href="all-classifieds.php">Sterling Heights </a></li>
						<li><a href="all-classifieds.php">Lansing  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Minnesota  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Minneapolis  </a></li>
						<li><a href="all-classifieds.php">St. Paul   </a></li>
						<li><a href="all-classifieds.php">Rochester   </a></li>
						<li><a href="all-classifieds.php">Duluth   </a></li>
						<li><a href="all-classifieds.php">Bloomington   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Mississippi </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Jackson </a></li>
						<li><a href="all-classifieds.php">Gulfport </a></li>
						<li><a href="all-classifieds.php">Southaven </a></li>
						<li><a href="all-classifieds.php">Hattiesburg  </a></li>
						<li><a href="all-classifieds.php">Biloxi  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Missouri </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Kansas City</a></li>
						<li><a href="all-classifieds.php">St. Louis</a></li>
						<li><a href="all-classifieds.php">Springfield </a></li>
						<li><a href="all-classifieds.php">Independence </a></li>
						<li><a href="all-classifieds.php">Columbia </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Montana </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Billings </a></li>
						<li><a href="all-classifieds.php">Missoula  </a></li>
						<li><a href="all-classifieds.php">Great Falls </a></li>
						<li><a href="all-classifieds.php">Bozeman  </a></li>
						<li><a href="all-classifieds.php">Butte-Silver Bow</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Nebraska </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Omaha  </a></li>
						<li><a href="all-classifieds.php">Lincoln   </a></li>
						<li><a href="all-classifieds.php">Bellevue   </a></li>
						<li><a href="all-classifieds.php">Grand Island   </a></li>
						<li><a href="all-classifieds.php">Kearney   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Nevada </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Las Vegas  </a></li>
						<li><a href="all-classifieds.php">Henderson </a></li>
						<li><a href="all-classifieds.php">North Las Vegas  </a></li>
						<li><a href="all-classifieds.php">Reno   </a></li>
						<li><a href="all-classifieds.php">Sunrise Manor </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New Hampshire </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Manchester   </a></li>
						<li><a href="all-classifieds.php">Nashua    </a></li>
						<li><a href="all-classifieds.php">Concord    </a></li>
						<li><a href="all-classifieds.php">Dover    </a></li>
						<li><a href="all-classifieds.php">Rochester    </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New Jersey </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Newark  </a></li>
						<li><a href="all-classifieds.php">Jersey City      </a></li>
						<li><a href="all-classifieds.php">Paterson      </a></li>
						<li><a href="all-classifieds.php">Elizabeth   </a></li>
						<li><a href="all-classifieds.php">Edison      </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New Mexico </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Albuquerque  </a></li>
						<li><a href="all-classifieds.php">Las Cruces  </a></li>
						<li><a href="all-classifieds.php">Rio Rancho </a></li>
						<li><a href="all-classifieds.php">Santa Fe  </a></li>
						<li><a href="all-classifieds.php">Roswell </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>New York </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">New York </a></li>
						<li><a href="all-classifieds.php">Buffalo      </a></li>
						<li><a href="all-classifieds.php">Rochester      </a></li>
						<li><a href="all-classifieds.php">Yonkers      </a></li>
						<li><a href="all-classifieds.php">Syracuse       </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>North Carolina  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Charlotte  </a></li>
						<li><a href="all-classifieds.php">Raleigh   </a></li>
						<li><a href="all-classifieds.php">Greensboro   </a></li>
						<li><a href="all-classifieds.php">Winston-Salem  </a></li>
						<li><a href="all-classifieds.php">Durham   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>North Dakota  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Fargo  </a></li>
						<li><a href="all-classifieds.php">Bismarck   </a></li>
						<li><a href="all-classifieds.php">Grand Forks   </a></li>
						<li><a href="all-classifieds.php">Minot   </a></li>
						<li><a href="all-classifieds.php">West Fargo  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Ohio  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Columbus  </a></li>
						<li><a href="all-classifieds.php">Cleveland  </a></li>
						<li><a href="all-classifieds.php">Cincinnati  </a></li>
						<li><a href="all-classifieds.php">Toledo   </a></li>
						<li><a href="all-classifieds.php">Akron   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Oklahoma  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Oklahoma City </a></li>
						<li><a href="all-classifieds.php">Tulsa </a></li>
						<li><a href="all-classifieds.php">Norman  </a></li>
						<li><a href="all-classifieds.php">Broken Arrow </a></li>
						<li><a href="all-classifieds.php">Lawton </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Oregon  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Portland </a></li>
						<li><a href="all-classifieds.php"> Eugene  </a></li>
						<li><a href="all-classifieds.php"> Salem  </a></li>
						<li><a href="all-classifieds.php"> Gresham  </a></li>
						<li><a href="all-classifieds.php"> Hillsboro  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Pennsylvania  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Philadelphia  </a></li>
						<li><a href="all-classifieds.php">Pittsburgh   </a></li>
						<li><a href="all-classifieds.php">Allentown   </a></li>
						<li><a href="all-classifieds.php">Erie   </a></li>
						<li><a href="all-classifieds.php">Reading   </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Rhode Island  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Providence  </a></li>
						<li><a href="all-classifieds.php">Warwick   </a></li>
						<li><a href="all-classifieds.php">Cranston   </a></li>
						<li><a href="all-classifieds.php">Pawtucket   </a></li>
						<li><a href="all-classifieds.php">East Providence  </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>South Carolina </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Columbia </a></li>
						<li><a href="all-classifieds.php">Charleston </a></li>
						<li><a href="all-classifieds.php">North Charleston </a></li>
						<li><a href="all-classifieds.php">Mount Pleasant</a></li>
						<li><a href="all-classifieds.php">Rock Hill </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>South Dakota </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Sioux Falls </a></li>
						<li><a href="all-classifieds.php">Rapid City </a></li>
						<li><a href="all-classifieds.php">Aberdeen </a></li>
						<li><a href="all-classifieds.php">Brookings</a></li>
						<li><a href="all-classifieds.php">Watertown</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Tennessee  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Memphis </a></li>
						<li><a href="all-classifieds.php">Nashville </a></li>
						<li><a href="all-classifieds.php">Knoxville </a></li>
						<li><a href="all-classifieds.php">Chattanooga </a></li>
						<li><a href="all-classifieds.php">Clarksville </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Texas   </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Houston </a></li>
						<li><a href="all-classifieds.php">San Antonio </a></li>
						<li><a href="all-classifieds.php">Dallas </a></li>
						<li><a href="all-classifieds.php">Austin </a></li>
						<li><a href="all-classifieds.php">Fort Worth </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Utah  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Salt Lake City</a></li>
						<li><a href="all-classifieds.php"> West Valley City</a></li>
						<li><a href="all-classifieds.php"> Provo</a></li>
						<li><a href="all-classifieds.php"> West Jordan</a></li>
						<li><a href="all-classifieds.php"> Orem</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Vermont </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Burlington</a></li>
						<li><a href="all-classifieds.php"> Essex</a></li>
						<li><a href="all-classifieds.php"> South Burlington</a></li>
						<li><a href="all-classifieds.php"> Colchester</a></li>
						<li><a href="all-classifieds.php"> Rutland</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Virginia  </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Virginia Beach</a></li>
						<li><a href="all-classifieds.php"> Norfolk</a></li>
						<li><a href="all-classifieds.php"> Chesapeake</a></li>
						<li><a href="all-classifieds.php"> Arlington</a></li>
						<li><a href="all-classifieds.php"> Richmond</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Washington </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Seattle</a></li>
						<li><a href="all-classifieds.php"> Spokane</a></li>
						<li><a href="all-classifieds.php"> Tacoma</a></li>
						<li><a href="all-classifieds.php"> Vancouver</a></li>
						<li><a href="all-classifieds.php"> Bellevue</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>West Virginia </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Charleston </a></li>
						<li><a href="all-classifieds.php">Huntington </a></li>
						<li><a href="all-classifieds.php">Parkersburg </a></li>
						<li><a href="all-classifieds.php">Morgantown </a></li>
						<li><a href="all-classifieds.php">Wheeling </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Wisconsin </h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php">Milwaukee </a></li>
						<li><a href="all-classifieds.php">Madison </a></li>
						<li><a href="all-classifieds.php">Green Bay </a></li>
						<li><a href="all-classifieds.php">Kenosha </a></li>
						<li><a href="all-classifieds.php">Racine </a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="region-block">
			<div class="container">
				<div class="state col-md-3">
					<h3>Wyoming</h3>
				</div>
				<div class="sun-regions col-md-9">
					<ul>
						<li><a href="all-classifieds.php"> Cheyenne</a></li>
						<li><a href="all-classifieds.php"> Casper</a></li>
						<li><a href="all-classifieds.php"> Laramie</a></li>
						<li><a href="all-classifieds.php"> Gillette</a></li>
						<li><a href="all-classifieds.php"> Rock Springs</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
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