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
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png" />

	<script>
		function yesnoCheck() {
			if (document.getElementById('yesCheck').checked) {
				document.getElementById('ifYes').style.display = null;
				document.getElementById('ifNo').style.display = 'none';
			} else if (document.getElementById('noCheck').checked) {
				document.getElementById('ifNo').style.display = null;
				document.getElementById('ifYes').style.display = 'none';
			} 
		}
		function checkvalue(val)
		{
		    if(val==="others")
		       document.getElementById('cloudServiceProvider_others').style.display='block';
		    else
		       document.getElementById('cloudServiceProvider_others').style.display='none'; 
		}
	</script>	
</head>

<body>
	<div class="container-fluid">
		<!---------------------------
		<div class="sidebar">
			<div class="logo"><img src="img/logo.png"></div>
			<ul>
				<li><a href="1.php"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Requester Information</a></li>
				<li><a href="2.php"><i class="fas fa-poll-h"></i>&nbsp;&nbsp;&nbsp;Strategy</a></li>		
				<li class="active"><a href="3.php"><i class="fas fa-cloud"></i>&nbsp;&nbsp;Cloud Service Provider</a></li>
				</ul>
		</div>
		-------------------------------->
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
				<!-- Modal ---------------------
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h4 class="modal-title" id="exampleModalLongTitle">Confirm !</h4>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">					      	
					      	<br>					        
					        Are you sure you want to go to Stage 2 ?
					        <br>
					        <br>
					      </div>
					      <div class="modal-footer">
					      	<button type="button" class="btn btn-primary" style="float: left;" >Save changes</button>					      							
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>					        
					        <a href="../Stage 2/5.html" type="button" class="btn btn-success">Confirm</a>

					      </div>
					    </div>
					  </div>
					</div>
				--------------------------------->
					<form id="cloud_service_provider" action="3.php" method="POST">
							<h3>Cloud Service Provider</h3>							
							<br>
							<label class="required">Do you have existing cloud service subscription ? </label>
							Yes <input type="radio" class="radioBtn" onclick="javascript:yesnoCheck();" name="yesno" id="yesCheck"> &nbsp;&nbsp;
							No <input type="radio" class="radioBtn" onclick="javascript:yesnoCheck();" name="yesno" id="noCheck"><br>
							<br>							
							<div id="ifYes" style="display:none">								
								<fieldset>
									 <h4><b>Provide description:</b></h4>
									 <br>
									 	<div class="row">
									 		<div class="col col-md-4 col-lg-2">
									 			<label class="required" for="provider" type="text">&nbsp;Cloud Service Provider:</label>
									 		</div>
									 		<div class="col col-md-6 col-lg-5">
									 			<input id="provider" name="provider" value="<?php echo $provider; ?>" class="form-control" type="text" required>
									 		</div>									 		
									 	</div>
									 	<br>
									 	<div class="row">
									 		<div class="col col-md-4 col-lg-2">
									 			<label class="required" for="provider" type="text">&nbsp;Tennant ID:</label>
									 		</div>
									 		<div class="col col-md-6 col-lg-5">
									 			<input id="provider" class="form-control" name="tennant_id" value="<?php echo $tennant_id; ?>" type="text" required>
									 		</div>									 		
									 	</div>
									 	<br>
									 	<div class="row">
									 		<div class="col col-md-4 col-lg-2">
									 			<label class="required" for="provider" type="text">&nbsp;Account ID:</label>
									 		</div>
									 		<div class="col col-md-6 col-lg-5">
									 			<input id="provider" class="form-control" name="account_id" value="<?php echo $account_id; ?>" type="text" required>
									 		</div>									 		
									 	</div>
									 	<br>
									 	<div class="row">
									 		<div class="col col-md-4 col-lg-2">
									 			<label class="required" for="provider" type="text">&nbsp;Subscription Name:</label>
									 		</div>
									 		<div class="col col-md-6 col-lg-5">
									 			<input id="provider" class="form-control" name="subscription_name" value="<?php echo $subscription_name; ?>" type="text" required>
									 		</div>									 		
									 	</div>
									 	<div class="row">
									 		<div class="col col-md-4 col-lg-2">
									 			<label class="required" for="provider" type="text">&nbsp;Subscription ID:</label>
									 		</div>
									 		<div class="col col-md-6 col-lg-5">
									 			<input id="provider" class="form-control" name="subscription_id" value="<?php echo $value="<?php echo $subscription_id; ?>"; ?>" type="text" required>
									 		</div>									 		
									 	</div>
									 	<div class="row">
									 		<div class="col col-md-4 col-lg-2">
									 			<label class="required" for="provider" type="text">&nbsp;Subscription Owner:</label>
									 		</div>
									 		<div class="col col-md-6 col-lg-5">
									 			<input id="provider" class="form-control" name="subscription_owner" value="<?php echo $subscription_owner; ?>" type="text" required>
									 		</div>									 		
									 	</div>											
										<br>
										<div class="row">
											<div class="col col-md-4 col-lg-2">
												<label for="csp_description1" class="required">Description:</label>																														
											</div>
											<div class="col col-md-8 col-lg-10">
												<textarea id="csp_description1" class="form-control" name="description" value="<?php echo $description; ?>" rows="5" ></textarea>	
											</div>
										</div>
										<br>
										<div class="row">
											<div class="col col-md-4 col-lg-2">
												<label for="csp_description2" class="required">What can we do to accommodate you?</label>																														
											</div>
											<div class="col col-md-8 col-lg-10">
												<textarea id="csp_description2" class="form-control" name="accommodate" value="<?php echo $accommodate; ?>" rows="5" ></textarea>	
											</div>																				
										</div>									
								</fieldset>
							</div>
							<div id="ifNo" style="display:none">
								<fieldset>
									<h4><b>Provide required details</b></h4>
									<br>
									<div class="row">
										<div class="col col-md-4 col-lg-3">
											<label for="cloudServiceProvider" class="required">Select Cloud Service Provider:</label>
										</div>
										<div class="col col-md-6 col-lg-5">
											<select name="csprovider" value="<?php echo $csprovider; ?>" class="form-control" onchange='checkvalue(this.value)'>
												<option value="default" disabled selected hidden>--select--</option>
												<option value="aws">Amazon Web Services</option>
												<option value="azure">Microsoft Azure</option>
												<option value="googleapis">Google Cloud Services</option>
												<option value="digitalOcean">Digital Ocean</option>
												<option value="others">Others</option>
											</select>											
										</div>											
									</div>
									<div class="row">
										<div class="col col-md-4 col-lg-3">											
										</div>
										<div class="col col-md-6 col-lg-5">
											<input class="form-control" type="text" name="others" value="<?php echo $others; ?>" id="cloudServiceProvider_others" placeholder="others" style='display:none;'/>
										</div>									
									</div>								
									<br>
									<div class="row">
										<div class="col col-md-4 col-lg-3">
											<label class="required" for="region">Select region cloud service to be deployed:</label>								
										</div>
										<div class="col col-md-6 col-lg-5">
											<select name="deployed" value="<?php echo $deployed; ?>" id="region" class="form-control">
												<option value="default" disabled selected hidden>--select--</option>
												<option value="us">US</option>
												<option value="uk">UK</option>
												<option value="grm">Germany</option>
												<option value="in">India</option>										
											</select>											
										</div>										
									</div>								
								</fieldset>
							</div>
							<br>
							<button type="submit" class="btn btn-success" name="save_3" style="margin-top: 8px; float: right">save & Next</button>	
							<button type="button" class="btn btn-primary" style="margin-top: 8px">Save</button>
							<button type="button" class="btn btn-danger" style="margin-top: 8px">Cancel</button>				
					</form>
			</div>				
		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
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






