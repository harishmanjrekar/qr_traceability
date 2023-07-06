<?php
    $connectionInfo = array("UID" => "rih", "pwd" => "Adminpassword!", "Database" => "blockchain", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rih1.database.windows.net,1433";
$connection = sqlsrv_connect($serverName, $connectionInfo);
?>
