<?php

    try {
        $conn = new PDO("sqlsrv:server = tcp:foodsaver.database.windows.net,1433; Database = foodsaver", "hacknjitfood", "pizzaMaster@");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $e) {
        print("Error connecting to SQL Server.");
        die(print_r($e));
    }

    // SQL Server Extension Sample Code:
    $connectionInfo = array("UID" => "hacknjitfood", "pwd" => "pizzaMaster@", "Database" => "foodsaver", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
    $serverName = "tcp:foodsaver.database.windows.net,1433";
    $conn = sqlsrv_connect($serverName, $connectionInfo);

    $s = "SELECT * FROM [dbo].[users]";


    ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));


    $r = sqlsrv_fetch_array($t);
    echo $r['fName'] . "<br>";

    header("send_sms.php"); 


    echo "hello<br>";

?>