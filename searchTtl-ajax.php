<?php 
require_once("db-settings.php");

function suStrip($str) {
	$str = trim(addslashes($str));
	return $str;
}
$result = mysqli_query($mysqli,"SELECT * FROM ads WHERE ad_mani_cat='".$_POST['cat_id']."' AND  ad_title LIKE '%".suStrip($_POST['searh_term'])."%'");
//$result = mysqli_query($mysqli,"SELECT * FROM ads WHERE ad_mani_cat='".$_POST['cat_id']."'");


$record_array = array('size' => 0); 
	
$rowcount= mysqli_num_rows($result);
 
$record_array = array('size' => $rowcount); 


$loop_counter = 0; 
if ($rowcount > 0)
{
	
	while($row = mysqli_fetch_array($result))
  	{
		$record_array['records'][$loop_counter] = array('id' => $row['ad_id'],'title' => $row['ad_title'],'price' =>$row['add_price']);
		
		$loop_counter++;
	}

	$record_array['size'] = $loop_counter;
	
	echo json_encode($record_array);
}else{
	
	
echo json_encode($record_array);

}		

?>