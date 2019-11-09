<?php
    

    function authUser($email, $password, &$id){
        global $conn;
        
        $s = "SELECT * FROM [dbo].[users] WHERE [email] = '$email' and [password] ='$password'";
        

        ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));

        if (sqlsrv_num_rows($t ) > 0){
            
            $r = sqlsrv_fetch_array($t);
            $id = $r['id'];
            return true;
        }
        return false;
        
        


    }
?>