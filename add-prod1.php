<?php
include ('database.php');

if (isset($_POST['submit'])) {
	
			if (empty($_POST['artn']) || empty($_POST['dw'])|| empty($_POST['wl']) 
				|| empty($_POST['atdy']) || empty($_POST['ddy']) || empty($_POST['dylo'])) {

						echo '<script language="javascript">';
						echo 'alert("Fields are empty!")';
						echo '</script>';
						header("Location:add-prod.php");
			}
			else
			{
				//$id=0;
				$query1 = "SELECT max(ID) as id FROM `prod`;";
					$result2 = mysqli_query($connection,$query1);
					$var3 = mysqli_fetch_assoc($result2);
					
					$result2 = $var3['id'];
					//print $result2;
					$result2 = $result2+1;
					//print $result2;
					//$tranxid = 'trace'.strval($result2);
					//print $tranxid;
					//$tranxid = 'trace'.strval($result2);
			  		//$msmeid = $_POST['msme-id'];
					$trid = $_POST['tranx-id'];
					$artn = $_POST['artn'];
					$dw = $_POST['dw'];
					$wl = $_POST['wl'];
					$atdy = $_POST['atdy'];
					$ddy = $_POST['ddy'];
					$dylo = $_POST['dylo'];
					
					$query2 = "INSERT into `prod` (`tranx-id`,`artist-name`, `date-of-weaving`, `weaving-loc`,
					`artist-dying`,`dying-date`,`dying-loc`) VALUES ('$trid','$artn','$dw', '$wl', '$atdy', '$ddy', '$dylo');";
					$query3 = "UPDATE `proc-chain` SET `tranx-status`='3'  WHERE `tranx-id`='$trid'";
					$result2 = mysqli_query($connection,$query3);
					
					$result = mysqli_query($connection,$query2);
					if($result){
						header("Location:index.php");
					}
					else{
						die('Error:'.mysqli_error($connection));
						echo '<script language="javascript">';
						echo 'alert("Entry is invalid!")';
						echo '</script>';
									
					} 
					
					
			}
}
	
?>