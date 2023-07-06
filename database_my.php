<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $connection = new PDO("sqlsrv:server = tcp:rih1.database.windows.net,1433; Database = blockchain", "rih", "{your_password_here}");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "rih", "pwd" => "{your_password_here}", "Database" => "blockchain", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:rih1.database.windows.net,1433";
$connection = sqlsrv_connect($serverName, $connectionInfo);
?>
