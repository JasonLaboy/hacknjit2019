<?php
    

    function authUser($email, $password, &$id){
        global $conn;
        
        $s = "SELECT * FROM [dbo].[users] WHERE [email] = '$email' and [password] ='$password'";
        

        ($t = sqlsrv_query( $conn ,$s)) or die (sqlsrv_errors($conn ));
        $r = sqlsrv_fetch_array($t);
        $id = $r['id'];

        if (sqlsrv_has_rows ( $t )){
            
            
            return true;
        }
        return false;
        
        


    }
?>