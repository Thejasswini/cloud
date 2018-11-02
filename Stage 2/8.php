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
    	function replicationModeCheck() {
			if (document.getElementById('yesCheck_replicationMode').checked) {
				document.getElementById('ifYes_replicationMode').style.display = null;
				document.getElementById('ifNo_replicationMode').style.display = 'none';
			} else if (document.getElementById('noCheck_replicationMode').checked) {
				document.getElementById('ifNo_replicationMode').style.display = null;
				document.getElementById('ifYes_replicationMode').style.display = 'none';
			} 
		}

		function checkvalue(val)
		{
		    if(val==="automated")
		       document.getElementById('snapshot').style.display='block';
		    else
		       document.getElementById('snapshot').style.display='none'; 
		}

		function checkvalueDB(val)
		{
		    if(val==="Others")
		       document.getElementById('select_db').style.display='block';
		    else
		       document.getElementById('select_db').style.display='none'; 
		}

		function chkRequiredServices(val)
		{
			 if(val==="Others")
		       document.getElementById('requiredServices').style.display='block';
		    else
		       document.getElementById('requiredServices').style.display='none';
		}		
    </script>  
</head>
<body>
	<div class="container-fluid">
	<!-------------------------			
			<div class="sidebar">
				<div class="logo"><img src="img/logo.png"></div>
				<ul>
					<li><a href="5.html"><i class="fas fa-server"></i>&nbsp;&nbsp;&nbsp;Server Details</a></li>
					<li><a href="6.html"><i class="fas fa-code-branch"></i>&nbsp;&nbsp;&nbsp;Network Devices & Services</a></li>
					<li class="active"><a href="8.html"><i class="fas fa-database"></i>&nbsp;&nbsp;Database Specification</a></li>
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
	------------------------------------->		
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
					<form id="database" action="8.php" method="POST">
					<?php include('../connect8.php') ?>						
						<h3>Database specification</h3>
						<br>
						<fieldset>
							<div class="row">
								<br>
								<div class="col col-md-3 col-lg-2">
									<label class="required" style="margin-top: 7px">Type of database:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select name="typeofdb" value="<?php echo $typeofdb; ?>" class="form-control" onchange='checkvalueDB(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="Oracle">Oracle</option>
										<option value="RDB">Relational DB</option>
										<option value="DDB">Distributed DB</option>
										<option value="KDB">Key Value DB</option>										
										<option value="NoSQL">NoSQL</option>
										<option value="Others">Others</option>								
									</select>
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="text" name="others" value="<?php echo $others; ?>"  id="select_db" class="form-control" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>							
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required">Required Services:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select id="" name="reqservices" class="form-control" value="<?php echo $reqservices; ?>" onchange='chkRequiredServices(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="">RDS</option>
										<option value="">Dynamo DB</option>
										<option value="">Mongo DB</option>	
										<option value="Others">Others</option>							
									</select>	
								</div>							
							</div>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="text" name="others1" value="<?php echo $others1; ?>" id="requiredServices" class="form-control" placeholder="(others)" style='display:none;'/> 
								</div>								
							</div>												
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">									
									<label class="required">Zoning Requirements:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="radio" name="zoning">&nbsp;Single Availability Zone<br>
									<input type="radio" name="zoning">&nbsp;Multi Availability Zone								
								</div>							
							</div>	
							<br>						
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3 col-lg-2">
									<label class="required" style="padding-top: 5px">Typical size of database:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<input id="" name="sizeofdb" value="<?php echo $sizeofdb; ?>" type="text" class="form-control" value="" required>
								</div>								
							</div>						
							<br>
							<div class="row">
								<br>
								<div class="col col-md-3 col-lg-2">
									<label class="required">Nature of DB activity:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<input type="radio" name="natureofdb" value="read">&nbsp;Read Mostly<br>
									<input type="radio" name="natureofdb" value="write">&nbsp;Write Mostly<br>
									<input type="radio" name="natureofdb" value="equal">&nbsp;Equal amount of Reads and Writes
								</div>
							</div>
							<br>							
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-12 col-lg-12">
									<label class="required">Any specific IOPS requirement for DB ?</label><br>
								</div>
								<br>
								<div class="col col-md-12 col-lg-12">
									<textarea class="form-control" name="iops" value="<?php echo $iops; ?>" rows="5" id="comment"></textarea>
								</div>							
							</div>
							<br>														
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-12 col-lg-12">
									<label class="required">Are the Database setup in replication mode for fail-over / reporting ?</label>
								</div>
								<br><br>
								<div class="col col-md-12 col-lg-12">
									<input type="radio" class="radioBtn" onclick="javascript:replicationModeCheck();" name="yesno" id="yesCheck_replicationMode"> Yes &nbsp;&nbsp;
									<input type="radio" class="radioBtn" onclick="javascript:replicationModeCheck();" name="yesno" id="noCheck_replicationMode">No<br>
								</div>															
							</div>						
														
							<div id="ifYes_replicationMode" style="display: none">
								<br>
									<label for="replicationMode" type="text">Mention the replication tools that are normally used:</label>
									<textarea class="form-control" rows="5" name="replicationtool" value="<?php echo $replicationtool; ?>" id="replicationMode" placeholder="Native / Data guard / DB visit"></textarea>
								<br>								
							</div>
							<div id="ifNo_replicationMode" style="display:none">

							</div>	
							<br>
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<label>Are any of the databases / DB elements encrypted at rest ?</label><br>
								<input type="radio" name="encrypted">Yes &nbsp;&nbsp;
								<input type="radio" name="encrypted">No<br>
							<br>
							<textarea class="form-control" rows="5" name="details" value="<?php echo $details; ?>" id="isEncryptedCheck" placeholder="Provide Details"></textarea>
							<br>
						</fieldset>
						<hr>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-3  col-lg-2">
									<label class="required" style="padding-top: 5px">Automated snapshot for DB instances:</label>
								</div>
								<div class="col col-md-3 col-lg-3">
									<select name="snapshot" value="<?php echo $snapshot; ?>" class="form-control" style="height: inherit" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="manual">Manual Snapshot</option>
										<option value="automated">Automated Snapshot</option>
									</select>
								</div>							
							</div>							
							<br>
							<div class="row">								
								<div name="snapshot" id="snapshot" style='display:none;'>
									<div class="col col-md-3  col-lg-2">
										<label class="required"  style="padding-top: 5px">Time Interval:</label>
									</div>
									<div class="col col-md-3 col-lg-3">
										<select class="form-control" name="timeinterval " value="<?php echo $timeinterval; ?>">
											<option value="default" disabled selected hidden>--select--</option>
											<option value="daily">Daily</option>
											<option value="weekly">Weekly</option>
											<option value="monthly">Monthly</option>
										</select>
									</div>									  								
								</div>
							</div>	
							<br>												
						</fieldset>	
						<br>
						<a href="10.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>
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