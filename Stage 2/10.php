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
    	function checkvalue(val)
		{
		    if(val==="others")
		    {
		    	document.getElementById('cloudServiceProvider_aws').style.display='none';
		   		document.getElementById('cloudServiceProvider_azure').style.display='none';
		       	document.getElementById('cloudServiceProvider_others').style.display='block';
		    }
		    else if (val==="aws")
		    {
		    	document.getElementById('cloudServiceProvider_aws').style.display='block';
		    	document.getElementById('cloudServiceProvider_azure').style.display='none';
		      	document.getElementById('cloudServiceProvider_others').style.display='none'; 
		    }
		    	
		    else if (val==="azure")
		    {
		    	document.getElementById('cloudServiceProvider_aws').style.display='none';
		    	document.getElementById('cloudServiceProvider_azure').style.display='block';
		      	document.getElementById('cloudServiceProvider_others').style.display='none';
		    }
		}		

		function OnChangeCheckbox_aws (checkbox) {
	        if (checkbox.checked) {
	            document.getElementById('txtToggle_aws').style.display="block"; 
	        }
	        else {
	            document.getElementById('txtToggle_aws').style.display="none"; 
	        }
	    }

	    function OnChangeCheckbox_azure (checkbox) {
	        if (checkbox.checked) {
	            document.getElementById('txtToggle_azure').style.display="block"; 
	        }
	        else {
	            document.getElementById('txtToggle_azure').style.display="none"; 
	        }
	    }
    </script>   
</head>
<body>
	<div class="container-fluid">	
			<!--------------------------------------		
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					
					<li class="active"><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>	
			------------------------------------------>		
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
					<form id="paas" action="10.php" method="POST">
						<?php include('../connect10.php') ?>
						<h3>PaaS services</h3>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required" style="padding-top: 5px">Select cloud service provider:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select name="csprovider" value="<?php echo $csprovider; ?>" class="form-control" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="aws">AWS</option>
										<option value="azure">Azure</option>
										<option value="others">Others</option>
									</select>
								</div>							
							</div>
							<br>	

							<div name="nameofdb" id="cloudServiceProvider_aws" style='display:none;'>
								<br>
								<div class="row">
									<div class="col col-md-3 col-lg-3">									
										<label class="required">Name of application / service/ DB/ device:</label>
									</div>
									<div class="col col-md-3 col-lg-3">
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Glacier <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> RDS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> RedShift <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Dynamo DB <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Elastic Cache <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Lambda <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Route53 <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> AWS Autoscaling <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Kinesis <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Cloud Search <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Elastic Search <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Data pipeline <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> WAF / Shield<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> SNS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> SQS <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> Cloud front <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb" value=""/> IoT <br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="others" value="others_aws" onclick="OnChangeCheckbox_aws (this)"ID="chkAssociation_aws"/> Other
										&nbsp;&nbsp;&nbsp;<input type="text" class="form-control" value="<?php echo $others; ?>" Id="txtToggle_aws" placeholder="(Other)" style="display:none"/>
									</div>	
								</div>																						
							</div>	
												
							<div name="cloudServiceProvider_azure" id="cloudServiceProvider_azure" style='display:none;'>
								<br>
								<div class="row">
									<div class="col col-md-3 col-lg-3">
										<label class="required">Name of application / service/ DB/ device:</label>
									</div>
									<div class="col col-md-3 col-lg-3">
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Container Services <br> 
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Storage Accounts<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> CDN<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Notification Hub<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Redis Cache<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> SQL Database<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Cosmos DB<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Cognitive Services<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> IoT Hub<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Service Bus<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="nameofdb"/> Web Apps<br>
										&nbsp;&nbsp;&nbsp;<input type="checkbox" name="others" value="others_azure" onclick="OnChangeCheckbox_azure (this)" ID="chkAssociation_azure"/> Other
										&nbsp;&nbsp;&nbsp;<input type="text" Id="txtToggle_azure" class="form-control" value="<?php echo $others; ?>" placeholder="(other)" style="display:none"/>
									</div>
								</div>
							</div>
							<div name="others1 " id="cloudServiceProvider_others" style='display:none;'>
								<br>
								<label>Name of application / service/ DB/ device:</label>
								<textarea class="form-control" value="<?php echo $others1s; ?>" rows="5" id="comment" placeholder="Provide Description"></textarea><br> 
							</div>
							<br>
						</fieldset>	
						<br>
						<a href="11.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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