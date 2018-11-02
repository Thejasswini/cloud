<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
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
		function defaultGatewayCheck() {
			if (document.getElementById('yesCheck_defaultGateway').checked) {
				document.getElementById('ifYes_defaultGateway').style.display = null;
				document.getElementById('ifNo_defaultGateway').style.display = 'none';
			} else if (document.getElementById('noCheck_defaultGateway').checked) {
				document.getElementById('ifNo_defaultGateway').style.display = null;
				document.getElementById('ifYes_defaultGateway').style.display = 'none';
			} 
		}

		function loadBalancerCheck() {
			if (document.getElementById('yesCheck_loadBalancer').checked) {
				document.getElementById('ifYes_loadBalancer').style.display = null;
				document.getElementById('ifNo_loadBalancer').style.display = 'none';
			} else if (document.getElementById('noCheck_loadBalancer').checked) {
				document.getElementById('ifNo_loadBalancer').style.display = null;
				document.getElementById('ifYes_loadBalancer').style.display = 'none';
			} 
		}

		function vpnCheck() {
			if (document.getElementById('yesCheck_vpn').checked) {
				document.getElementById('ifYes_vpn').style.display = null;
				document.getElementById('ifNo_vpn').style.display = 'none';
			} else if (document.getElementById('noCheck_vpn').checked) {
				document.getElementById('ifNo_vpn').style.display = null;
				document.getElementById('ifYes_vpn').style.display = 'none';
			} 
		}

		function checkvalue(val)
		{
		    if(val==="Others")
		       document.getElementById('CDNprovider').style.display='block';
		    else
		       document.getElementById('CDNprovider').style.display='none'; 
		}
	</script> 
</head>
<body>
	<div class="container-fluid">
	<!-----------------------------			
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li class="active"><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Managament</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>	
		--------------------------------->		
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
					<form id="network" action="6.php" method="POST">
						<?php include('../connect6.php') ?>

						<!-----------------Application Gateway------------------------------->
						<div class="row">
								<div class="col col-md-4 col-lg-3">
									<label class="required">Do you require application gateway ?</label>
								</div>
								<div class="col col-md-3 col-lg-4" style="padding: 3px">									
									<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:defaultGatewayCheck();" name="yesno" id="yesCheck_defaultGateway">Yes &nbsp;&nbsp;</label>
									<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:defaultGatewayCheck();" name="yesno" id="noCheck_defaultGateway">No</label>									
								</div>								
						</div>
						<br>													
						<div id="ifYes_defaultGateway" style="display: none">
							<fieldset>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="defaultGateway" type="text" style="padding: 10px">IPv6 Default Gateway:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="defaultGateway" name="ipv6" value="<?php echo $ipv6; ?>" class="form-control" type="text" style="margin-top: 10px" required>
										<br>
									</div>									
								</div>																						
							</fieldset>
							<br>
						</div>
						<div id="ifNo_defaultGateway" style="display:none">

						</div>

						<!---------------------Load Balancer-------------------------->
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Do you require load balancer ?</label>
							</div>
							<div class="col col-md-3 col-lg-4" style="padding: 3px">
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:loadBalancerCheck();" name="yesno1" id="yesCheck_loadBalancer">Yes &nbsp;&nbsp; </label>
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:loadBalancerCheck();" name="yesno1" id="noCheck_loadBalancer">No </label>
							</div>							
						</div>
						<br>							
						<div id="ifYes_loadBalancer" style="display: none">
							<fieldset>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">Name:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="name" value="<?php echo $name; ?>" class="form-control" type="text" required>
									</div>									
								</div>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">IP Address:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="ipaddress" value="<?php echo $ipaddress; ?>" class="form-control" type="text" required>
									</div>									
								</div>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">Port:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="port" value="<?php echo $port; ?>" class="form-control" type="text" required>
									</div>									
								</div>
								<br>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="loadBalancer" type="text">Protocol:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<input id="loadBalancer" name="protocol" value="<?php echo $protocol; ?>" class="form-control" type="text" required>
									</div>									
								</div>	
								<br>													
							</fieldset>
							<br>
						</div>
						<div id="ifNo_loadBalancer" style="display:none">

						</div>	
						<!--------------------VPN Tunnel---------------------------->

						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Do require VPN tunnel ?</label>
							</div>
							<div class="col col-md-3 col-lg-4" style="padding: 3px">
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:vpnCheck();" name="yesno2" id="yesCheck_vpn">Yes &nbsp;&nbsp;</label>
								<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:vpnCheck();" name="yesno2" id="noCheck_vpn">No</label>
							</div>							
						</div>
						<br>							
						<div id="ifYes_vpn" style="display: none">
							<fieldset>
								<div class="row">
									<div class="col col-md-4 col-lg-2">
										<label class="required" for="vpn" type="text" style="margin-top: 10px">Tunneling Protocol type:</label>
									</div>
									<div class="col col-md-3 col-lg-4">
										<select id="vpn" class="form-control" name="tunnel" value="<?php echo $tunnel; ?>" style="margin-top: 6px">
											<option value="default" disabled selected hidden>--select--</option>
											<option value="IPsec">IPsec</option>
											<option value="PPTP">PPTP / MPPE</option>
											<option value="L2TP">L2TP</option>
										</select>
									</div>									
								</div>														
							</fieldset>
						</div>
						<div id="ifNo_vpn" style="display:none">

						</div>						
						<br>
						<hr>

						<!------------------------------------------------>
						
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									<label class="required" for="publicIP" type="text">Public IPs:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<input id="publicIP" class="form-control" name="publicip" value="<?php echo $publicip; ?>"  type="text" required>
								</div>								
							</div>	
							<br>						
						</fieldset>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									<label class="required" for="otherNetwork" type="text">Other network devices / services:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<input id="otherNetwork" class="form-control" name="othernd" value="<?php echo $othernd; ?>" type="text" required>
								</div>								
							</div>	
							<br>					
						</fieldset>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									<label class="required">Choose CDN Provider:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<select name="cdn" value="<?php echo $cdn; ?>" class="form-control" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="cloudFlare">Cloud Flare</option>
										<option value="maxcdn">MAX CDN</option>
										<option value="AWScloudfront">AWS Cloud Front</option>
										<option value="Others">Others</option>
									</select>										
								</div>							
							</div>
							<br>						
							<div class="row">
								<div class="col col-md-4 col-lg-2">
									
								</div>
								<div class="col col-md-3 col-lg-4">									
									<input type="text" name="others" value="<?php echo $others; ?>" class="form-control" id="CDNprovider" placeholder="(others)" style='display:none;' required /> 
								</div>								
							</div>							
						</fieldset>
						<br>
						<a href="8.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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