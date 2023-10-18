<?php session_start();
	$con = mysqli_connect("localhost","root","","finalproject");
	if (!$con)
		{
			die("Sorry!!! We are facing technical issue..");
		}
	$sql = "DELETE FROM `tblfoodadvertisement` WHERE `tblfoodadvertisement`.`advertisementID` = ".$_GET["id"];

	if (mysqli_query($con, $sql))
	{
		header('Location:ViewMyFoodAdvertisement.php');
	}
?>