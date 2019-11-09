<?php

    include ("sqlConn.php");

    $s = "SELECT * FROM [dbo].[users]";


    ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));


    $r = sqlsrv_fetch_array($t);
    echo $r['fName'] . "<br>";

    echo "conn";
    echo "hello leo";
?>
