
<?php
    $serverName = "tcp:rih1.database.windows.net,1433"; // update me
    $connectionOptions = array(
        "Database" => "blockchain", // update me
        "Uid" => "rih", // update me
        "PWD" => "Adminpassword!" // update me
    );
    //Establishes the connection
    $connection = sqlsrv_connect($serverName, $connectionOptions);

?>
