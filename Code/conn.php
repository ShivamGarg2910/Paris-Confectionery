<?php
$conn=mysqli_connect("localhost","root","","paris_confectionary_shop");
    if(isset($_POST['Login']))
	{
        $login = $_POST['userid'];
        $password = $_POST['pswrd'];
        $result = $conn->query("SELECT * FROM login WHERE Login = '".$login."' AND  Password = '".$password."'");

        if ($result->num_rows > 0) {
            header("Location:home.php");
        } else {
		echo "Error";
        header("Location:login.html");
        }
	}
?>
