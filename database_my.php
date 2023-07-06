<?php
			$connection = mysqli_connect('tcp:rih1.database.windows.net,1433', 'rih', 'Adminpassword!','blockchain');
			if (!$connection){
				die("Database Connection Failed" . mysqli_error($connection));
			}
			$select_db = mysqli_select_db($connection,'blockchain');
			if (!$select_db){
				die("Database Selection Failed" . mysqli_error($connection));
			}
			?>
