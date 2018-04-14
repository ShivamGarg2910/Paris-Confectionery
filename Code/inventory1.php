<html>
	<head><b>WELCOME</b></head>
    <body>	
        <?php
            if($conn=mysqli_connect("localhost","root","","paris_confectionary_shop"))
            {
                //echo " connection successful";
            }
            else
            {
                echo "unsuccessful";
            }
            if($sql1="SELECT item,tag_id,expiry_date from inventory where item='flour' order by expiry_date;")
			{}//echo " query fetch";
            else
                echo "unsuc";
            if($sql2="SELECT item,tag_id,expiry_date from inventory where item='eggs' order by expiry_date;")
			{}   //echo " query fetch";
            else
                echo "unsuc";
            if($sql3="SELECT item,tag_id,expiry_date from inventory where item='cupcakes' order by expiry_date;")
			{}   //echo " query fetch";
            else
                echo "unsuc";
            if($sql4="SELECT item,tag_id,expiry_date from inventory where item='butter' order by expiry_date;")
			{}  //echo " query fetch";
            else
                echo "unsuc";
            
			if($result1=mysqli_query($conn,$sql1))
			{}  //echo " execution";
            else
                echo "un";
			if($result2=mysqli_query($conn,$sql2))
			{}  //echo " execution";
            else
                echo "un";
			if($result3=mysqli_query($conn,$sql3))
			{}  //echo " execution";
            else
                echo "un";
			if($result4=mysqli_query($conn,$sql4))
			{}  //echo " execution";
            else
                echo "un";
?>
<table border="2">
<thead>
<caption>Flour</caption>
    <tr>
		<th/> Tag ID
		<th/> Expiry Date
	</tr>
</thead>
<tbody>
<?php
    while($row=mysqli_fetch_assoc($result1))
	{
	    echo "<tr>
		    <td>{$row['tag_id']}</td>
			<td>{$row['expiry_date']}</td>
			</tr>" ;
	}
?>
</tbody>
</table>
<table border="2">
<caption>Eggs</caption>
<thead>
    <tr>
	    <th/> Tag ID
		<th/> Expiry Date
	</tr>
</thead>
<tbody>
<?php
    while($row=mysqli_fetch_assoc($result2))
	{
	    echo "<tr>
			<td>{$row['tag_id']}</td>
			<td>{$row['expiry_date']}</td>
			</tr>" ;
	}
?>
</tbody>
</table>
<table border="2">
<caption>Cupcakes</caption>
<thead>
    <tr>
	    <th/> Tag ID
		<th/> Expiry Date
	</tr>
</thead>
<tbody>
<?php
    while($row=mysqli_fetch_assoc($result3))
	{
	    echo "<tr>
		    <td>{$row['tag_id']}</td>
			<td>{$row['expiry_date']}</td>
			</tr>" ;
	}
?>
</tbody>
</table>
<table border="2">
<thead>
<caption>Butter</caption>
    <tr>
	    <th/> Tag ID
		<th/> Expiry Date
	</tr>
</thead>
<tbody>
<?php
    while($row=mysqli_fetch_assoc($result4))
	{
	    echo "<tr>
		    <td>{$row['tag_id']}</td>
			<td>{$row['expiry_date']}</td>
			</tr>" ;
	}
?>
</tbody>
</table>

<?php mysqli_close($conn); ?>
</body>
</html>