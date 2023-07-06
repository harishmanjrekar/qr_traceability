<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $connection = new PDO("sqlsrv:server = tcp:rih1.database.windows.net,1433; Database = blockchain", "rih", "Adminpassword!");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server ABCDEFG.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rih", "pwd" => "Adminpassword", "Database" => "blockchain", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rih1.database.windows.net,1433";
$connection = sqlsrv_connect($serverName, $connectionInfo);
?>
