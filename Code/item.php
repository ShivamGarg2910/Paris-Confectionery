<html>
<head>
    <link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
    <div class="container">
    <p>
        Item Entry Portal
    </p>
	<?php

	$max_space=21;
    $conn = mysqli_connect('localhost','root','','paris_confectionary_shop');
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


    if($sql="SELECT tag_id from inventory")
	{}
	else
	    echo "problem";
	$result1 = $conn->query($sql);
	$rowcount=mysqli_num_rows($result1);
	echo "Space left for ordering: ";
	ini_set( "display_errors", 0); 
    $diff=$max_space-$rowcount;
	echo $diff;
	echo "<br>";
	if(isset($_POST['Submit']))
	{
		if(diff>0)
		{
			$tag_id = $_POST['id'];
            $item = $_POST['name'];
		    $expiry_date=$_POST['expiry'];
		    $sql="INSERT INTO Inventory (item,tag_id,expiry_date) VALUES('$item', '$tag_id' , '$expiry_date')";
            $result = $conn->query($sql);
		}
		else{
			echo "No space to place order";
		}
	}
	echo "\n";
	?>
    <form method="post">
            ITEM ID: <input type="text" name="id"><br>
            ITEM NAME: <input type="text" name="name"><br>
            ITEM EXPIRY: <input type="date" name="expiry"><br>
            <br>
            <input type="Submit" name="Submit">
            <br>
    </form>
    </div>
</body>
</html>