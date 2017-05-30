<?php
session_start();

require "connect.php";

include ("cryptographyinitforweb.php");

$passwordGraphic = $_GET['password'];
$passwordText = $_GET['passwordText'];

$masterID = $_SESSION['masterID'];

$key = "";
$hashKey = "";

$strSQL = "SELECT * FROM masteraccount WHERE 1 
		AND masterID = '".$masterID."'";

$hashText = "";
$hashGraphical = "";
$_SESSION["key"] = "";

$objQuery = mysql_query($strSQL) or die(mysql_error());
$objResult = mysql_fetch_array($objQuery);
$intNumRows = mysql_num_rows($objQuery);

if($objResult) {
		$hashText = $objResult["masterTextPassword"];
		$hashGraphical = $objResult["masterGraphicalPassword"];
		if(password_verify($passwordText ,$hashText) && password_verify($passwordGraphic, $hashGraphical)){
			// echo "yes";
			$key = $passwordText.$passwordGraphic;

			$i = 0;
			while( $i < 25000) {
				$key = hash("sha256",$key,TRUE);
    			$i++;
			}
			$hashKey = base64_encode ($key);

			$_SESSION['key'] = $hashKey;

			header("location:home.php");
		}
		else{
			// echo "no";
			header("location:masterPassword.html"); 
		}
		 
} else {
		header("location:masterPassword.html");
}

mysql_close();
?>