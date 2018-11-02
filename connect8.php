<?php

session_start();

$typeofdb ="";
$others ="";
$reqservices ="";
$others1 ="";

$zoning ="";
$sizeofdb ="";
$natureofdb ="";

$iops ="";
$yesno ="";
$replicationtool ="";

$encrypted ="";
$details ="";

$snapshot ="";
$timeinterval ="";

$db = mysqli_connect('localhost', 'root', '', 'srs');
if (isset($_POST['save_8'])) {
	$typeofdb = mysqli_real_escape_string($db, $_POST['typeofdb']);
	$others = mysqli_real_escape_string($db, $_POST['others']);
	$reqservices = mysqli_real_escape_string($db, $_POST['reqservices']);
	$others1 = mysqli_real_escape_string($db, $_POST['others1']);
	$zoning = mysqli_real_escape_string($db, $_POST['zoning']);
	$sizeofdb = mysqli_real_escape_string($db, $_POST['sizeofdb']);
	$natureofdb = mysqli_real_escape_string($db, $_POST['natureofdb']);
	$iops = mysqli_real_escape_string($db, $_POST['iops']);
	$yesno = mysqli_real_escape_string($db, $_POST['yesno']);
	$replicationtool = mysqli_real_escape_string($db, $_POST['replicationtool']);
	$encrypted = mysqli_real_escape_string($db, $_POST['encrypted']);
	$details = mysqli_real_escape_string($db, $_POST['details']);
	$snapshot = mysqli_real_escape_string($db, $_POST['snapshot']);
	$timeinterval = mysqli_real_escape_string($db, $_POST['timeinterval']);

	$query ="INSERT INTO db (typeofdb,others,reqservices,others1,zoning,sizeofdb,natureofdb,iops,yesno,replicationtool,encrypted,details,snapshot,timeinterval) VALUES('$typeofdb','$others','$reqservices','$others1','$zoning','$sizeofdb','$natureofdb','$iops','$yesno','$replicationtool','$encrypted','$details','$snapshot','$timeinterval')";

	mysqli_query($db, $query);  	
  	$_SESSION['success'] = "Previous Data saved Successfully !!";

  	echo $_SESSION['success'];     

    header('location: 10.php');

	} 	

?>


