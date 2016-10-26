<?php 
require_once("config.php");

function suStrip($str) {
	$str = trim(addslashes($str));
	return $str;
}
//$result = mysqli_query($mysqli,"SELECT * FROM ad WHERE ='".$_POST['cat_id']."' AND ( ad_title LIKE '%".suStrip($_POST['searh_term'])."%' OR ad_desc LIKE '%".suStrip($_POST['searh_term'])."%')");
//$result = mysqli_query($mysqli,"SELECT * FROM ads WHERE ad_mani_cat='".$_POST['cat_id']."'");

$catId = $_POST['cat_id'];
$subCatId = $_POST['sub_cat_id'];
$title = $_POST['searh_term'];
$description = $_POST['searh_term'];

if (empty($catId)) {
	$catId = "";
}
if (empty($subCatId)) {
	$subCatId = "";
}

$result = searchAllAds($catId, $subCatId, $title, $description);

$record_array = array('size' => 0); 
	
$rowcount= 0;

$lastAdId = "";
foreach ($result as $row) {
	if ($lastAdId != $row['ad_id']) {
		$price = "NA";
		if (!empty($row['add_price']) || $row['add_price'] != "") {
			$price = "$ ".$row['add_price'];
		}
		$record_array['records'][$rowcount] = array('id' => $row['ad_id'],
			'title' => $row['ad_title'],'price' =>$price,
			'newFileName' => $row['NewFileName'],
			'category' => $row['Category'],
			'subCategory' => $row['SubCategory'],
			'createdOn' => $row['CreatedOn'],
			'location' => $row['Location'],);

		$rowcount++;
		$lastAdId = $row['ad_id'];
	}

}

$record_array['size'] = $rowcount;

$loop_counter = 0;
echo json_encode($record_array);


?>