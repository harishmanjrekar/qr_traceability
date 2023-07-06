<!DOCTYPE html>
<html>
	<head>
		<title>Traceability | Home</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/mystyle.css">
		<link rel="stylesheet" href="css/mystyle1.css">
		<link rel="stylesheet" href="css/mystyle2.css">
		<link rel="stylesheet" href="css/mystyle3.css">
		<style>
			body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
			.w3-row-padding img {margin-bottom: 12px}
			/* Set the width of the sidebar to 120px */
			.w3-sidebar {width: 120px;background: #222;}
			/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
			#main {margin-left: 120px}
			/* Remove margins from "page content" on small screens */
			@media only screen and (max-width: 600px) {#main {margin-left: 0}}
			#quarter1 {background-color: #522B86;
			font-color: white;}
			#quarter2 {background-color: #00B5C7;
			font-color: white;}
			
		</style>
		<link rel="icon" href="images/gt.png"/>
	</head>

	<body class="w3-white">
			
		<div class="w3-top">
			<div class="w3-bar w3-white w3-card-2" id="myNavbar">
			<img src="images/gt.png" style="height:55px; width:120px;">
				<!-- Right-sided navbar links -->
				<div class="w3-right w3-hide-small">
					<div class="w3-dropdown-hover">
						<button class="w3-button w3-orange">Procurement</button>
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="add-proc.php" class="w3-bar-item w3-button">Add</a>
							<a href="show_QR.php" class="w3-bar-item w3-button">View</a>
							<a href="#" class="w3-bar-item w3-button">Assign</a>
							
						</div>
					</div>
					<div class="w3-dropdown-hover">
						<button class="w3-button w3-orange">Pre-Processing</button>
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="details.php" class="w3-bar-item w3-button">Add</a>
							<a href="show_pre_qr.php" class="w3-bar-item w3-button">View</a>
							<a href="#" class="w3-bar-item w3-button">Assign</a>
						</div>
					</div>
					<div class="w3-dropdown-hover">
						<button class="w3-button w3-orange">Production</button>
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="details2.php" class="w3-bar-item w3-button">Add</a>
							<a href="show_pro_qr.php" class="w3-bar-item w3-button">View</a>
							<a href="add-msme.php" class="w3-bar-item w3-button">Assign</a>
						</div>
					</div>
					<div class="w3-dropdown-hover">
						<button class="w3-button w3-orange">Post-Production</button>
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="details3.php" class="w3-bar-item w3-button">Add</a>
							<a href="#" class="w3-bar-item w3-button">View</a>
							<a href="#" class="w3-bar-item w3-button">Assign</a>
						</div>
					</div>
					<!--<a href="#" class="w3-bar-item w3-button"><font color="#DC756E">Association</font></a>-->
					<div class="w3-dropdown-hover">
						<button class="w3-button w3-orange">Distribution & Marketing</button>
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="details4.php" class="w3-bar-item w3-button">Add</a>
							<a href="#" class="w3-bar-item w3-button">View</a>
							<a href="#" class="w3-bar-item w3-button">Assign</a>
							
						</div>
					</div>
					<div class="w3-dropdown-hover">
						<button class="w3-button w3-orange">User Management</button>
						<div class="w3-dropdown-content w3-bar-block w3-card-4">
							<a href="form_username.php" class="w3-bar-item w3-button">Add</a>
							<a href="#" class="w3-bar-item w3-button">View</a>
							<a href="#" class="w3-bar-item w3-button">Assign</a>
							
						</div>
					</div>
					
					
				</div>
			</div>
			<!-- Hide right-floated links on small screens and replace them with a menu icon -->
			<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
			<i class="fa fa-bars w3-padding-right w3-padding-left"></i>
			</a>
		</div>

		<!-- Sidenav on small screens when clicking the menu icon -->
		<nav class="w3-sidenav w3-black w3-card-2 w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidenav">
			<a href="javascript:void(0)" onclick="w3_close()" class="w3-large w3-padding-16">Close ×</a>
			<a href="#about" onclick="w3_close()">About</a>
			<a href="#mblgn" onclick="w3_close()">Login/Register</a>
			<!--<a href="#contact" onclick="w3_close()">Contact</a>-->
		</nav>
				
		<!-- Icon Bar (Sidebar - hidden on small screens) -->
		<!--<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center w3-white">
		  <!-- Avatar image in top left corner
		  <img src="icons/uu1.png" style="width:100%;">
		  <!--<a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-orange">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>Home</p>
		  </a>
		  <!--<a href="#about" class="w3-bar-item w3-button w3-padding-large w3-orange">
			<i class="fa fa-user w3-xxlarge"></i>
			<p>Know More About Us</p>
		  </a>
		  <a href="homepage.php" class="w3-bar-item w3-button w3-padding-large w3-orange">
			<i class="fa fa-eye w3-xxlarge"></i>
			<p>Login/Register </p>
		  </a>
		  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-orange">
			<i class="fa fa-envelope w3-xxlarge"></i>
			<p>Contact Us</p>
		  </a>
		</nav>-->

		<!-- Navbar on small screens (Hidden on medium and large screens) -->
		<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar2">
		  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">Home</a>
			<a href="#about" class="w3-bar-item w3-button" style="width:25% !important">About Us</a>
			<a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">Login/Register</a>
			<a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">Contact Us</a>
		  </div>
		</div>
		
		<br>
		<br>
		<br>
		
		<!-- Page Content -->

		<marquee behavior="scroll" direction="left">Disclaimer: Draft POC without all links and complete data.</marquee>
		<h2 class="w3-text"><font color="#63468F"><center>Traceability POC (Draft)</center></font></h2>
		
			<div class="w3-row-padding w3-margin-bottom">
		
			<h3 class="w3-center" style="font-size:190%"><font color="#DC756E;"> Transaction Summary </font></h3><br>
				<div class="w3-quarter">
				<a href="details_total.php" style="text-decoration: none">
				  <div class="w3-container w3-padding-16" id="quarter1">
					<div class="w3-left"><font color="white"><i class="fa fa-comment w3-xxxlarge"></i></font></div>
					<div class="w3-right">
					  <h3><font color="white"></font></h3>
					</div>
					<?php
include('database_my.php');
$sel_query = "SELECT count(*) as total_count FROM `dbo.mastertable`;";
$result = mysqli_query($connection, $sel_query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $total_count1 = $row['total_count'];
} else {
  $total_count1 = 0; // Set a default value if the query fails
}
?>
					<div class="w3-clear"></div>
					<h4><font color="white">Total</font></h4>
					<h6><font color="white"><?php echo $total_count1; ?></font></h6>
				  </div>
				</a>  
				</div>
				<?php
include('database_my.php');
$sel_query = "SELECT count(*) as total_count FROM `dbo.mastertable` where status=1;";
$result = mysqli_query($connection, $sel_query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $total_count2 = $row['total_count'];
} else {
  $total_count2 = 0; // Set a default value if the query fails
}
?>
				<div class="w3-quarter">
				  <a href="details.php" style="text-decoration: none">
				  <div class="w3-container w3-padding-16" id="quarter1">
					<div class="w3-left"><font color="white"><i class="fa fa-eye w3-xxxlarge"></i></font></div>
					<div class="w3-right">
					  <h3></h3>
					</div>
					<div class="w3-clear"></div>
					<h4><font color="white">Procurement</font></h4>
					<h6><font color="white"><?php echo $total_count2; ?></font></h6>
				  </div>
				  </a>
				</div>
				<?php
include('database_my.php');
$sel_query = "SELECT count(*) as total_count FROM `mastertable` where status=2;";
$result = mysqli_query($connection, $sel_query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $total_count3 = $row['total_count'];
} else {
  $total_count3 = 0; // Set a default value if the query fails
}
?>
				<div class="w3-quarter">
				<a href="details2.php" style="text-decoration: none">
				  <div class="w3-container w3-padding-16" id="quarter1">
					<div class="w3-left"><font color="white"><i class="fa fa-share-alt w3-xxxlarge"></i></font></div>
					<div class="w3-right">
					  <h3></h3>
					</div>
					<div class="w3-clear"></div>
					<h4><font color="white">Pre Processing</font></h4>
					<h6><font color="white"><?php echo $total_count3; ?></font></h6>
				  </div>
				</a>  
				</div>
				<div class="w3-quarter">
				<a href="details_completed.php" style="text-decoration: none">
				  <div class="w3-container w3-text-black w3-padding-16" id="quarter1">
					<div class="w3-left"><font color="white"><i class="fa fa-users w3-xxxlarge"></i></font></div>
					<div class="w3-right">
					  <h3></h3>
					</div>
					<?php
include('database_my.php');
$sel_query = "SELECT count(*) as total_count FROM `mastertable` where status=3;";
$result = mysqli_query($connection, $sel_query);

if ($result) {
  $row = mysqli_fetch_assoc($result);
  $total_count4 = $row['total_count'];
} else {
  $total_count4 = 0; // Set a default value if the query fails
}
?>
					<div class="w3-clear"></div>
					<h4><font color="white">Production</font></h4>
					
					<h6><font color="white"><?php echo $total_count4; ?> </font></h6>
				  </div>
				</a>  
				</div>
				
		</div>
		
		
		
		
		
		
				
			
			  
			<!-- Footer -->
			<footer class="w3-content w3-padding-16 w3-text-orange w3-xlarge">
				<i class="fa fa-facebook-official w3-hover-opacity"></i>
				<i class="fa fa-instagram w3-hover-opacity"></i>
				<i class="fa fa-snapchat w3-hover-opacity"></i>
				<i class="fa fa-pinterest-p w3-hover-opacity"></i>
				<i class="fa fa-twitter w3-hover-opacity"></i>
				<i class="fa fa-linkedin w3-hover-opacity"></i>
				<p class="w3-medium">Powered by <a href="https://www.grantthornton.in/" target="_blank" class="w3-hover-text-green">Grant Thornton Bharat LLP</a></p>
			  <!-- End footer -->
			</footer>

		<!-- END PAGE CONTENT -->
		</div>

	</body>
</html>
