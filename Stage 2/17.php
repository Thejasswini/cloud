<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale = 1.0" shrink-to-fit=no">
    <!-- Bootstrap CSS --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
	
    <script type="text/javascript">
    	function checkvalue(val)
		{
		    if(val==="Others")
		       document.getElementById('escMatrix').style.display='block';
		    else
		       document.getElementById('escMatrix').style.display='none'; 
		}	

				$('#myModal').on('shown.bs.modal', function () {
					  $('#myInput').trigger('focus')
					})	
    </script>
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
    <link href="web-fonts-with-css/css/fontawesome-all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

	<title>Customer Service Request Form</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../img/bosch.png"/>
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
					<form id="Escalation" action="17.php" method="POST">
					<?php include('../connect17.php') ?>
					<h3>Escalation Matrix</h3>
					<br>					

					<!-- Modal -->
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
					        Are you sure you want to submit this form ?
					        <br>
					        <br>
					      </div>
					      <div class="modal-footer">
					      	<button type="button" class="btn btn-primary" style="float: left;" >Save changes</button>
						
					        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>					        
					        <a href="print.html" type="button" class="btn btn-success">Confirm</a>

					      </div>
					    </div>
					  </div>
					</div>
					<!------------------------------------------->


					<h4>
						<label>If any issues whom should I contact ? : RBEI email / Contact</label>
					</h4>
					<br>			
					<div class="row">
							<div class="col col-md-3 col-lg-4">
								<label class="required">What is the escalation matrix for communication ?</label>
							</div>
							<div class="col col-md-4 col-lg-3">
								<select name="escalation" onchange='checkvalue(this.value)'>
									<option value="default" disabled selected hidden>--select--</option>
									<option value="Production_Team">Production Team</option>
									<option value="Support_Team">Support Team</option>
									<option value="Others">Others</option>
								</select>
							</div>							
					</div>
					<div class="row">
					<div class="col col-md-3 col-lg-4">
						
					</div>					
						<div class="col col-md-4 col-lg-4">							
        					<input type="text" class="form-control" name="others" value="<?php echo $others; ?>" id="escMatrix" placeholder="(Others)" style='display:none;'/> 
						</div>     										
					</div>
					<br>
					<label>Contact Details:</label>
					<br>
					<table  class="pure-table pure-table-bordered" style="width:100%">
  						<thead>
  							<tr>
							    <th>S.NO</th>
							    <th>Name</th> 
							    <th>Email</th>
							    <th>Phone/Mobile</th>
							    <th>Role</th>
							    <th>Contact</th>
							 </tr>
  						</thead>
  						<tbody>
  							<tr>
							    <td>1</td>
							    <td>Ashok Kumar Babu</td> 
							    <td>Babu.AshokKumar@in.bosch.com</td>
							    <td> 123 </td>
							    <td></td>
							    <td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
							  <tr class="pure-table-odd">
							    <td>2</td>
							    <td>Prateek Narayan</td> 
							    <td>prateek.lokare@in.bosch.com</td>
							    <td> 123 </td>
							    <td></td>
							    <td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
							  <tr>
							  	<td>3</td>
							  	<td>Abhirup Dey</td>
							  	<td>fixed-term.Dey.Abhirup@in.bosch.com</td>
							  	<td> 13897 </td>
							  	<td>Intern / Build-team</td>
							  	<td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
							   <tr class="pure-table-odd">
							  	<td>4</td>
							  	<td>Thejaswini N Venkat Reddy</td>
							  	<td>fixed-term.VenkatReddy.ThejaswiniN@in.bosch.com</td>
							  	<td> 13897 </td>
							  	<td>Intern / Build-team</td>
							  	<td><a href=" http://mail.google.com/mail/?view=cm&fs=1&tf=1&to=&su=" target="_blank">Contact</a></td>
							  </tr>
  						</tbody>						 
					</table>
						<br>
						<button type="submit" class="btn btn-success" name="save_17" style="margin-top: 8px; float: right">Submit</button>	
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