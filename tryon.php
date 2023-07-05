<!DOCTYPE html>
<html>
<head>
	<title>Traceability | Add Procurement Details</title>
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
		body, h1, h2, h3, h4, h5, h6 {
			font-family: "Montserrat", sans-serif;
		}
		.w3-row-padding img {
			margin-bottom: 12px;
		}
		/* Set the width of the sidebar to 120px */
		.w3-sidebar {
			width: 120px;
			background: #222;
		}
		/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
		#main {
			margin-left: 120px;
		}
		/* Remove margins from "page content" on small screens */
		@media only screen and (max-width: 600px) {
			#main {
				margin-left: 0;
			}
		}
		#quarter1 {
			background-color: #522B86;
			color: white;
		}
		#quarter2 {
			background-color: #00B5C7;
			color: white;
		}
		#msme-main {
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
        width: 100%;
    }
    #msme-main th, #msme-main td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
		
    }
    #msme-main tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    #msme-main th {
        background-color: #522B86;
        color: white;
    }

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
	<h3 class="w3-text"><font color="blue"><center>See Transaction ID Details</center></font></h3>
	
	<br>
	<br>
	<div style="overflow-x:auto;">
		<table id="msme-main">
			<thead>
				<th colspan="4"><font color="">Procurment for Transaction ID <?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; echo $transactionID ?></font></th>
				<tr>
					<td><strong><font color="">Farmer Name</font></strong></td>
					<td><strong><font color="">Farm Detail</font></strong></td>
					<td><strong><font color="">Farmer ID</font></strong></td>
					<td><strong><font color="">Quantity</font></strong></td>
				</tr>
			</thead>
			<tbody>

			<?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; // Assuming you are passing the transaction ID as a query parameter in the URL

				// Retrieve data from the mastertable for the selected transaction ID
				$query = "SELECT * FROM mastertable WHERE Transaction_id = '$transactionID'";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['farmer_name'] . "</td>";
						echo "<td>" . $row['farm_detail'] . "</td>";
						echo "<td>" . $row['farmer_id'] . "</td>";
						echo "<td>" . $row['quantity'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data found</td></tr>";
				}

				// Close the database connection
				mysqli_close($connection);
				?>
	</tbody>
		</table>
	</div>


	<div style="overflow-x:auto;">
		<table id="msme-main">
			<thead>
				<th colspan="4"><font color="">Pre Processing for Transaction ID <?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; echo $transactionID ?></font></th>
				<tr>
					<td><strong><font color="">Date of Cleaning</font></strong></td>
					<td><strong><font color="">Date of Carding</font></strong></td>
					<td><strong><font color="">Number of Reels</font></strong></td>
					<td><strong><font color="">Wastage</font></strong></td>
				</tr>
			</thead>
			<tbody>

			<?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; // Assuming you are passing the transaction ID as a query parameter in the URL

				// Retrieve data from the mastertable for the selected transaction ID
				$query = "SELECT DATE(date_of_cleaning) as date_of_cleaning, DATE(Date_of_carding) as Date_of_carding, Number_of_reels, Wastage_in_KG  FROM pre_processing WHERE Transaction_id = '$transactionID'";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['date_of_cleaning'] . "</td>";
						echo "<td>" . $row['Date_of_carding'] . "</td>";
						echo "<td>" . $row['Number_of_reels'] . "</td>";
						echo "<td>" . $row['Wastage_in_KG'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data found</td></tr>";
				}

				// Close the database connection
				mysqli_close($connection);
				?>
	</tbody>
		</table>
	</div>



	<div style="overflow-x:auto;">
		<table id="msme-main">
			<thead>
				<th colspan="2"><font color=""> Reels Transaction ID <?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; echo $transactionID ?></font></th>
				<tr>
					<td><strong><font color="">Reel ID</font></strong></td>
					<td><strong><font color="">Reel Status</font></strong></td>
				</tr>
			</thead>
			<tbody>

			<?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; // Assuming you are passing the transaction ID as a query parameter in the URL

				// Retrieve data from the mastertable for the selected transaction ID
				$query = "SELECT  Reel_id, Reel_status  FROM reels WHERE Transaction_id = '$transactionID'";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['Reel_id'] . "</td>";
						echo "<td>" . $row['Reel_status'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data found</td></tr>";
				}

				// Close the database connection
				mysqli_close($connection);
				?>
	</tbody>
		</table>
	</div>


	<div style="overflow-x:auto;">
		<table id="msme-main">
			<thead>
				<th colspan="9"><font color=""> Production for Transaction ID <?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; echo $transactionID ?></font></th>
				<tr>
					<td><strong><font color="">Transaction Id</font></strong></td>
					<td><strong><font color="">Reel Id</font></strong></td>
					<td><strong><font color="">Artist Weaving</font></strong></td>
					<td><strong><font color="">Weaving Date</font></strong></td>
					<td><strong><font color="">Artist Dyeing</font></strong></td>
					<td><strong><font color="">Dyeing Date</font></strong></td>
					<td><strong><font color="">Weaving Location</font></strong></td>
					<td><strong><font color="">Dyeing Location</font></strong></td>
					<td><strong><font color="">Number of Fabrics</font></strong></td>

				</tr>
			</thead>
			<tbody>

			<?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; // Assuming you are passing the transaction ID as a query parameter in the URL

				// Retrieve data from the mastertable for the selected transaction ID
				$query = "SELECT `Transaction_id`, `Reel_id`, `Artist_Weaving`, `Weaving_Date`, `Artist_Dyeing`, `Dyeing_Date`, `Weaving_Location`, `Dyeing_Location`, `Number_of_Fabrics`  FROM production WHERE Transaction_id = '$transactionID'";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['Transaction_id'] . "</td>";
						echo "<td>" . $row['Reel_id'] . "</td>";
						echo "<td>" . $row['Artist_Weaving'] . "</td>";
						echo "<td>" . $row['Weaving_Date'] . "</td>";
						echo "<td>" . $row['Artist_Dyeing'] . "</td>";
						echo "<td>" . $row['Dyeing_Date'] . "</td>";
						echo "<td>" . $row['Weaving_Location'] . "</td>";
						echo "<td>" . $row['Dyeing_Location'] . "</td>";
						echo "<td>" . $row['Number_of_Fabrics'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data found</td></tr>";
				}

				// Close the database connection
				mysqli_close($connection);
				?>
	</tbody>
		</table>
	</div>


	<div style="overflow-x:auto;">
		<table id="msme-main">
			<thead>
				<th colspan="9"><font color=""> Fabrics for Transaction ID <?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; echo $transactionID ?></font></th>
				<tr>
					<td><strong><font color="">Reel Id</font></strong></td>
					<td><strong><font color="">Fabric Id</font></strong></td>
					<td><strong><font color="">Fabric Status</font></strong></td>

				</tr>
			</thead>
			<tbody>

			<?php
			    include ('database_my.php');
				// Assuming you have a database connection established
				$transactionID = $_GET['id']; // Assuming you are passing the transaction ID as a query parameter in the URL

				// Retrieve data from the mastertable for the selected transaction ID
				$query = "SELECT `Reel_id`,`Fabric_id`,`Fabric_status`  FROM fabrics WHERE Transaction_id = '$transactionID'";
				$result = mysqli_query($connection, $query);

				if (mysqli_num_rows($result) > 0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>" . $row['Reel_id'] . "</td>";
						echo "<td>" . $row['Fabric_id'] . "</td>";
						echo "<td>" . $row['Fabric_status'] . "</td>";
						echo "</tr>";
					}
				} else {
					echo "<tr><td colspan='4'>No data found</td></tr>";
				}

				// Close the database connection
				mysqli_close($connection);
				?>
	</tbody>
		</table>
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
