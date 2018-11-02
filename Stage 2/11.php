<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=yes">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="../web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png"/>

    <script type="text/javascript">
    //	$(document).ready(function() {
		    //var max_fields      = 10; //maximum input boxes allowed
	//	    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	//	    var add_button      = $(".add_field_button"); //Add button ID
		    
	//	    var x = 1; //initlal text box count
	//	    $(add_button).click(function(e){ //on add input button click
	//	        e.preventDefault();
	//	        if(x < max_fields){ //max input box allowed
	//	            x++; //text box increment
	//	            $(wrapper).append('<div><input type="text" name="mytext[]"/><a href="#" class="remove_field">Remove</a></div>'); //add input box
	//	        }
	//	    });		    
	//	    $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
	//	        e.preventDefault(); $(this).parent('div').remove(); 
	//	        x--;
	//	    })
	//	});
    </script>    
</head>
<body>
	<div class="container-fluid">	
		<!-----------------------------		
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li class="active"><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>		
		---------------------------------------->	
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
					<form id="security" action="11.php" method="POST">
						<?php include('../connect11.php') ?>
						<h3>Security Services</h3>
						<br>						
						<fieldset>
							<br>
							<label>Will this server house personally identifiable information or confidential data ?</label>						
								<input type="radio" name="yesno" value="yesCheck">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesno" value="noCheck">&nbsp;No
							<br>
						</fieldset>
						<br>
						<h3>Antivirus</h3>						
						<hr>						
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Name:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input for="antivirus" name="name" value="<?php echo $name; ?>" type="text" class="form-control" required>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Specification:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input for="antivirus" name="specification" value="<?php echo $specification; ?>" type="text" class="form-control" required>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Licensing:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input for="antivirus" name="licensing" value="<?php echo $licensing; ?>" type="text" class="form-control" required>
								</div>							
							</div>
							<br>							
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">SSL Certificate:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input type="text" name="sslcertificate" value="<?php echo $sslcertificate; ?>" class="form-control" required>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Type of SSL Certificate:</label>
								</div>
								<div class="col col-md-3 col-lg-2">
									<select name="typeofssl" class="form-control">
										<option value="default" disabled selected hidden>--select--</option>
										<option value="">Standard</option>
										<option value="">Wild card</option>															
									</select>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Multi SAN Certificate Requirement if any:</label>
								</div>
								<div class="col col-md-5 col-lg-6">
									<input type="text" name="multisan" value="<?php echo $multisan; ?>" class="form-control" required>
								</div>							
							</div>							
						</fieldset>
						<br>
						<br>
						<!--------------------------
						<fieldset>
							<div class="input_fields_wrap">
							    <button class="add_field_button">Add More Fields</button>
							    <div><input type="text" name="mytext[]" onclick="javascript:function()"></div>
							</div>
						</fieldset>
						----------------------------------------------->
						
						<h3>Necessary access on Azure/AWS subscription</h3>	
						<hr>					
						<fieldset>
						<br>							
							<div class="row">
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">Name:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="name1" value="<?php echo $name1; ?>" class="form-control" required>
										</div>							
									</div>
								</div>
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">User Id:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="userid1" value="<?php echo $userid1; ?>" class="form-control" required>
										</div>							
									</div>
								</div>															
							</div>
							<br>
							<div class="row">
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">Name:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="name2" value="<?php echo $name2; ?>" class="form-control" required>
										</div>							
									</div>
								</div>
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">User Id:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="userid2" value="<?php echo $userid2; ?>" class="form-control" required>
										</div>							
									</div>
								</div>															
							</div>	
							<br>
							<div class="row">
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">Name:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="name3" value="<?php echo $name3; ?>" class="form-control" required>
										</div>							
									</div>
								</div>
								<div class="col col-md-6 col-lg-6">
									<div class="row">
										<div class="col-2 col-md-3 col-lg-3">
											<label class="required">User Id:</label>
										</div>
										<div class="col-10 col-md-9 col-lg-8">
											<input type="text" name="userid3" value="<?php echo $userid3; ?>" class="form-control" required>
										</div>							
									</div>
								</div>															
							</div>
							<br>				
						</fieldset>
						<div class="row">
							<div class="col col-md-6 col-lg-6">
								
							</div>
							<div class="col col-md-6 col-lg-6">
								<p style="color: red">*For BOSCH Employees provide NT ID</p>
							</div>							
						</div>
						<br>
						<a href="12.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
						<button type="button" class="btn btn-primary" style="margin-top: 8px">Save</button>
						<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>						
					</form>									
				</div>	
		</div>	
	</div>
</body>
<!-- Copyright -->

<div class="copyright">
		<!-- Copyright -->
		<div class="footer-copyright text-center py-3"><b>© 2018 Copyright:</b>
			<a href="https://www.bosch.in/">bosch.in</a>
		</div>
		<!-- Copyright -->
</div>
<div class="bottom_ribbon"><img src="../img/bosch_ribbon.png"></div>
</html>