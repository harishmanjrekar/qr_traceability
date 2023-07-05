<!DOCTYPE html>
<html>
	<head>
		<title>Traceability | See production QR Details</title>
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
			
			<a href="index.php"><img src="images/gt.png" style="height:55px; width:140px;"></a>
			<a href="index.php">Home</a>
				<!-- Right-sided navbar links -->
		</div>		
					
		
		<br>
		<br>
		<br>
		
		<!-- Page Content -->
		<marquee behavior="scroll" direction="left">Disclaimer: Draft POC without all links and complete data.</marquee>
		<h2 class="w3-text"><font color="#63468F"><center>Traceability using Blockchain POC (Draft)</center></font></h2>
		<br>
		<h3 class="w3-text"><font color="blue"><center>See Production QR Details</center></font></h3>
		
		<br>
		<br>
		
		<div class="form">

			<form name="add-proc" action="fetch_pro_QR.php" method="post" enctype="multipart/form-data">
			<center>
			
			<table border="0" cellspacing="2" cellpadding="5">


			<tr><td align="right">
			<label for ='Transaction_id' ><font color="blue" face="Yu Gothic UI Light" style="font-size:120%;"><b>Transaction ID: </b></font> </label></td>
			<td><input type="text" name="Transaction_id" id ='Transaction_id' placeholder="" required style="width:105%;height:30px;border-radius: 8px;font-size:20px;"/></td></tr>
            <tr><td align="right">
			<label for ='Reel_id' ><font color="blue" face="Yu Gothic UI Light" style="font-size:120%;"><b>Reel ID: </b></font> </label></td>
			<td><input type="text" name="Reel_id" id ='Reel_id' placeholder="" required style="width:105%;height:30px;border-radius: 8px;font-size:20px;"/></td></tr>
            <tr><td align="right">
			<label for ='Fabric_id' ><font color="blue" face="Yu Gothic UI Light" style="font-size:120%;"><b>Fabric ID: </b></font> </label></td>
			<td><input type="text" name="Fabric_id" id ='Fabric_id' placeholder="" required style="width:105%;height:30px;border-radius: 8px;font-size:20px;"/></td></tr>


						<tr></tr>
			<tr><td colspan="2" align="center">
			<input type="submit" name="submit" value="Show QR" class="button1 button4" style="width:200px;"/></td></tr>

			</table>
			</center>    
			</form>
		</div>
		
		
		
		<br><br><br><br>
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
		

	</body>
</html>