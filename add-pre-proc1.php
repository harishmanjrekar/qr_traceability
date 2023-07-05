<?php
include ('database.php');

if (isset($_POST['submit'])) {
	
			if (empty($_POST['doc']) || empty($_POST['dcard'])|| empty($_POST['nreel']) 
				|| empty($_POST['wstg'])) {

						echo '<script language="javascript">';
						echo 'alert("Fields are empty!")';
						echo '</script>';
						header("Location:add-proc.php");
			}
			else
			{
				//$id=0;
				$query1 = "SELECT max(ID) as id FROM `pre-proc`;";
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
					$doc = $_POST['doc'];
					$dcard = $_POST['dcard'];
					$nreel = $_POST['nreel'];
					$wstg = $_POST['wstg'];
					
					$query2 = "INSERT into `pre-proc` (`tranx-id`,`date-of-cleaning`, `date-of-carding`, `no-of-reels`,
					`wastage-generated`) VALUES ('$trid','$doc','$dcard', '$nreel', '$wstg');";
					$query3 = "UPDATE `proc-chain` SET `tranx-status`='2'  WHERE `tranx-id`='$trid'";
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