<?php

    include ("sqlConn.php");

    function authUser($email, $password){
        global $conn;
        $s = "SELECT * FROM [dbo].[users] WHERE [email] = $email and [password] = $password";


        ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));


        $r = sqlsrv_fetch_array($t);
        echo $r['fName'] . "<br>";


    }
?>