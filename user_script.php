<?php
require("connect.php");
if(isset($_POST['submit']))
 {
 	$name = $_POST['name'];
 	$email = $_POST['email'];
 	$balance = $_POST['balance'];
 	$sql = "insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
 	$result = mysqli_query($con,$sql);
 	if($result)
 	{
 		echo "User data created!";
 		header('location:transmoney.php');
 	}
 }
 ?>