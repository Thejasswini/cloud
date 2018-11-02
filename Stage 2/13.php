<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
		function identityManagementCheck() {
			if (document.getElementById('yesCheck_identityManagement').checked) {
				document.getElementById('identityManagement').disabled = false;				
			} else if (document.getElementById('noCheck_identityManagement').checked) {
				document.getElementById('identityManagement').disabled = true;				
			} 
		}
		function boyl() {
			if (document.getElementById('yesCheck_boyl').checked) {
				document.getElementById('ifYes_boyl').style.display = null;
				document.getElementById('ifNo_boyl').style.display = 'none';
			} else if (document.getElementById('noCheck_boyl').checked) {
				document.getElementById('ifNo_boyl').style.display = null;
				document.getElementById('ifYes_boyl').style.display = 'none';
			} 
		}

	</script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png"/>
</head>
<body>
	<div class="container-fluid">			
			<!--------------------------------	
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li class="active"><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>
			------------------------------------------------>			
			<div class="header">
					<div class="ribbon"><img src="../img/bosch_ribbon.png"></div>
					<div class="navbar" style="background-color: #FFF">
						<div class="row justify-content-between"> 
							<div class="col-4">
								<div class="logo">
									<img class="navbar-brand" src="../img/logo.png" style="max-width: 10%; height: auto; margin-left: 30px">
								</div>
							</div>
							<div class="col-4">
								<div class="home_href">
									<a href="../index.php"><i class="fas fa-home"></i>&nbsp;Home</a>
								</div>
							</div>
						</div>																								
					</div>
					<h2>RBEI Cloud Customer Service Request Form</h2>									
			</div>
			<div class="main">
				<div class="content">
					<?php if (isset($_SESSION['success'])) : ?>
					      <div class="alert alert-success" role="alert">
					      	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>					      	
					          <?php 
					          	echo $_SESSION['success']; 
					          	unset($_SESSION['success']);
					          ?>					      	
					      </div>
					<?php endif ?>
					<form id="identityManagement" action="13.php" method="POST">
					<?php include('../connect13.php') ?>						
						<h3>Identity Management</h3>
						<br>
						<div class="row">
							<div class="col col-md-4 col-lg-5">
								<label class="required">Do you have any identity management system and directory service which can integrate with your cloud services ?</label>
							</div>
							<div class="col col-md-2 col-lg-3">
								<input type="radio" name="yesno" value="yesCheck_identityManagement" onclick="javascript:identityManagementCheck();">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesno" value="noCheck_identityManagement" onclick="javascript:identityManagementCheck();">&nbsp;No
							</div>							
						</div>
						<br>
						<div class="row">
								<div class="col col-md-2 col-lg-2">
									<label class="required">Provide Description :</label>
								</div>
								<div class="col col-md-4 col-lg-5">
									<input type="text" class="form-control" name="description" value="<?php echo $description; ?>" id="identityManagement" required>
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-2">
									<label class="required">Required License :</label>
								</div>
								<div class="col col-md-4 col-lg-5">
									<input type="text" class="form-control" name="license" value="<?php echo $license; ?>" id="identityManagement" required>
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-2">
									<label class="required">Procure License:</label>
								</div>
								<div class="col col-md-4 col-lg-5">
									<input type="text" class="form-control" name="procurelicense" value="<?php echo $procurelicense; ?>" id="identityManagement" required>
								</div>								
							</div>	
							<br>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-5">
									<label class="required">Do you have software assurance license and use it in Cloud Services(BYOL) ?</label>	
								</div>
								<div class="col col-md-4 col-lg-3">									
									<input type="radio" class="radioBtn" onclick="javascript:boyl();" name="yesno1" id="yesCheck_boyl">Yes &nbsp;&nbsp; 
									<input type="radio" class="radioBtn" onclick="javascript:boyl() na;" name="yesno1" id="noCheck_boyl">No <br>							
								</div>								
							</div>	
							<br>
							<div id="ifYes_boyl" style="display: none">
								<br>
									<textarea class="pure-input-1" class="form-control" name="details" value="<?php echo $details; ?>"  rows="5" id="comment" placeholder="Bring your own License or License Mobility in case if you have license and use it in cloud services. 
Provide details if any the box" style="width: 98%"></textarea><br>								
							</div>
							<div id="ifNo_boyl" style="display:none">

							</div>
							<br>
						<a href="14.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>	
						<button type="button" class="btn btn-primary" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>	
																					
					</form>					
				</div>
				
							
		</div>	
	</div>	

</body>
<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
<div class="bottom_ribbon"><img src="../img/bosch_ribbon.png"></div>
</html>