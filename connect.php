<?php
$con = mysqli_connect("localhost","root","","tsf_bank") or die($mysqli_error($con));
echo "connection successfull";
session_start();
?>