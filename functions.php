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

    echo "BANANA";
        
    $s = "SELECT * FROM [dbo].[users] WHERE [email] = $email and [password] = $password";
    
    echo "test";

    ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));

    echo "test";
    $r = sqlsrv_fetch_array($t);
    echo $r['fName'] . "<br>";

    function authUser($email, $password){
        global $conn;
        


    }
?>