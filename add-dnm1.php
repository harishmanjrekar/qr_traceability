<?php
include ('database.php');

if (isset($_POST['submit'])) {
	
			if (empty($_POST['dpk']) || empty($_POST['wrd'])|| empty($_POST['wred']) || empty($_POST['rrd'])
				|| empty($_POST['csd'])) {

						echo '<script language="javascript">';
						echo 'alert("Fields are empty!")';
						echo '</script>';
						header("Location:add-dnm.php");
			}
			else
			{
				//$id=0;
				$query1 = "SELECT max(ID) as id FROM `dist-and-mktng`;";
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
					$dpk = $_POST['dpk'];
					$wrd = $_POST['wrd'];
					$wred = $_POST['wred'];
					$rrd = $_POST['rrd'];
					$csd = $_POST['csd'];
					
					
					$query2 = "INSERT into `dist-and-mktng` (`tranx-id`,`date-of-packing`, `wholesaler-receive-date`, 
					`wholesaler-relieve-date`, `retailer-receive-date`,
					`customer-shop-date`) VALUES ('$trid','$dpk','$wrd','$wred','$rrd','$csd');";
					
					$query3 = "UPDATE `proc-chain` SET `tranx-status`='5'  WHERE `tranx-id`='$trid'";
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