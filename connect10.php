<?php

session_start();

$csprovider ="";
$others ="";
$nameofdb ="";
$others1 ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');

if (isset($_POST['save_10'])) {
	$csprovider = mysqli_real_escape_string($db, $_POST['csprovider']);
	$others = mysqli_real_escape_string($db, $_POST['others']);
	$nameofdb = mysqli_real_escape_string($db, $_POST['nameofdb']);
	$others1 = mysqli_real_escape_string($db, $_POST['others1']);

	
	$query ="INSERT INTO paas (csprovider,others,nameofdb,others1) VALUES ('$csprovider','$others','$nameofdb','$others1')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 11.php');

	} 	

?>