<?php
include ('database.php');

if (isset($_POST['submit'])) {
	
			if (empty($_POST['tlab']) || empty($_POST['qlty'])|| empty($_POST['gmdt'])) {

						echo '<script language="javascript">';
						echo 'alert("Fields are empty!")';
						echo '</script>';
						header("Location:add-prod.php");
			}
			else
			{
				//$id=0;
				$query1 = "SELECT max(ID) as id FROM `post-prod`;";
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
					$tlab = $_POST['tlab'];
					$qlty = $_POST['qlty'];
					$gmdt = $_POST['gmdt'];
					
					
					$query2 = "INSERT into `post-prod` (`tranx-id`,`textile-lab`, `quality`, `garmenting-date`) 
					VALUES ('$trid','$tlab','$qlty', '$gmdt');";
					$query3 = "UPDATE `proc-chain` SET `tranx-status`='4'  WHERE `tranx-id`='$trid'";
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