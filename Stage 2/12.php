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
    	function backupRetentionCheck() {
			if (document.getElementById('yesCheck_backupRetention').checked) {
				document.getElementById('ifYes_backupRetention').style.display = null;
				document.getElementById('ifNo_backupRetention').style.display = 'none';
			} else if (document.getElementById('noCheck_backupRetention').checked) {
				document.getElementById('ifNo_backupRetention').style.display = null;
				document.getElementById('ifYes_backupRetention').style.display = 'none';
			} 
		}
		function checkvalue(val)
		{
		    if(val==="full")
		       document.getElementById('backup').style.display='block';
		    else
		       document.getElementById('backup').style.display='none'; 
		}

		function checkvalueDR1() {
			if (document.getElementById('yesCheck_DR1').checked) {
				document.getElementById('ifYes_DR1').style.display = null;
				document.getElementById('ifNo_DR1').style.display = 'none';
			} else if (document.getElementById('noCheck_DR1').checked) {
				document.getElementById('ifNo_DR1').style.display = null;
				document.getElementById('ifYes_DR1').style.display = 'none';
			} 
		}

		function checkvalueDR() {
			if (document.getElementById('yesCheck_DR').checked) {
				document.getElementById('ifYes_DR').style.display = null;
				document.getElementById('ifNo_DR').style.display = 'none';
			} else if (document.getElementById('noCheck_DR').checked) {
				document.getElementById('ifNo_DR').style.display = null;
				document.getElementById('ifYes_DR').style.display = 'none';
			} 
		}	
    </script>   
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
					<form id="security" action="12.php" method="POST">
						<?php include('../connect12.php') ?>
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Does the system require Redundancy ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="radio" name="yesno" value="yesCheck_SR">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesno" value="noCheck_SR">&nbsp;No
							</div>							
						</div>
						<br>
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Does the system require High Availability ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="radio" name="yesno1" value="yesCheck_HA">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" name="yesno1" value="noCheck_HA">&nbsp;No
							</div>							
						</div>
						<br>
						<div class="row">
							<div class="col col-md-4 col-lg-3">
								<label class="required">Does the system require Disaster Recovery ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input name="yesno2" id="yesCheck_DR1" type="radio" class="radioBtn" onclick="javascript:checkvalueDR1();">&nbsp;Yes &nbsp;&nbsp;
								<input name="yesno2" id="noCheck_DR1" type="radio" class="radioBtn" onclick="javascript:checkvalueDR1();">&nbsp;No
							</div>							
						</div>
						<br>
						<hr>
						<br>
						<fieldset>
							<br>
							<div class="row">
								<div class="col col-md-5 col-lg-4">
									<label class="required" style="padding-top: 5px">What is the type of backup normally across applications ?</label>
								</div>
								<div class="col col-md-4 col-lg-3">
									<select name="typeofbackup" style="height: inherit" class="form-control" onchange='checkvalue(this.value)'>
										<option value="default" disabled selected hidden>--select--</option>
										<option value="full">Full Backup</option>
										<option value="partial">Partial Backup</option>
									</select>
								</div>							
							</div>							
							<div class="row">								
								<div class="col col-md-5 col-lg-4" >
								</div>
								<div class="col col-md-4 col-lg-3">
									<input type="text" name="fullbackup" value="<?php echo $fullbackup; ?>" id="backup" placeholder="(eg. Daily, weekly, monthly)" style='display:none;' required/> 
								</div>									  								
								
							</div>	
							<br>											
						</fieldset>							
						<br>
						<hr>
						<h4>Backup Policy:</h4>
						<fieldset>							
							<div class="row">								
								<div class="col-6 col-md-6 col-lg-6">
									<h4>Time:</h4>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Daily<br>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Weekly<br>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Monthly<br>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Yearly<br>	
								</div>
								<div class="col-6 col-md-6 col-lg-6">
									<h4>Specification:</h4>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Storage Only<br>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Specific Server / services<br>
									<input type="checkbox" name="policy" value="">&nbsp;&nbsp;Snapshot
								</div>														
							</div>	
							<br>							
						</fieldset>				
						<hr>
						<div class="row">
							<div class="col col-md-5 col-lg-4">
								<label class="required">Is there a retention policy for backups ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="radio" class="radioBtn" name="yesno3" onclick="javascript:backupRetentionCheck();" id="yesCheck_backupRetention">&nbsp;Yes &nbsp;&nbsp;
								<input type="radio" class="radioBtn" name="yesno3" onclick="javascript:backupRetentionCheck();" id="noCheck_backupRetention">&nbsp;No
							</div>							
						</div>
						<br>						
						<div id="ifYes_backupRetention" style="display: none">
							<div class="row">
									<div class="col col-md-5 col-lg-4">
										
									</div>
									<div class="col col-md-4 col-lg-3">
										<input id="backupRetention" type="text" name="retention" value="<?php echo $retention; ?>" class="form-control" placeholder="(eg. 2 years, 3 years etc.)" required>
									</div>							
								</div>					
							<br>
						</div>
						<div id="ifNo_backupRetention" style="display:none"></div>												
						<br>
						<div class="row">
							<div class="col col-md-5 col-lg-4">
								<label>
									What is the RTO (Recovery Time Object) in hours ?
									<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="for more info"></i>
								</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="number" class="form-control" name="rto" value="<?php echo $rto; ?>" value="0" min="0" max="24">
							</div>							
						</div>
						<div class="row">							
							<div class="col col-md-5 col-lg-4">
								<p class="text-justify" style="color: #999">(RTO is the duration of time and a service level within which a business process must be restored after a disaster in order to avoid unacceptable consequences associated with a break in continuity. In other words, the RTO is the answer to the question: “How much time did it take to recover after notification of business process disruption?“)</p>
							</div>						
						</div>
						<br>
						<div class="row">
							<div class="col col-md-5 col-lg-4">
								<label>
									What is the RPO (Recovery Point Object) in hours ?
									<i class="fas fa-info-circle" style="font-size: 20px; padding: 10px; color: #999"  href="#" data-toggle="tooltip" data-placement="right" title="for more info"></i>
								</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<input type="number" class="form-control" name="rpo" value="<?php echo $rpo; ?>" value="0" min="0" max="24">
							</div>							
						</div>
						<div class="row">							
							<div class="col col-md-5 col-lg-4">
								<p class="text-justify" style="color: #999">(The RPO is the amount of time the business can be without the service, without incurring significant risks or significant lossesRecovery Point Objective (RPO) describes the interval of time that might pass during a disruption before the quantity of data lost during that period exceeds the Business Continuity Plan’s maximum allowable threshold or “tolerance.)”
								</p>	
							</div>						
						</div>
						<br>

						<div name="ifYes_DR1" id="ifYes_DR1" style="display: none">
							<div class="row">
								<div class="col col-md-5 col-lg-4">
									<label class="required"> Do you need coverage of DR (Disaster Recovery) ?</label>
								</div>
								<div class="col col-md-4 col-lg-3">
										<input type="radio" class="radioBtn" onclick="javascript:checkvalueDR();" name="yesno5" id="yesCheck_DR"> Yes &nbsp;&nbsp;
										<input type="radio" class="radioBtn" onclick="javascript:checkvalueDR();" name="yesno5" id="noCheck_DR">No<br>
								</div>															
							</div>																		
							<div name="ifYes_DR" id="ifYes_DR" style="display: none">
									<br>
									<div class="row">
										<div class="col col-md-5 col-lg-4">
											
										</div>
										<div class="col col-md-4 col-lg-3">
											<p style="color: red">*Will be disscussed during meetings</p>
										</div>
								
						 			</div>									
							</div>
							<div name="ifNo_DR" id="ifNo_DR" style="display:none">

							</div>							
						</div>
						<div name="ifNo_DR1" id="ifNo_DR1" style="display: none">
							
						</div>
						<br>
						<a href="13.php" class="btn btn-success" role="button" style="margin-top: 8px; margin-right: 10px; float: right">Save & Next</a>	
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