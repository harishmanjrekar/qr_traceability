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

?>
