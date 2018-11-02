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
		    if(val==="Others")
		       document.getElementById('DNShost').style.display='block';
		    else
		       document.getElementById('DNShost').style.display='none'; 
		}

		function additionalVolumeCheck() {
			if (document.getElementById('yesCheck_additionalVolume').checked) {
				document.getElementById('ifYes_additionalVolume').style.display = null;
				document.getElementById('ifNo_additionalVolume').style.display = 'none';
			} else if (document.getElementById('noCheck_additionalVolume').checked) {
				document.getElementById('ifNo_additionalVolume').style.display = null;
				document.getElementById('ifYes_additionalVolume').style.display = 'none';
			} 
		}

		$(function() {
	    	$("#add").click(function () {
	    		var newID = "inner2";
		    	$("#repeater").append($("#inner1").clone().appendTo("#inner").attr("class", newID));
			});
			$("#remove").click(function () {
		    	$("#repeater .inner2:last").remove();
			});
	    });
    </script>    
</head>
<body>
	<div class="container-fluid">	
			<!-------------------------		
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li class="active"><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					
					<li><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
					
					<li><a href="10.html"><i class="fas fa-cogs"></i>&nbsp;&nbsp;PAAS Services</a></li>
					<li><a href="11.html"><i class="fas fa-lock"></i>&nbsp;&nbsp;Security Services</a></li>
					<li><a href="12.html"><i class="fas fa-undo-alt"></i>&nbsp;&nbsp;Backup & High Availability</a></li>
					<li><a href="13.html"><i class="far fa-id-card"></i>&nbsp;&nbsp;Identity Management</a></li>
					<li><a href="14.html"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Pricing & Payment Options</a></li>
					<li><a href="15.html"><i class="fas fa-headset"></i>&nbsp;&nbsp;Support Operations</a></li>
					<li><a href="16.html"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Monitoring</a></li>
					<li><a href="17.html"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Escalation Matrix</a></li>
				</ul>
			</div>	
			------------------------------>		
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
					<form id="server" action="5.php" method="POST">
						<h3>Server Information Details</h3>
						<br>
						<fieldset>
						<br>							
							<div class="row">
								<div class="col col-md-* col-lg-3">									
									<label class="required">Select required environments: </label>
								</div>
								<div class="col col-md-* col-lg-5">									
									<input type="checkbox" name="production">&nbsp;Production<br>
									<input type="checkbox" name="devlopment">&nbsp;Development<br>
									<input type="checkbox" name="test">&nbsp;Testing<br>
									<input type="checkbox" name="uat">&nbsp;UAT
								</div>								
							</div>
							<br>
							<div class="row">
								<div class="col col-md-* col-lg-3">
									<label class="required">Select number of Servers required:</label>
								</div>
								<div class="col col-md-6 col-lg-3">
									<input type="number" class="form-control" value="0" min="0" required>									
								</div>							
							</div>
							<br>

							<div id="repeater" style="padding: 5px; margin-bottom: 5px;">
								<div class="inner1"  id="inner1" style="margin-bottom: 15px;">
									<fieldset style="background: #9e9e9e; margin-left: 5px;box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12) !important;">	
									<br>									
										<div class="col col-md col-lg">											
											<label><b>Configuration Details:</b></label>
										</div>
									<br>									
										<div class="row">
											<div class="col col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-md-4 col-lg-3">
														<label class="required">Required OS:</label>
													</div>
													<div class="col col-md-8 col-lg-7">														
														<select id="" class="form-control">
															<option value="" disabled selected hidden>---select---</option>
															<option value="">Windows</option>
															<option value="">Linux</option>
															<option value="">CentOS</option>
															<option value="">Red Hat</option>
														</select>
													</div>													
												</div>
												<br>
												<div class="row">
													<div class="col col-md-4 col-lg-3">
														<label class="required" for="os_version">OS Version:</label>
													</div>
													<div class="col col-md-8 col-lg-7">
														<select id="os_version" class="form-control">
															<option value="" disabled selected hidden>--select--</option>
															<option value="">OS Version 1</option>
															<option value="">OS Version 2</option>
															<option value="">OS Version 3</option>
														</select>
													</div>													
												</div>
												<br>
												<div class="row">
													<div class="col col-md-4 col-lg-3">
														<label class="required" for="server_type">Server Type:</label>
													</div>
													<div class="col col-md-8 col-lg-7">
														<select id="server_type" class="form-control">
															<option value="" disabled selected hidden>--select--</option>
															<option value="">Option 1</option>
															<option value="">Option 2</option>
															<option value="">Option 3</option>
														</select>
													</div>													
												</div>
											</div>											
											<div class="col col-md-6 col-lg-6">
												<div class="row">
													<div class="col col-md-4 col-lg-3">
														<label class="required" for="cores"> Cores(vcpu): </label>
													</div>
													<div class="col col-md-8 col-lg-7">
														<input id="cores" type="number" class="form-control" value="0" min="0" required>
													</div>													
												</div>
												<br>
												<div class="row">
													<div class="col col-md-4 col-lg-3">
														<label class="required" for="memory">Memory (GB):</label>
													</div>
													<div class="col col-md-8 col-lg-7">
														<input class="form-control" id="memory" type="number" value="0" min="0" required>
													</div>													
												</div>
												<br>
												<div class="row">
													<div class="col col-md-4 col-lg-3">
														<label class="required" for="storage">Storage (GB/TB):</label>
													</div>
													<div class="col col-md-8 col-lg-7">
														<input id="storage" class="form-control" type="number" value="0" min="0" required>
													</div>													
												</div>
											</div>
										</div>								
										<br>
										<div class="row">
											<div class="col col-md-* col-lg-4">
											<br>												
												<label class="required">Select number of servers required for this configuration:</label><br>
											</div>
											<div class="col col-md-6 col-lg-3">
												<br>
												<input type="number" class="form-control" value="0" min="0" required>
											</div>																					
										</div>										
									</fieldset>									
								</div>
								<div class="inner" id="inner" style="display: none"></div>								
							</div>							
 							&nbsp;<button id="remove" type="button" class="btn btn-danger" style="float: right; margin-right: 2%">Remove</button>
 							&nbsp;<button id="add" type="button" class="btn btn-primary" style="float: right; margin-right: 5px">+Add Field</button>
							<br>
						</fieldset>	
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required" for="runtime" style="padding: 5px">Server Runtime:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<input type="text" class="form-control" name="runtime" placeholder="(eg. 24x7 or Only business hours)" required>									
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required">Select Region cloud server to be deployed:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<div class="form-inline">
										<select id="region" class="form-control">
        									<option value="" disabled selected hidden>--select--</option>
        									<option value="">India</option>
        									<option value="">Germany</option>
        									<option value="">US</option>
        									<option value="">UK</option>
        								</select>
        								<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="info"></i>							
									</div>									
								</div>										
							</div>																		
						</fieldset>						
        				<hr>        				
        				<h3>Domain name registration</h3>
        				<br>
        				<fieldset>
        					<br>
        					<div class="row">
        						<div class="col col-md-2 col-lg-3">
        							<label class="required" for="domainName">Type preferred domain name:</label>        							
        						</div>
        						<div class="col col-md-3 col-lg-4">
        							<input type="text" class="form-control" name="domainName" required>
        						</div>        						
        					</div>
        					<br>
        					<div class="row">
        						<div class="col col-md-2 col-lg-3">
        							<label class="required">Select DNS hosting service provide:</label>
        						</div>
        						<div class="col col-md-3 col-lg-4">
        							<div class="form-inline">

        								<select name="DNShost" class="form-control" onchange='checkvalue(this.value)'>
		        							<option value="" disabled selected hidden> --select-- </option>
		        							<option value="GoDaddy">GoDaddy</option>
		        							<option value="Route53">Route53</option>
		        							<option value="DNSmadeEasy">DNSmadeEasy</option>
		        							<option value="Others">Others</option>
		        						</select> 
		        						<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="info"></i>       								
        							</div>        							
		        				</div>	        							
        					</div>  
        					<br>    					
        					<div class="row">
        						<div class="col col-md-2 col-lg-3">
        							
        						</div>
        						<div class="col col-md-3 col-lg-4">
        							<input type="text" class="form-control" name="DNShost" id="DNShost" placeholder="(required)" style='display:none;' required />
        						</div>        						
        					</div>        					       					
        				</fieldset>
        				<br>
        				<hr>

        				<!---------Storage Details--------->

        				<h3>Storage Details</h3>
        				<br>
        				<fieldset>
							<div class="row">
								<br>
								<div class="col col-md-2 col-lg-3">
									<label class="required" style="padding-top: 7px">Storage requirement:</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<select id="" class="form-control">
										<option value="default" disabled selected hidden>--select--</option>
										<option value="">Normal Storage</option>
										<option value="">Magnetic Storage</option>
										<option value="">SSD</option>
										<option value="">GSSD</option>
										<option value="">SSD PIOPS</option>
									</select>
								</div>	
								<br>						
							</div>
							<br>							
						</fieldset>
						<hr>
						<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required">&nbsp;Is file storage required ?</label>
								</div>
								<div class="col col-md-3 col-lg-4">
									<label class="radio-inline"><input type="radio" name="yesnoCheck" value="yesCheck">Yes</label>
									<label class="radio-inline"><input type="radio" name="yesnoCheck" value="noCheck">No</label>
								</div>							
						</div>					
						<hr>
						<div class="row">
								<div class="col col-md-2 col-lg-3">
									<label class="required">&nbsp;Do you require additional volumes ?</label>
								</div>
								<div class="col col-md-3 col-lg-4">									
									<label class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:additionalVolumeCheck();" name="yesno_additionalVolume" id="yesCheck_additionalVolume">Yes </label>
									<lable class="radio-inline"><input type="radio" class="radioBtn" onclick="javascript:additionalVolumeCheck();" name="yesno_additionalVolume" id="noCheck_additionalVolume">No <br>	</lable>						
								</div>													
						</div>	
						<br>																	
							<div id="ifYes_additionalVolume" style="display: none">
								<fieldset>
									<br>
									<div class="row">
										<div class="col col-md-2 col-lg-3">
											<label class="required" for="additionalVolume" type="text">Number of additional volumes:</label>
										</div>
										<div class="col col-md-3 col-lg-4">
											<input id="additionalVolume" class="form-control" type="Number" value="0" min="0" required>
										</div>							
									</div>
									<br>
									<div class="row">
										<div class="col col-md-2 col-lg-3">
											<label class="required" for="additionalVolume" type="text">Each volume size (GB):</label>
										</div>
										<div class="col col-md-3 col-lg-4">
											<input id="additionalVolume" class="form-control" type="text" required>											
										</div>																	
									</div>
									<br>															
								</fieldset>
							</div>
							<br>
							<div id="ifNo_additionalVolume" style="display:none">

							</div>
							<br>	
							<a href="6.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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