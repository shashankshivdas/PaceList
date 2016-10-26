<?php


//Create a new user
function createNewUser($email, $password, $fname, $mname, $lname, $contactno, $role)
{
    global $mysqli, $db_table_prefix;

    if (checkExistingUser($email)) {
        return "Email already registered.";
    }

    $guid = getGUID();
    $date = date("Y-m-d H:i:s");
    $hashedPassword = generateHash($password);
    $status = 'N'; // N = New, A = Active, I = Inactive

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "user_details (
		user_id,
		email,
		password,
		first_name,
		middle_name,
		last_name,
		contact_no,
		created_on,
		status
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
        ?
		)"
    );
    $stmt->bind_param("sssssssss", $guid, $email, $hashedPassword, $fname, $mname, $lname, $contactno, $date, $status);
    $result = $stmt->execute();
    $stmt->close();
    if($result == 1) {
        return mapNewUserRole($guid, $role);
    } else {
        return $result;
    }

}

function mapNewUserRole($userID, $role)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "User_Role_Map (
		User_ID,
		ROLE_ID
		)
		VALUES (
		?,
		?
		)"
    );
    $stmt->bind_param("ss", $userID, $role->value);
    //print_r($stmt);
    $result = $stmt->execute();
    //print_r($result);
    $stmt->close();
    return $result;
}

//Check if the email is already existing
//function definition and declaration
/**
 * @return boolean
 */
function checkExistingUser($email)
{
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
		email
		FROM " . $db_table_prefix . "user_details WHERE email = ?"
    );
    $stmt->bind_param("s", $email);

    $result = $stmt->execute();

    $isExisting = false;
    while ($stmt->fetch()) {
        $isExisting = true;
        break;
    }

    $stmt->close();
    return ($isExisting);
}

function fetchUserDetails($email)
{
    $row = array();
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UD.User_ID as User_ID,
		email,
		First_Name,
		middle_name,
		Last_Name,
		password,
		contact_no,
		created_on,
		URM.Role_ID as Role,
		status
		FROM ".$db_table_prefix."user_details UD, ".$db_table_prefix."User_Role_Map URM
		WHERE
		email = ?
		AND UD.User_ID = URM.User_ID
		LIMIT 1");
    $stmt->bind_param("s", $email);

    $stmt->execute();
    $stmt->bind_result($userID, $email, $firstName, $middleName, $lastName, $password, $contactNo, $createdOn, $role, $status);
    while ($stmt->fetch()){
        $row = array('User_ID' => $userID,
            'email' => $email,
            'First_Name' => $firstName,
            'Middle_Name' => $middleName,
            'Last_Name' => $lastName,
            'Password' => $password,
            'contact_no' => $contactNo,
            'created_on' => $createdOn,
            'Role' => $role,
            'status' => $status);
    }
    $stmt->close();
    return ($row);
}

function updateUserStatus($userId, $status)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "User_Details
		SET
		status = ?
		WHERE
		user_id = ?
		LIMIT 1"
    );
    $stmt->bind_param("ss", $status, $userId);
    $result = $stmt->execute();
    $stmt->close();

    return $result;

}

function disableAd($adId)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "ad
		SET
		active = 0
		WHERE
		ad_id = ?
		LIMIT 1"
    );
    $stmt->bind_param("s", $adId);
    $result = $stmt->execute();
    $stmt->close();

    return $result;

}

function getGUID(){
    if (function_exists('com_create_guid')){
        return com_create_guid();
    }
    else {
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = chr(123)// "{"
            .substr($charid, 0, 8).$hyphen
            .substr($charid, 8, 4).$hyphen
            .substr($charid,12, 4).$hyphen
            .substr($charid,16, 4).$hyphen
            .substr($charid,20,12)
            .chr(125);// "}"
        return $uuid;
    }
}

function generateHash($plainText, $salt = NULL) {
    if ($salt === NULL) {
        $salt = substr(md5(uniqid(rand(), TRUE)), 0, 25);
    }
    else {
        $salt = substr($salt, 0, 25);
    }

    return $salt . sha1($salt . $plainText);
}

function getUserHash($userId, $operationId) {
    $hash = generateHash(microtime());
    if (!empty(getHashManagementRecord($userId, $operationId))) {
        // Update existing hash
        updateHashManagementRecord($userId, $operationId, $hash);
    } else {
        // Create an entry with new hash
        createHashManagementRecord($userId, $operationId, $hash);
    }

    return $hash;
}

function getHashManagementRecord($userId, $operationId) {
    $row = array();
    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		User_ID,
		operation_id,
		generated_hash
		FROM ".$db_table_prefix."hash_management
		WHERE
		User_ID = ?
		AND operation_id = ?
		LIMIT 1");
    $stmt->bind_param("ss", $userId, $operationId);

    $stmt->execute();
    $stmt->bind_result($user_ID, $operation_id, $generated_hash);
    while ($stmt->fetch()){
        $row = array('User_ID' => $user_ID,
            'operation_id' => $operation_id,
            'generated_hash' => $generated_hash);
    }
    $stmt->close();
    return ($row);
}

function createHashManagementRecord($userId, $operationId, $generatedHash)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "hash_management (
		user_id,
		operation_id,
		generated_hash
		)
		VALUES (
		?,
		?,
		?
		)"
    );
    $stmt->bind_param("sss", $userId, $operationId, $generatedHash);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}

function updateHashManagementRecord($userId, $operationId, $generatedHash)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "UPDATE ".$db_table_prefix."hash_management
		SET
		generated_hash = ?
		WHERE
		User_ID = ?
		and operation_id = ?
		LIMIT 1"
    );
    $stmt->bind_param("sss", $generatedHash, $userId, $operationId);
    $result = $stmt->execute();
    $stmt->close();

    return $result;

}

function sendRegistrationEmail($email) {

    $userDetails = fetchUserDetails($email);

    // the message
    $msg = "Thanks for signing up at PaceList!\n";
    $msg = $msg. "Please verify your email address by clicking below:\n\n";
    $msg = $msg. dirname($_SERVER['HTTP_REFERER']);
    $msg = $msg. "/confirmEmail.php?email=". $email . "&validate=" . getUserHash($userDetails["User_ID"], '1');

    // send email
    mail($email,"Confirm your email address",$msg);
}

function sendPasswordResetEmail($email) {

    $userDetails = fetchUserDetails($email);

    // the message
    $msg = "Thanks for using PaceList!\n";
    $msg = $msg. "Please reset your password by clicking below:\n\n";
    $msg = $msg. dirname($_SERVER['HTTP_REFERER']);
    $msg = $msg. "/resetPassword.php?email=". $email . "&validate=" . getUserHash($userDetails["User_ID"], '2');

    // send email
    mail($email,"Reset your password",$msg);
}

function confirmEmail($email, $validateString) {
    $userDetails = fetchUserDetails($email);

    if (empty($userDetails)) {
        return "Invalid email";
    }
    //See if the user's account is activated
    else if($userDetails["status"] == 'I')
    {
        return "Account inactive";
    }
    else if($userDetails["status"] == 'A')
    {
        return "Email already verified";
    }
    else if($userDetails["status"] == 'N') {
        if ($validateString == getHashManagementRecord($userDetails["User_ID"], '1')["generated_hash"]) {
            return updateUserStatus($userDetails["User_ID"], 'A');
        } else {
            return "Validation string mismatch";
        }
    }
    else {
        return "Invalid email status";
    }
}

function validateResetPassword($email, $validateString) {
    $userDetails = fetchUserDetails($email);

    if (empty($userDetails)) {
        return "Invalid email";
    }
    //See if the user's account is activated
    else if($userDetails["status"] == 'I') {
        return "Account inactive";
    } else if($userDetails["status"] == 'N') {
        return "Email verification required";
    } else if($userDetails["status"] == 'A') {
        if ($validateString != getHashManagementRecord($userDetails["User_ID"], '2')["generated_hash"]) {
            return "Validation string mismatch";
        }
    }
    return 1;
}

function updateUserRecord($fname, $lname, $contactNo)
{
    global $loggedInUser, $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "User_Details
		SET
		First_Name = ?,
		Last_Name = ?,
		Contact_no = ?
		WHERE
		User_ID = ?
		LIMIT 1"
    );
    $stmt->bind_param("ssss", $fname, $lname, $contactNo, $loggedInUser->user_id);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}

function updatePassword($userId, $password)
{
    global $mysqli, $db_table_prefix;

    $hashedPassword = generateHash($password);

    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "User_Details
		SET
		password = ?
		WHERE
		User_ID = ?
		LIMIT 1"
    );
    $stmt->bind_param("ss", $hashedPassword, $userId);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
}

function updateThisRecord($userId, $fname, $lname, $email, $status, $contactNo, $role = NULL)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "UPDATE " . $db_table_prefix . "User_Details
		SET
		First_Name = ?,
		Last_Name = ?,
		Email = ?,
		Status = ?,
		Contact_no = ?
		WHERE
		User_ID = ?
		LIMIT 1"
    );
    $stmt->bind_param("ssssss", $fname, $lname, $email, $status, $contactNo, $userId);
    $result = $stmt->execute();
    $stmt->close();

    if ($role != NULL && $result == 1) {
        echo $role;
        return updateRole($email, $role);
    } else {
        return $result;
    }
}

function updateRole($userId, $role)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "UPDATE ".$db_table_prefix."User_Role_Map
		SET
		Role_ID = ?
		WHERE
		User_ID = ?
		LIMIT 1"
    );
    $stmt->bind_param("ss", $role, $userId);
    $result = $stmt->execute();
    $stmt->close();

    return $result;

}


//Destroys a session as part of logout
function destroySession($name)
{
    if(isset($_SESSION[$name]))
    {
        $_SESSION[$name] = NULL;
        unset($_SESSION[$name]);
    }
}

//Check if a user is logged in
function isUserLoggedIn()
{
    global $loggedInUser,$mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		User_ID,
		Password
		FROM ".$db_table_prefix."User_Details
		WHERE
		User_ID = ?
		AND
		Password = ?
		AND
		status = 'A'
		LIMIT 1");
    $stmt->bind_param("is", $loggedInUser->user_id, $loggedInUser->hash_pw);
    $stmt->execute();
    $stmt->store_result();
    $num_returns = $stmt->num_rows;
    $stmt->close();

    if($loggedInUser == NULL)
    {
        return false;
    }
    else
    {
        if ($num_returns > 0)
        {
            return true;
        }
        else
        {
            destroySession("ThisUser");
            return false;
        }
    }
}

//Retrieve complete user information of all users
function fetchAllUsers()
{
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UD.User_ID as UserID,
		Email,
		FirstName,
		LastName,
		Password,
		Created_On,
		URM.RoleID as Role,
		Status
		FROM ".$db_table_prefix."User_Details UD, ".$db_table_prefix."User_Role_Map URM
		WHERE UD.User_ID = URM.User_ID
		");

    $stmt->execute();
    $stmt->bind_result($UserID, $UserName, $FirstName, $LastName, $Email, $Password, $MemberSince, $Role, $status);
    while ($stmt->fetch()){
        $row[] = array('UserID' => $UserID,
            'UserName' => $Email,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'Email' => $Email,
            'Password' => $Password,
            'MemberSince' => $MemberSince,
            'Role' => $Role,
            'Status' => $status);
    }
    $stmt->close();
    return ($row);
}

function createAd($category, $subCategory, $adTitle, $adDescription,  $price, $location, $contactName, $contactNo, $contactEmail) {

    $categoryId = getCategoryId($category);
    $subCategoryId = getSubCategoryId($subCategory);

    global $mysqli, $db_table_prefix, $loggedInUser;

    $guid = getGUID();
    $date = date("Y-m-d H:i:s");

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "ad (
		ad_id,
		user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		Cat_id,
		sub_Cat_id,
		created_on,
		active
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		1
		)"
    );
    $stmt->bind_param("ssssssssssss", $guid, $loggedInUser->user_id, $adTitle, $adDescription,  $price, $location, $contactName, $contactNo, $contactEmail, $categoryId, $subCategoryId, $date);
    $result = $stmt->execute();
    $stmt->close();
    return $guid;
}

function getAllAds($userId) {

  global $mysqli,$db_table_prefix;

  $stmt = $mysqli->prepare("SELECT
		ad.ad_id as ad_id,
		ad.user_id as user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		category,
		sub_category,
		created_on,
		active,
		fr.new_file_name as new_file_name
		FROM ".$db_table_prefix."ad, ".$db_table_prefix."main_category, ".$db_table_prefix."sub_category,
		".$db_table_prefix."filesRepository fr
		WHERE ad.User_ID = ?
		AND ad.cat_id = main_category.cat_id
		AND ad.sub_cat_id = sub_category.sub_id
		AND fr.ad_id = ad.ad_id
		ORDER BY created_on desc
		");
    $stmt->bind_param("s", $userId);
  $stmt->execute();
  $stmt->bind_result($ad_id, $user_id, $posting_title, $posting_body,  $price, $location, $contact_name, $contact_no,
      $contact_email, $category, $sub_category, $created_on, $active, $new_file_name);
  while ($stmt->fetch()){
      $row[] = array(
          'AdID' => $ad_id,
          'UserID' => $user_id,
          'AdTitle' => $posting_title,
          'AdDescription' => $posting_body,
          'Price' => $price,
          'Location' => $location,
          'ContactName' => $contact_name,
          'ContactNo' => $contact_no,
          'ContactEmail' => $contact_email,
          'Category' => $category,
          'SubCategory' => $sub_category,
          'CreatedOn' => $created_on,
          'Active' => $active,
          'NewFileName' => $new_file_name);
  }
  $stmt->close();
  return ($row);
}

function getAllAdId($adId) {

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		ad.ad_id as ad_id,
		ad.user_id as user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		category,
		sub_category,
		created_on,
		active,
		fr.new_file_name as new_file_name
		FROM ".$db_table_prefix."ad, ".$db_table_prefix."main_category, ".$db_table_prefix."sub_category,
		".$db_table_prefix."filesRepository fr
		WHERE ad.ad_ID = ?
		AND ad.cat_id = main_category.cat_id
		AND ad.sub_cat_id = sub_category.sub_id
		AND fr.ad_id = ad.ad_id
		ORDER BY created_on desc
		");
    $stmt->bind_param("s", $adId);
    $stmt->execute();
    $stmt->bind_result($ad_id, $user_id, $posting_title, $posting_body,  $price, $location, $contact_name, $contact_no,
        $contact_email, $category, $sub_category, $created_on, $active, $new_file_name);
    while ($stmt->fetch()){
        $row[] = array(
            'AdID' => $ad_id,
            'UserID' => $user_id,
            'AdTitle' => $posting_title,
            'AdDescription' => $posting_body,
            'Price' => $price,
            'Location' => $location,
            'ContactName' => $contact_name,
            'ContactNo' => $contact_no,
            'ContactEmail' => $contact_email,
            'Category' => $category,
            'SubCategory' => $sub_category,
            'CreatedOn' => $created_on,
            'Active' => $active,
            'NewFileName' => $new_file_name);
    }
    $stmt->close();
    return ($row);
}

function getAllByCatId($catId) {

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		ad.ad_id as ad_id,
		ad.user_id as user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		category,
		sub_category,
		created_on,
		active,
		fr.new_file_name as new_file_name
		FROM ".$db_table_prefix."ad, ".$db_table_prefix."main_category, ".$db_table_prefix."sub_category,
		".$db_table_prefix."filesRepository fr
		WHERE ad.cat_id = ?
		AND ad.cat_id = main_category.cat_id
		AND ad.sub_cat_id = sub_category.sub_id
		AND fr.ad_id = ad.ad_id
		ORDER BY created_on desc
		");
    $stmt->bind_param("s", $catId);
    $stmt->execute();
    $stmt->bind_result($ad_id, $user_id, $posting_title, $posting_body,  $price, $location, $contact_name, $contact_no,
        $contact_email, $category, $sub_category, $created_on, $active, $new_file_name);
    while ($stmt->fetch()){
        $row[] = array(
            'ad_id' => $ad_id,
            'UserID' => $user_id,
            'ad_title' => $posting_title,
            'AdDescription' => $posting_body,
            'add_price' => $price,
            'Location' => $location,
            'ContactName' => $contact_name,
            'ContactNo' => $contact_no,
            'ContactEmail' => $contact_email,
            'Category' => $category,
            'SubCategory' => $sub_category,
            'CreatedOn' => $created_on,
            'Active' => $active,
            'NewFileName' => $new_file_name);
    }
    $stmt->close();
    return ($row);
}

function searchAllAds($catId, $subCatId, $title, $description) {

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		ad.ad_id as ad_id,
		ad.user_id as user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		category,
		sub_category,
		created_on,
		active,
		fr.new_file_name as new_file_name
		FROM ".$db_table_prefix."ad, ".$db_table_prefix."main_category, ".$db_table_prefix."sub_category,
		".$db_table_prefix."filesRepository fr
		WHERE ad.cat_id like '%".$catId."%'
		and ad.sub_cat_id like '%".$subCatId."%'
		and ad.posting_title like '%".$title."%'
		and ad.posting_body like '%".$description."%'
		AND ad.cat_id = main_category.cat_id
		AND ad.sub_cat_id = sub_category.sub_id
		AND fr.ad_id = ad.ad_id
		ORDER BY created_on desc
		");
    $stmt->execute();
    $stmt->bind_result($ad_id, $user_id, $posting_title, $posting_body,  $price, $location, $contact_name, $contact_no,
        $contact_email, $category, $sub_category, $created_on, $active, $new_file_name);
    while ($stmt->fetch()){
        $row[] = array(
            'ad_id' => $ad_id,
            'UserID' => $user_id,
            'ad_title' => $posting_title,
            'AdDescription' => $posting_body,
            'add_price' => $price,
            'Location' => $location,
            'ContactName' => $contact_name,
            'ContactNo' => $contact_no,
            'ContactEmail' => $contact_email,
            'Category' => $category,
            'SubCategory' => $sub_category,
            'CreatedOn' => $created_on,
            'Active' => $active,
            'NewFileName' => $new_file_name);
    }
    $stmt->close();
    return ($row);
}

function getAllBySubCatId($subCatId) {

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		ad.ad_id as ad_id,
		ad.user_id as user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		category,
		sub_category,
		created_on,
		active,
		fr.new_file_name as new_file_name
		FROM ".$db_table_prefix."ad, ".$db_table_prefix."main_category, ".$db_table_prefix."sub_category,
		".$db_table_prefix."filesRepository fr
		WHERE ad.sub_cat_id = ?
		AND ad.cat_id = main_category.cat_id
		AND ad.sub_cat_id = sub_category.sub_id
		AND fr.ad_id = ad.ad_id
		ORDER BY created_on desc
		");
    $stmt->bind_param("s", $subCatId);
    $stmt->execute();
    $stmt->bind_result($ad_id, $user_id, $posting_title, $posting_body,  $price, $location, $contact_name, $contact_no,
        $contact_email, $category, $sub_category, $created_on, $active, $new_file_name);
    while ($stmt->fetch()){
        $row[] = array(
            'ad_id' => $ad_id,
            'UserID' => $user_id,
            'ad_title' => $posting_title,
            'AdDescription' => $posting_body,
            'add_price' => $price,
            'Location' => $location,
            'ContactName' => $contact_name,
            'ContactNo' => $contact_no,
            'ContactEmail' => $contact_email,
            'Category' => $category,
            'SubCategory' => $sub_category,
            'CreatedOn' => $created_on,
            'Active' => $active,
            'NewFileName' => $new_file_name);
    }
    $stmt->close();
    return ($row);
}

function getAllAdsByUserAndStatus($userId, $active) {

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		ad_id,
		user_id,
		posting_title,
		posting_body,
		price,
		location,
		contact_name,
		contact_no,
		contact_email,
		category,
		sub_category,
		created_on,
		active
		FROM ".$db_table_prefix."ad, ".$db_table_prefix."main_category, ".$db_table_prefix."sub_category
		WHERE User_ID = ?
		AND active = ?
		AND ad.cat_id = main_category.cat_id
		AND ad.sub_cat_id = sub_category.sub_id
		ORDER BY created_on desc
		");
    $stmt->bind_param("ss", $userId, $active);
    $stmt->execute();
    $stmt->bind_result($ad_id, $user_id, $posting_title, $posting_body,  $price, $location, $contact_name, $contact_no,
        $contact_email, $category, $sub_category, $created_on, $active);
    while ($stmt->fetch()){
        $row[] = array(
            'AdID' => $ad_id,
            'UserID' => $user_id,
            'AdTitle' => $posting_title,
            'AdDescription' => $posting_body,
            'Price' => $price,
            'Location' => $location,
            'ContactName' => $contact_name,
            'ContactNo' => $contact_no,
            'ContactEmail' => $contact_email,
            'Category' => $category,
            'SubCategory' => $sub_category,
            'CreatedOn' => $created_on,
            'Active' => $active);
    }
    $stmt->close();
    return ($row);
}

function createFilesRepositoryRec($baseURL, $adId, $currentFolder, $destinationFolder, $newFileName, $fileSaveFolder, $fileType, $fileTemp, $fileSize, $fileExtension, $fileName, $ip) {

    global $mysqli, $db_table_prefix, $loggedInUser;

    $guid = getGUID();
    $actualURL = "$baseURL/displayFile.php?rid=$guid";

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "filesRepository (
		file_id,
		user_id,
		ad_id,
		current_folder,
        destination_folder,
        new_file_name,
        file_save_folder,
        file_type,
        file_temp,
        file_size,
        file_extension,
        file_name,
        actual_url,
        IPADDRESS,
        deleteflag
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		0
		)"
    );
    $stmt->bind_param("ssssssssssssss", $guid, $loggedInUser->user_id, $adId, $currentFolder, $destinationFolder, $newFileName, $fileSaveFolder, $fileType, $fileTemp, $fileSize, $fileExtension, $fileName, $actualURL, $ip);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

function getCategoryId($category)
{
    $out = '0';

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		cat_id
		FROM ".$db_table_prefix."main_category
		WHERE
		category = ?
		LIMIT 1");
    $stmt->bind_param("s", $category);

    $stmt->execute();
    $stmt->bind_result($categoryId);
    while ($stmt->fetch()){
        $out = $categoryId;
        break;
    }
    $stmt->close();
    return ($out);
}

function getSubCategoryId($subCategory)
{
    $out = '0';

    global $mysqli,$db_table_prefix;

    $stmt = $mysqli->prepare("SELECT
		sub_id
		FROM ".$db_table_prefix."sub_category
		WHERE
		sub_category = ?
		LIMIT 1");
    $stmt->bind_param("s", $subCategory);

    $stmt->execute();
    $stmt->bind_result($id);
    while ($stmt->fetch()){
        $out = $id;
        break;
    }
    $stmt->close();
    return ($out);
}

function createHousingForRentRec($adId, $location, $postal, $ft_2, $rent, $availableOn, $beedroom, $bathroom, $laundry, $parking, $pets)
{
    global $mysqli, $db_table_prefix;

    $guid = getGUID();

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "h_for_rent (
		h_rent_pref_id,
		location,
		postal_code,
		ft_2,
		rent,
		available_on,
		bedroom,
		bathroom,
		laundry,
		parking,
		pets
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?,
		?,
		?,
        ?,
        ?,
        ?
		)"
    );
    $stmt->bind_param("sssssssssss", $guid, $location, $postal, $ft_2, $rent, $availableOn, $beedroom, $bathroom, $laundry, $parking, $pets);
    $result = $stmt->execute();
    $stmt->close();
    if($result == 1) {
        return mapPreference($adId, $guid);
    } else {
        return $result;
    }
}

function mapPreference($adId, $prefId)
{
    global $mysqli, $db_table_prefix;

    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "ad_pref_map (
		ad_ID,
		pref_ID
		)
		VALUES (
		?,
		?
		)"
    );
    $stmt->bind_param("ss", $adId, $prefId);
    //print_r($stmt);
    $result = $stmt->execute();
    //print_r($result);
    $stmt->close();
    return $result;
}

function endsWith($haystack, $needle) {
    // search forward starting from end minus needle length characters
    return $needle === "" || (($temp = strlen($haystack) - strlen($needle)) >= 0
        && strpos($haystack, $needle, $temp) !== false);
}
?>

