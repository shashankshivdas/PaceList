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

//Forms posted
if(!empty($_POST))
{
    $updatePersonalInfo = $_POST['updatePersonalInfo'];
    $searchUser = $_POST['searchUser'];
    $searchAdUser = $_POST['searchAdUser'];
    $updateUser = $_POST['updateUser'];
    $clearUser = $_POST['clearUser'];
    if (!empty($updatePersonalInfo)) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $contactno = $_POST['contactNo'];

        if($fname == "") {
            $errors[] = "Enter valid first name";
        }
        if($lname == "") {
            $errors[] = "Enter valid last name";
        }

        //End data validation
        if(count($errors) == 0) {
            //Creating a variable to hold the "@return boolean value returned by function createNewUser - is boolean 1 with
            //successfull and 0 when there is an error with executing the query .

            $updateUser = updateUserRecord($fname, $lname, $contactno);

            if ($updateUser == 1) {
                $successes[] = "User information updated";
            } else {
                $errors[] = $updateUser;
            }
        }
    } else if (!empty($searchUser)) {
        $userEmail =  $_POST['userEmail'];

        if ($userEmail == "" || !endsWith($userEmail, "@pace.edu")) {
            $searchErrors[] = "Invalid email address, Pace email required";
        }

        if(count($searchErrors) == 0) {
            $searchUserDetails = fetchUserDetails($userEmail);
            if (empty($searchUserDetails)) {
                $searchErrors[] = "Invalid email address, cannot find the user";
            }
        }
    } else if (!empty($searchAdUser)) {
        $userEmail =  $_POST['userEmail'];

        if ($userEmail == "" || !endsWith($userEmail, "@pace.edu")) {
            $searchAdErrors[] = "Invalid email address, Pace email required";
        }

        if(count($searchAdErrors) == 0) {
            $searchAdUserDetails = fetchUserDetails($userEmail);
            if (empty($searchAdUserDetails)) {
                $searchAdErrors[] = "Invalid email address, cannot find the user";
            }
        }
    } else if (!empty($updateUser)) {
        $userId = $_POST['updateUserId'];
        $userRole = $_POST['userRole'][0];
        $userStatus = $_POST['userStatus'][0];

        $roleUpdated = updateRole($userId,$userRole);

        if ($roleUpdated == 1) {
            $updateStatus = updateUserStatus($userId, $userStatus);
            if ($updateStatus == 1) {
                $updateSuccesses[] = "Record updated successfully";
            } else {
                $updateErrors[] = "Error while updating record: " + $updateStatus;
            }
        } else {
            $updateErrors[] = "Error while updating record: " + $roleUpdated;
        }
        $searchUserDetails = fetchUserDetails($_POST['userEmail']);
    } else if ($clearUser) {
        $searchUserDetails = array();
        $updateSuccesses = array();
        $updateErrors = array();
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
<!-- Categories -->
<!--Vertical Tab-->
<div class="categories-section main-grid-border">
    <div class="container">
        <h2 class="head">Main Categories</h2>
        <div class="category-list">
            <div id="parentVerticalTab">
                <ul class="resp-tabs-list hor_1">
                    <li>Personal Information</li>
                    <li>Posted Ads</li>
                    <?php if(isUserLoggedIn() && UserRoles::ADMIN == $loggedInUser->role->value) {
                        echo "<li>Search & Update User</li>
                                <li>Search & Update User Ads</li>";
                    }
                    ?>
                </ul>
                <div class="resp-tabs-container hor_1">
                    <div >
                        <form name='updatePersonalInfo' action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
                            <div id="page-wrapper" class="sign-in-wrapper">
                                <div class="graphs">
                                    <div class="sign-up">
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
                                                <h4>First Name :</h4>
                                            </div>
                                            <div class="sign-up2">
                                                <input type="text" name='firstname' placeholder=" " required=" " value="<?php global $loggedInUser; echo $loggedInUser->first_name;?>"/>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="sign-u">
                                            <div class="sign-up1">
                                                <h4>Last Name :</h4>
                                            </div>
                                            <div class="sign-up2">
                                                <input type="text" name='lastname' placeholder=" " required=" " value="<?php global $loggedInUser; echo $loggedInUser->last_name;?>"/>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="sign-u">
                                            <div class="sign-up1">
                                                <h4>Contact No :</h4>
                                            </div>
                                            <div class="sign-up2">
                                                <input type="text" name='contactNo' placeholder=" " value="<?php global $loggedInUser; echo $loggedInUser->contact_no;?>"/>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="sub_home">
                                            <div class="sub_home_left">
                                                <form>
                                                    <input type="submit" name="updatePersonalInfo" value="Update">
                                                </form>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div >
                        <div>
                        <div class="ads-display hor_1 col-md-15">
                            <div class="wrapper">
                                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs nav-tabs-responsive" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#parentVerticalTab2" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">
                                                <span class="text">Posted Ads</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div>
                                                <div id="container">
                                                <?php
                                                $postedAds = getAllAds($loggedInUser->user_id);
                                                if (empty($postedAds)) {
                                                    echo "
                                                    <label><h5 class=\"title\">Nothing to display</h5></label>
                                                    ";
                                                } else {
//                                                    echo "<div class=\"sort\">
//                                                        <div class=\"sort-by\">
//                                                            <label>Ad Type : </label>
//                                                            <select>
//                                                                <option value=\"\">All</option>
//                                                                <option value=\"\">Active</option>
//                                                                <option value=\"\">Disabled</option>
//                                                            </select>
//                                                        </div>
//                                                    </div>
//                                                    <div class=\"clearfix\"></div>";
                                                    echo "<ul class=\"list\">";

                                                    $lastAdId = "";
                                                    foreach ($postedAds as $postedAd) {
                                                        if ($lastAdId != $postedAd['AdID']) {
                                                            $status = "Active";
                                                            if ($postedAd['Active'] == 0) {
                                                                $status = "Disabled";
                                                            }
                                                            echo "<a href=\"productpage.php?adId=".$postedAd['AdID']."\" >
                                                                <li>
                                                                    <img src=\"FileUploads/".$postedAd['NewFileName']."\" title=\"\" alt=\"\" />
                                                                    <section class=\"list-left\">
                                                                        <h5 class=\"title\">".$postedAd['AdTitle']."</h5>
                                                                        <span class=\"adprice\">".$postedAd['Price']."&nbsp;</span>
                                                                        <p class=\"catpath\">".$postedAd['Category']." » ".$postedAd['SubCategory']."</p>
                                                                    </section>
                                                                    <section class=\"list-right\">
                                                                        <span class=\"date\">".$postedAd['CreatedOn']."</span>
                                                                        <span> &nbsp;</span>
                                                                        <span class=\"status\">".$status."</span>
                                                                    </section>
                                                                    <div class=\"clearfix\"></div>
                                                                </li>
                                                            </a>";

                                                            $lastAdId = $postedAd['AdID'];
                                                        }
                                                    }
                                                }
                                                ?>
                                                </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        </div>
                    </div>
                    <?php if(isUserLoggedIn() && UserRoles::ADMIN == $loggedInUser->role->value) { ?>
                    <div >
                        <form name='updateUser' action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
                            <div id="page-wrapper" class="sign-in-wrapper">
                                <div class="graphs">
                                    <?php if (empty($updateSuccesses) && empty($updateErrors) && empty($searchUserDetails)) { ?>
                                    <div class="sign-up">
                                        <h2>Search User</h2>
                                        <?php
                                        if (count($searchErrors) != 0) {
                                            foreach ($searchErrors as $err) {
                                                echo "<div class=\"alert alert-danger\">";
                                                echo $err;
                                                echo "</div>";
                                            }
                                            $searchErrors = array();
                                        } else if (count($searchSuccesses) != 0) {
                                            foreach ($searchSuccesses as $msg) {
                                                echo "<div class=\"alert alert-success\">";
                                                echo $msg;
                                                echo "</div>";
                                            }
                                            $searchSuccesses = array();
                                        }
                                        ?>
                                        <div class="sign-u">
                                            <div class="sign-up1">
                                                <h4>User Email :</h4>
                                            </div>
                                            <div class="sign-up2">
                                                <input type="text" name='userEmail' placeholder=" " required=" " value=" "/>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="sub_home">
                                            <div class="sub_home_left">
                                                <form>
                                                    <input type="submit" name="searchUser" value="Search">
                                                </form>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                        <?php } else { ?>
                                        <div class="sign-up">
                                            <h2>Update User</h2>
                                            <?php
                                            if (count($updateErrors) != 0) {
                                                foreach ($updateErrors as $err) {
                                                    echo "<div class=\"alert alert-danger\">";
                                                    echo $err;
                                                    echo "</div>";
                                                }
                                                $updateErrors = array();
                                            } else if (count($updateSuccesses) != 0) {
                                                foreach ($updateSuccesses as $msg) {
                                                    echo "<div class=\"alert alert-success\">";
                                                    echo $msg;
                                                    echo "</div>";
                                                }
                                            }
                                            ?>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    <h4>First Name :</h4>
                                                </div>
                                                <div class="sign-up2">
                                                    <input type="text" name='firstname' placeholder=" " required=" " value="<?php echo $searchUserDetails['First_Name'];?>" readonly />
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    <h4>Last Name :</h4>
                                                </div>
                                                <div class="sign-up2">
                                                    <input type="text" name='lastname' placeholder=" " required=" " value="<?php echo $searchUserDetails['Last_Name'];?>" readonly />
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    <h4>Contact No :</h4>
                                                </div>
                                                <div class="sign-up2">
                                                    <input type="text" name='contactNo' placeholder=" " value="<?php echo $searchUserDetails['contact_no'];?>" readonly />
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    &nbsp;
                                                </div>
                                                <div class="sign-up2">
                                                    &nbsp;
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <label><h4>Role :</h4></label>
                                                <div class="sign-up2">
                                                    <select id="userRole" name="userRole[]">
                                                        <option value="1" name="ADMIN" <?php if ($searchUserDetails['Role'] == '1') { echo "selected=\"selected\""; }?>>Admin</option>
                                                        <option value="2" name="USER" <?php if ($searchUserDetails['Role'] == '2') { echo "selected=\"selected\""; }?>>User</option>
                                                    </select>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    <input type="hidden" name="updateUserId" value="<?php echo $searchUserDetails['User_ID'];?>">
                                                </div>
                                                <div class="sign-up2">
                                                    &nbsp;
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    <input type="hidden" name="userEmail" value="<?php echo $searchUserDetails['email'];?>">
                                                </div>
                                                <div class="sign-up2">
                                                    &nbsp;
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sign-u">
                                                <label><h4>Status :</h4></label>
                                                <span> </span>
                                                <div class="sign-up2">
                                                    <select id="userStatus" name="userStatus[]">
                                                        <option value="A" name="Active" <?php if ($searchUserDetails['status'] == 'A') { echo "selected=\"selected\""; }?>>Active</option>
                                                        <option value="I" name="Inactive" <?php if ($searchUserDetails['status'] == 'I') { echo "selected=\"selected\""; }?>>Inactive</option>
                                                        <option value="N" name="New" <?php if ($searchUserDetails['status'] == 'N') { echo "selected=\"selected\""; }?>>New</option>
                                                    </select>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sub_home">
                                                <div class="sub_home_left">
                                                    <form method="post">
                                                        <input type="submit" name="updateUser" value="Update">
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="sub_home">
                                                <div class="sub_home_left">
                                                    <span>&nbsp;</span>
                                                </div>
                                            </div>
                                            <div class="sub_home">
                                                <div class="sub_home_left">
                                                    <form method="post">
                                                        <input type="submit" name="clearUser" value="  Back  " onclick="clearUpdateUserTab()">
                                                    </form>
                                                </div>
                                                <script type="text/javascript">
                                                    function clearUpdateUserTab() {
                                                        <?php $updateSuccesses = array(); $updateErrors = array(); $searchUserDetails = array();?>
                                                    }
                                                </script>
                                                <div class="clearfix"> </div>
                                            </div>
                                         <?php } ?>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    <div >
                            <form name='updateUserAd' action='<?php $_SERVER['PHP_SELF'] ?>' method='post'>
                                <div id="page-wrapper" class="sign-in-wrapper">
                                    <div class="graphs">
                                        <?php if (empty($updateAdSuccesses) && empty($updateAdErrors) && empty($searchAdUserDetails)) { ?>
                                        <div class="sign-up">
                                            <h2>Search User</h2>
                                            <?php
                                            if (count($searchAdErrors) != 0) {
                                                foreach ($searchAdErrors as $err) {
                                                    echo "<div class=\"alert alert-danger\">";
                                                    echo $err;
                                                    echo "</div>";
                                                }
                                                $searchAdErrors = array();
                                            } else if (count($searchAdSuccesses) != 0) {
                                                foreach ($searchAdSuccesses as $msg) {
                                                    echo "<div class=\"alert alert-success\">";
                                                    echo $msg;
                                                    echo "</div>";
                                                }
                                                $searchAdSuccesses = array();
                                            }
                                            ?>
                                            <div class="sign-u">
                                                <div class="sign-up1">
                                                    <h4>User Email :</h4>
                                                </div>
                                                <div class="sign-up2">
                                                    <input type="text" name='userEmail' placeholder=" " required=" " value=" "/>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <div class="sub_home">
                                                <div class="sub_home_left">
                                                    <form>
                                                        <input type="submit" name="searchAdUser" value="Search">
                                                    </form>
                                                </div>
                                                <div class="clearfix"> </div>
                                            </div>
                                            <?php } else { ?>

                                            <div class="sign-up">
                                                <h2>Update User Ad            </h2>
                                            </div>
                                            <div class="ads-display">
                                                <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                                    <div>
                                                        <div id="container">
                                                <?php
                                                $postedAds = getAllAds($searchAdUserDetails['User_ID']);
                                                if (empty($postedAds)) {
                                                    echo "
                                                    <label><h5 class=\"title\">Nothing to display</h5></label>
                                                    ";
                                                } else {
//                                                    echo "<div class=\"sort\">
//                                                        <div class=\"sort-by\">
//                                                            <label>Ad Type : </label>
//                                                            <select>
//                                                                <option value=\"\">All</option>
//                                                                <option value=\"\">Active</option>
//                                                                <option value=\"\">Disabled</option>
//                                                            </select>
//                                                        </div>
//                                                    </div>
//                                                    <div class=\"clearfix\"></div>";
                                                    echo "<ul class=\"list\">";

                                                    $lastAdId = "";
                                                    foreach ($postedAds as $postedAd) {
                                                        if ($lastAdId != $postedAd['AdID']) {
                                                            $status = "Active";
                                                            if ($postedAd['Active'] == 0) {
                                                                $status = "Disabled";
                                                            }
                                                            echo "<a href=\"productpage.php?adId=".$postedAd['AdID']."\" >
                                                                <li>
                                                                    <img src=\"FileUploads/".$postedAd['NewFileName']."\" title=\"\" alt=\"\" />
                                                                    <section class=\"list-left\">
                                                                        <h5 class=\"title\">".$postedAd['AdTitle']."</h5>
                                                                        <span class=\"adprice\">".$postedAd['Price']."&nbsp;</span>
                                                                        <p class=\"catpath\">".$postedAd['Category']." » ".$postedAd['SubCategory']."</p>
                                                                    </section>
                                                                    <section class=\"list-right\">
                                                                        <span class=\"date\">".$postedAd['CreatedOn']."</span>
                                                                        <span> &nbsp;</span>
                                                                        <span class=\"status\">".$status."</span>
                                                                    </section>
                                                                    <div class=\"clearfix\"></div>
                                                                </li>
                                                            </a>";

                                                            $lastAdId = $postedAd['AdID'];
                                                        }
                                                    }
                                                }

                                                } ?>
                                                            </div></div></div>
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!--Plug-in Initialisation-->
    <script type="text/javascript">
        $(document).ready(function() {

            //Vertical Tab
            $('#parentVerticalTab').easyResponsiveTabs({
                type: 'vertical', //Types: default, vertical, accordion
                width: 'auto', //auto or any width like 600px
                fit: true, // 100% fit in a container
                closed: 'accordion', // Start closed if in accordion view
                tabidentify: 'hor_1', // The tab groups identifier
                activate: function(event) { // Callback function if tab is switched
                    var $tab = $(this);
                    var $info = $('#nested-tabInfo2');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
        });
    </script>
    <!-- //Categories -->
    <!--footer section start-->
    <?php
    require_once("footer.php");
    ?>
    <!--footer section end-->
</body>
</html>
