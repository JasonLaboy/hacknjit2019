<?php


    function authUser($email, $password){
        global $conn;
        echo "BANANA";
        
        $s = "SELECT * FROM [dbo].[users] WHERE [email] = $email and [password] = $password";
        
        echo "test";

        ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));

        echo "test";
        $r = sqlsrv_fetch_array($t);
        echo $r['fName'] . "<br>";


    }
?>