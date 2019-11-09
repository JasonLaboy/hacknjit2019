<?php
    

    function authUser($email, $password, &$id){
        global $conn;
        
        $s = "SELECT * FROM [dbo].[users] WHERE [email] = '$email' and [password] ='$password'";
        

        ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));

        if (sqlsrv_num_rows($t ) > 0){
            return true;
        }
        return false;
        
        $r = sqlsrv_fetch_array($t);
        echo $r['fName'] . "<br>";


    }
?>