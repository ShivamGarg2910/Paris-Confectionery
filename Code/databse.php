<?php
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");
if($link = mysqli_connect("localhost", "root", "", "paris_confectionary_shop"))
	{
		echo "Connection done!!";
	}
	else {
		die("Insert Error!!");
	}
foreach($xml->children() as $item)
{
	$cat = $item['category'];
	//echo "<br/>";
	$tid = $item->tag_id;
	//echo "<br/>";
	$exdate = $item->expiry_date;
	//echo "<br/>";
	$sql = "INSERT INTO inventory(item, tag_id, expiry_date) values('$cat', '$tid', STR_TO_DATE('$exdate','%d-%m-%Y'));";
	$result = mysqli_query($link, $sql);
	if($result) {
		echo "Result Successfull!!";
	}
	else {
		
		echo "Result Failed!";
	}
}
?>