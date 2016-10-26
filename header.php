<?php
/**
 * Created by PhpStorm.
 * User: Rushabh
 * Date: 24-04-2016
 * Time: 23:28
 */
require_once("config.php");
?>
<html>
<div class="header">
		<div class="container">
			<div class="logo">
				<a href="index.php"><span>Pace</span>List</a>
			</div>
			<div class="header-right">
			<a class="account" href="login.php">My Account</a>

	<!-- Large modal -->
			
				<?php
				if(isUserLoggedIn()) {
					echo "<div class=\"selectregion\">

							<a class=\"btn btn-primary\" href=\"logout.php\">logout</a>
						  </div>";
				}
				?>
		</div>
		</div>
	</div>

</html>