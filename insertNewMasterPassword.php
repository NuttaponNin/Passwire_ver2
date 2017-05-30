<?php
include("connect.php");
$masterID = $_GET['mst'];
$password = $_POST['passHid'];
$graphical = "";
$graphicalScore = 0;
//$confirm_password = $_POST['confirm_pass'];
// echo "MasterID is ";
// echo ($masterID);
// echo "<br>";
// echo "Password is ";
// echo ($password);
// echo "<br>";
// echo "Confirm Password is ";
// echo ($password);
$strSQL = "UPDATE masteraccount SET masterTextPassword='" . $password . "',masterGraphicalPassword='" . $graphical . "',graphicalScore='" . $graphicalScore . "' ";
$strSQL .="WHERE masterID = '" . $masterID . "' ";
$objQuery = mysql_query($strSQL);

//mysql_query($strSQL)
if ($objQuery) {
	header("location:forgotComplete.php");
	# code...
}else{
	header("location:resetMasterPassword.php?mst=".$masterID);
}

//header("location:forgotComplete.php")
?>