<?php
/**
 * Created by PhpStorm.
 * User: kbhandari
 * Date: 26/04/16
 * Time: 1:19 PM
 */

require_once("config.php");

//Prevent the logged-in user visiting the register page if he/she is not an ADMIN
if(!isUserLoggedIn()) { header("Location: login.php"); die(); }

$category = array();
$category[] = "Housing";
$category[] = "Books";
$category[] = "Personal Stuff";
$category[] = "Barter";

$subCategory = array();
$subCategory['Housing'][] = "for sale";
$subCategory['Housing'][] = "for rent";
$subCategory['Books'][] = "for sale";
$subCategory['Books'][] = "for rent";
$subCategory['Personal Stuff'][] = "electronics";
$subCategory['Personal Stuff'][] = "furniture";
$subCategory['Personal Stuff'][] = "vehicle";
$subCategory['Personal Stuff'][] = "other";
$subCategory['Barter'][] = "electronics";
$subCategory['Barter'][] = "furniture";
$subCategory['Barter'][] = "vehicle";
$subCategory['Barter'][] = "other";

############ Configuration ##############
//$destination_folder		= 'G:/path/to/uploads/folder/'; //upload directory ends with / (slash)
$currentFolder = getcwd();
$destinationFolder = $currentFolder . '/FileUploads/'; //upload directory ends with / (slash)
define("UPLOAD_DIR", $destinationFolder);

##########################################

//Forms posted
if(!empty($_POST)) {
	$errors = array();

	$selectedCategory = $_POST['category'][0];
	$selectedsubCategory = $_POST['subCategory'][0];
	$adTitle = $_POST['adTitle'];
	$adDescription = $_POST['adDescription'];
	$price = $_POST['price'];
	$location = $_POST['location'];
	$contactName = $_POST['contactName'];
	$contactNo = $_POST['contactNo'];
	$contactEmail = $_POST['contactEmail'];


	if($category == "") {
		$errors[] = "Enter valid category";
	}
	if($subCategory == "") {
		$errors[] = "Enter valid sub-category";
	}
	if($adTitle == "") {
		$errors[] = "Enter valid ad title";
	}
	if($adDescription == "") {
		$errors[] = "Enter valid ad description";
	}
	if($location == "") {
		$errors[] = "Enter valid location";
	}
	if($contactName == "") {
		$errors[] = "Enter valid contact name";
	}
	if($contactNo == "") {
		$errors[] = "Enter valid contact number";
	}
	if($contactEmail == "") {
		$errors[] = "Enter valid contact email";
	}

	$handleUpload = FALSE;
	if (isset($_FILES['fileselect'])
		|| is_uploaded_file($_FILES['fileselect']['tmp_name'])
		|| $_FILES['fileselect']['error'] <= 0) {
		$handleUpload = TRUE;
		for ($i = 0; $i < count($_FILES['fileselect']['name']); $i++) {
			$file_name = $_FILES['fileselect']['name'][$i];
			$file_size =$_FILES['fileselect']['size'][$i];
			$file_tmp =$_FILES['fileselect']['tmp_name'][$i];
			$file_type=$_FILES['fileselect']['type'][$i];
			$file_error = $_FILES['fileselect']['error'][$i];

			//$file_ext=strtolower(end(explode('.',$file_name)));
			$path_parts = pathinfo($file_name);

			$file_basename =  strtolower($path_parts['basename']);
			$file_name_new= strtolower($path_parts['filename']);
			$file_ext=strtolower($path_parts['extension']);
			$extensions = array("png","jpg","jpeg","tif","tiff");

			if(in_array($file_ext,$extensions )=== false){
				$errors[]="Invalid file extension; only .png, .jpg, .jpeg, .tif, .tiff is allowed";
			}
			if($file_size > 2097152){
				$errors[]='File size must not be greater than 2MB';
			}
			if ($file_error !== UPLOAD_ERR_OK) {
				$errors[]='An error occurred';
			}
		}

	}

	if(count($errors) == 0) {

		$adId = createAd($selectedCategory, $selectedsubCategory, $adTitle, $adDescription, $price, $location, $contactName, $contactNo, $contactEmail);

		if (strpos($adId,'-') == TRUE) {
			if ($handleUpload == FALSE) {
				$successes[] = "Ad posted successfully.";
			} else {
				for ($i = 0; $i < count($_FILES['fileselect']['name']); $i++) {
					$fileName = $_FILES['fileselect']['name'][$i];
					$fileSize =$_FILES['fileselect']['size'][$i];
					$fileTmp =$_FILES['fileselect']['tmp_name'][$i];
					$fileType=$_FILES['fileselect']['type'][$i];
					$fileError = $_FILES['fileselect']['error'][$i];

					//$file_ext=strtolower(end(explode('.',$file_name)));
					$path_parts = pathinfo($fileName);

					$file_basename =  strtolower($path_parts['basename']);
					$file_name_new= strtolower($path_parts['filename']);
					$fileExtension=strtolower($path_parts['extension']);

					if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
						$ip = $_SERVER['HTTP_CLIENT_IP'];
					} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
						$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
					} else {
						$ip = $_SERVER['REMOTE_ADDR'];
					}

					// ensure a safe filename
					$name = preg_replace("/[^A-Z0-9._-]/i", "_", $file_name_new);

					//create a random name for new image (Eg: fileName_293749.jpg) ;
					$newFileName = $name . '_' . rand(0, 99999999999) . '.' . $fileExtension;

					//preserve file from temporary directory
					$success = move_uploaded_file($fileTmp, UPLOAD_DIR . $newFileName);

					// set proper permissions on the new file
					chmod(UPLOAD_DIR . $newFileName, 0644);
					if (!$success) {
						$errors[] = 'Unable to save file';
							break;
					} else {
						$out = createFilesRepositoryRec($baseURL, $adId, $currentFolder, $destinationFolder, $newFileName,
							UPLOAD_DIR, $fileType, $fileTmp, $fileSize, $fileExtension, $fileName, $ip);
						if ($out != 1) {
							$errors[] = "Unable to save file: " .$out;
							break;
						}
					}
				}

			}
		} else {
			$errors[] = $adId;
		}
	}

	if (count($errors) == 0) {
		$successes[] = "Ad posted successfully.";
	}
}

?>
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
<body onload="onchange()">
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
	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post an Ad</h2>
			<div class="post-ad-form">
				<form name='postAd' action='<?php $_SERVER['PHP_SELF'] ?>' method='post' enctype="multipart/form-data">
					<?php
					if (count($errors) != 0) {
						foreach ($errors as $err) {
							echo "<div class=\"alert alert-danger\">";
							echo $err;
							echo "</div>";
						}
					} else if (count($successes) != 0) {
						foreach ($successes as $msg) {
							echo "<div class=\"alert alert-success\">";
							echo $msg;
							echo "</div>";
						}
					}
					?>
					<label>Select Category <span>*</span></label>
					<select id="s1" name="category[]" onchange="onchange()">
						<?php foreach($category as $sa) { ?>
							<option value="<?php echo $sa; ?>"><?php echo $sa; ?></option>
						<?php } ?>
					</select>
					<div class="clearfix"></div>
					<label>Select Sub-category <span>*</span></label>

					<select id="s2" name="subCategory[]"></select>
					<script type="text/javascript">
						var s1= document.getElementById("s1");
						var s2 = document.getElementById("s2");
						onchange(); //Change options after page load
						s1.onchange = onchange; // change options when s1 is changed

						function onchange() {
							<?php foreach ($category as $sa) {?>
							if (s1.value == '<?php echo $sa; ?>') {
								option_html = "";
								<?php if (isset($subCategory[$sa])) { ?> // Make sure position is exist
								<?php foreach ($subCategory[$sa] as $value) { ?>
								option_html += "<option><?php echo $value; ?></option>";
								<?php } ?>
								<?php } ?>
								s2.innerHTML = option_html;
							}
							<?php } ?>
						}
					</script>

					<div class="clearfix"></div>
					<label>Ad Title <span>*</span></label>
					<input type="text" class="phone" name="adTitle" placeholder=" " required=" " />
					<div class="clearfix"></div>
					<label>Ad Description <span>*</span></label>
					<textarea class="mess" name="adDescription" placeholder="Write few lines about your product..."></textarea>
					<div class="clearfix"></div>
					<label>Price </label>
					<input type="text" class="phone" name="price" placeholder="" />
					<div class="clearfix"></div>
					<label>Location <span>*</span></label>
					<input type="text" class="phone" name="location" placeholder=" " required=" "/>
					<div class="clearfix"></div>
					<label>Contact Name <span>*</span></label>
					<input type="text" class="phone" name="contactName" placeholder=" " required=" "/>
					<div class="clearfix"></div>
					<label>Contact No <span>*</span></label>
					<input type="text" class="phone" name="contactNo" placeholder=" " required=" "/>
					<div class="clearfix"></div>
					<label>Contact Email <span>*</span></label>
					<input type="text" class="phone" name="contactEmail" placeholder=" " required=" "/>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for your ad <span>*</span></label>
					<div class="photos-upload-view">
						<div>
							<input type="file" id="fileselect" name="fileselect[]" multiple="multiple" />
							<div id="filedrag">or drop files here</div>
						</div>

						<div id="submitbutton">
							<button type="submit">Upload Files</button>
						</div>
						</div>
					<div class="clearfix"></div>
						<script src="js/filedrag.js"></script>
				</div>
					<div class="personal-details">
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.php" target="_blank">Terms of Use </a> and <a href="privacy.php" target="_blank">Privacy Policy</a></p>
					<input type="submit" value="Post">
					<div class="clearfix"></div>
					</div>
				</form>
			</div>
		</div>	
	</div>

	<!-- // Submit Ad -->
	<!--footer section start-->
<?php
require_once("footer.php");
?>
<!--footer section end-->
</body>
</html>