<?php

require_once("config.php");


//Prevent the logged-in user visiting the register page if he/she is not an ADMIN
if(isUserLoggedIn()) { header("Location: index.php"); die(); }

//Forms posted
if(!empty($_POST))
{
	$email = $_POST['emailaddress'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmPassword'];
	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$contactno = $_POST['contactNo'];
	$role = new UserRoles(UserRoles::USER);

	if($email == "") {
		$errors[] = "Enter valid email";
	}
	if($fname == "") {
		$errors[] = "Enter valid first name";
	}
	if($lname == "") {
		$errors[] = "Enter valid last name";
	}
	if($password =="" && $confirmPassword =="") {
		$errors[] = "Enter password";
	} else if($password != $confirmPassword) {
		$errors[] = "Password do not match";
	}
	if (!endsWith($email, "@pace.edu")) {
		$errors[] = "Invalid email address, Pace email required";
	}

	//End data validation
	if(count($errors) == 0) {
		//Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
		//successfull and 0 when there is an error with executing the query .

		$newuser = createNewUser($email, $password, $fname, $mname, $lname, $contactno, $role);

		if ($newuser == 1) {
			sendRegistrationEmail($email);
			$_SESSION['username'] = $email;
			$successes[] = "Registration successful, please check your email.";
		} else {
			$errors[] = $newuser;
		}
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
</head>
<body>
<?php
require_once("header.php");
?>
<section>
	<form name='newUser' action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-up">
						<h1>Create an account</h1>
						<h2>Personal Information</h2>
						<?php
						if (count($errors) != 0) {
							foreach ($errors as $err) {
								echo "<div class=\"alert alert-danger\">";
								echo $err;
								echo "</div>";
							}
							$errors = array();
						} else if (count($successes) != 0) {
							foreach ($successes as $msg) {
								echo "<div class=\"alert alert-success\">";
								echo $msg;
								echo "</div>";
							}
							$successes = array();
						}
						?>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Email Address* :</h4>
							</div>
							<div class="sign-up2">
									<input type="text" name='emailaddress' placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Password* :</h4>
							</div>
							<div class="sign-up2">
									<input type="password" name='password' placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Confirm Password* :</h4>
							</div>
							<div class="sign-up2">
									<input type="password" name='confirmPassword' placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>First Name* :</h4>
							</div>
							<div class="sign-up2">
								<input type="text" name='firstname' placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Last Name* :</h4>
							</div>
							<div class="sign-up2">
								<input type="text" name='lastname' placeholder=" " required=" "/>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sign-u">
							<div class="sign-up1">
								<h4>Contact No :</h4>
							</div>
							<div class="sign-up2">
								<input type="text" name='contactNo' placeholder=" " />
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="sub_home">
							<div class="sub_home_left">
								<form>
									<input type="submit" value="Create">
								</form>
							</div>
							<div class="sub_home_right">
								<p>Go Back to <a href="index.html">Home</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
	</form>
		<!--footer section start-->
	<?php
	require_once("footer.php");
	?>
	<!--footer section end-->
	</section>
</body>
</html>