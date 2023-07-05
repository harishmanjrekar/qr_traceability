<?php
include ('database.php');

if (isset($_POST['submit'])) {
	
			if (empty($_POST['fid']) || empty($_POST['fname'])|| empty($_POST['fdetail']) 
				|| empty($_POST['qty'])) {

						echo '<script language="javascript">';
						echo 'alert("Fields are empty!")';
						echo '</script>';
						header("Location:add-proc.php");
			}
			else
			{
				//$id=0;
				$query1 = "SELECT max(ID) as id FROM `proc-chain`;";
					$result2 = mysqli_query($connection,$query1);
					$var3 = mysqli_fetch_assoc($result2);
					
					$result2 = $var3['id'];
					//print $result2;
					$result2 = $result2+1;
					//print $result2;
					$tranxid = 'trace'.strval($result2);
					//print $tranxid;
					$tranxid = 'trace'.strval($result2);
			  		//$msmeid = $_POST['msme-id'];
					$fid = $_POST['fid'];
					$fname = $_POST['fname'];
					$fdetail = $_POST['fdetail'];
					$qty = $_POST['qty'];
					
					$query2 = "INSERT into `proc-chain` (`tranx-id`,`farmer-id`, `farmer-name`, `farm-detail`,
					`quantity`, `tranx-status`) VALUES ('$tranxid','$fid','$fname', '$fdetail', '$qty', '1');";
					
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