

<!DOCTYPE html>
<html>
	<head>
		<title>Traceability | Distribution and Marketing Details</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
		
		#msme-main {
			  font-family: Times New Roman;
			  border-collapse: collapse;
			  width: 80%;
		}
		#msme-main td, #msme-main th {
		  border: 0.5px solid #ddd;
		  padding: 5px;
		  padding-left: 5px;
		}
		#msme-main tr:nth-child(even){background-color: #f2f2f2;}
		#msme-main tr:hover {background-color: #ddd;}
		#msme-main th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: center;
			  background-color: #522B86;
			  color: white;
			 
		}
		.dropbtn {
		  background-color: blue;
		  color: white;
		  padding: 10px;
		  font-size: 10px;
		  border: none;
		  cursor: pointer;
		  width: 180%;
		  
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		  
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}

		.dropdown-content a:hover {background-color: #f1f1f1}

		.dropdown:hover .dropdown-content {
		  display: block;
		}

		.dropdown:hover .dropbtn {
		  background-color: blue;
		}
		
		#chart-container {
			width: 100%;
			height: auto;
		}
		#container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
					
		</style>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.min.js"></script>

		<link rel="icon" href="images/gt.png"/>
		
	</head>
	<body class="w3-light-grey">
		<!-- Top container -->
		<div class="w3-bar w3-top w3-orange w3-small" style="z-index:4">
		  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();">
		  <i class="fa fa-bars"></i>Menu</button>
		  <span class="w3-bar-item w3-right">
		  
		  <a href="index.php" class="w3-bar-item w3-button">Logout</a></span>
		</div>

		<!-- Sidebar/menu -->
		<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:290px;" id="mySidebar"><br>
		  <div class="w3-container w3-row">
			<div class="w3-col s4">
			  <img src="images/gt.png" class="w3-circle w3-margin-right" style="width:70px">
			</div>
			<div class="w3-col s8 w3-bar">
			  <span>Welcome<strong></strong></span><br>
			  <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
			  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
			  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>-->
			</div>
		  </div>
		  <hr>
		  <div class="w3-container">
			<h5>Dashboard</h5>
		  </div>
		  <div class="w3-bar-block">
			<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
			<a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Details</a>
			<a href="index.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Home</a>
		</nav>
		
		
		<!-- Overlay effect when opening sidebar on small screens -->
		<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay">
		</div> 
		
		<script src="https://cdn.anychart.com/releases/8.8.0/js/anychart-data-adapter.min.js"></script>

		<!-- !PAGE CONTENT! -->
		
		<div class="w3-main" style="margin-left:300px;margin-top:43px;">

		  <!-- Header -->
			<header class="w3-container" style="padding-top:22px">
			<h5><b><i class="fa fa-dashboard"></i> My Dashboard (Draft)</b></h5>
			</header>
			<marquee behavior="scroll" direction="left">Disclaimer: Draft POC without all links and complete data.</marquee>
		  
			<hr>
			<hr>
			
			
			<div style="overflow-x:auto;">
			<table id="msme-main">
			<thead>
			
			<th colspan="7"><font color="">Details</font></th>
			<!--<td colspan="2">
			<div class="dropdown">
			<button class="dropbtn">Select RAG</button>
				<div class="dropdown-content">
				 <a href="#">Red</a>
				 <a href="#">Amber</a>
				 <a href="#">Green</a>
				</div>
			</div></td>-->
			
			</tr>
			
			<tr>
			<th><strong><font color="">Transction ID</font></strong></th>
			<th><strong><font color="">Farmer ID</font></strong></th>
			<th><strong><font color="">Farmer Name</font></strong></th>
			<th><strong><font color="">Farmer Detail</font></strong></th>
			<th><strong><font color="">Quantity</font></strong></th>
			<th><strong><font color="">Transaction Status</font></strong></th>
			<th><strong><font color="">Add More Details</font></strong></th>
			</thead>
			<tbody>
			<?php
			include ('database.php');
			
				$count=1;
				$sel_query="SELECT * FROM `proc-chain`;";
				$result2 = mysqli_query($connection,$sel_query);
				while($row2 = mysqli_fetch_assoc($result2)) { ?>
			<tr>
			<td align="center"><?php echo $row2['tranx-id']; ?></td>
			<td align="center"><?php echo $row2['farmer-id'];; ?></td>
			<td align="center"><?php echo $row2['farmer-name'];; ?></td>
			<td align="center"><?php echo $row2['farm-detail'];; ?></td>
			<td align="center"><?php echo $row2['quantity'];; ?></td>
			<td align="center"><?php echo $row2['tranx-status'];; ?></td>
			<td align="center"><a href="add-dnm.php?id=<?php echo $row2['tranx-id'];?>">Add</a></td>
			</tbody>
				<?php } ?>
			</table>
		</div>
		<br>
		

			
		<br>
		<br>
		  

		  <!-- Footer -->
			<footer class="w3-container w3-padding-16 w3-light-grey">
				<i class="fa fa-facebook-official w3-hover-opacity"></i>
				<i class="fa fa-instagram w3-hover-opacity"></i>
				<i class="fa fa-snapchat w3-hover-opacity"></i>
				<i class="fa fa-pinterest-p w3-hover-opacity"></i>
				<i class="fa fa-twitter w3-hover-opacity"></i>
				<i class="fa fa-linkedin w3-hover-opacity"></i>
				<p class="w3-medium">Powered by <a href="https://www.grantthornton.in/" target="_blank" class="w3-hover-text-green">Grant Thornton Bharat LLP</a></p>
				<!-- End footer -->
			</footer>

		  <!-- End page content -->
		</div>

		

	</body>
</html>
