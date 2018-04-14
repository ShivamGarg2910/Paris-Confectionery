<?php
if($conn=mysqli_connect("localhost","root","","paris_confectionary_shop"))
{
    //echo " connection successful";
}
else{
	echo "unsuccessful";
}
$startdate=Date('Y-m-d');
$enddate = Date('Y-m-d', strtotime("+7 days"));
$sql="SELECT * from inventory where expiry_date<='$enddate' and expiry_date>'$startdate' order by expiry_date";
$result=mysqli_query($conn,$sql);
?>

<table border="2">
<thead>
<caption>All Items to get expired in one week</caption>
    <tr>
	    <th/> Item
		<th/> Tag ID
		<th/> Expiry Date
	</tr>
</thead>
<tbody>
<?php
while($row=mysqli_fetch_assoc($result))
	{
	    echo "<tr>
		    <td>{$row['item']}</td>
		    <td>{$row['tag_id']}</td>
			<td>{$row['expiry_date']}</td>
			</tr>" ;
	}
?>