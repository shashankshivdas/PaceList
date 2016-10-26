
<?php

require_once("config.php");


//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) { header("Location: myaccount.php"); die(); }

//Forms posted
if(!empty($_POST))
{
	$errors = array();
	$username = trim($_POST["username"]);
	$password = trim($_POST["password"]);

	//Perform some validation
	if ($username == "" || !endsWith($username, "@pace.edu")) {
		$errors[] = "Invalid email address, Pace email required";
	}
	if($password == "")
	{
		$errors[] = "Enter password";
	}

	if(count($errors) == 0)
	{
		//retrieve the records of the user who is trying to login
		$userdetails = fetchUserDetails($username);

		if (empty($userdetails)) {
			$errors[] = "Invalid user";
		}
		//See if the user's account is activated
		else if($userdetails["status"] == 'N') {
			$errors[] = "Email verification pending";
		} else if($userdetails["status"] == 'I') {
			$errors[] = "Account inactive";
		}
		else
		{
			//Hash the password and use the salt from the database to compare the password.
			$entered_pass = generateHash($password,$userdetails["Password"]);
			echo $entered_pass . "<br><br>";
			echo $userdetails['Password'];


			if($entered_pass != $userdetails["Password"]) {
				$errors[] = "Invalid password";
			}
			else {
				//Passwords match! we're good to go'
				//Transfer some db data to the session object
				$loggedInUser = new loggedInUser();
				$loggedInUser->email = $userdetails["email"];
				$loggedInUser->user_id = $userdetails["User_ID"];
				$loggedInUser->hash_pw = $userdetails["Password"];
				$loggedInUser->first_name = $userdetails["First_Name"];
				$loggedInUser->last_name = $userdetails["Last_Name"];
				$loggedInUser->username = $userdetails["email"];
				$loggedInUser->contact_no = $userdetails["contact_no"];
				$loggedInUser->member_since = $userdetails["created_on"];
				$loggedInUser->role = new UserRoles($userdetails["Role"]);

				//pass the values of $loggedInUser into the session -
				// you can directly pass the values into the array as well.

				$_SESSION["ThisUser"] = $loggedInUser;

				//now that a session for this user is created
				//Redirect to this users account page
				header("Location: index.php");
				die();
			}
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
			<div id="page-wrapper" class="sign-in-wrapper">
				<div class="graphs">
					<div class="sign-in-form">
						<div class="sign-in-form-top">
							<h1>Log in</h1>
						</div>
						<?php
						if (count($errors) != 0) {
							foreach ($errors as $err) {
								echo "<div class=\"alert alert-danger\">";
								echo $err;
								echo "</div>";
							}
						}
						?>
						<div class="signin">
							<form name='login' action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="text" class="user" name='username' value="Your Pace Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Pace Email';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<div class="log-input">
								<div class="log-input-left">
								   <input type="password" class="lock" name='password' value="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email address:';}"/>
								</div>
								<span class="checkbox2">
									 <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i></label>
								</span>
								<div class="clearfix"> </div>
							</div>
							<div class="signin-rit">
							<span class="checkbox1">
								 <label class="checkbox">Forgot Password ?</label>
							</span>
								<p><a href="forgotPassword.php">Click Here</a></p>
								<div class="clearfix"> </div>
							</div>
							<input type="submit" value="Log in">
						</form>	 
						</div>
						<div class="new_people">
							<h2>For New People</h2>
							<p></p>
							<a href="register.php">Register Now!</a>
						</div>
					</div>
				</div>
			</div>
		<!--footer section start-->
	<?php
	require_once("footer.php");
	?>
	<!--footer section end-->
	</section>
</body>
</html>