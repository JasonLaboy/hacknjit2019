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
    //functions gets user ID
    function getUserID($email){
        global $conn;
        $sql = "SELECT id FROM users WHERE email = " . $email . ";"; 
        $results = sqlsrv_query($conn, $sql);
        if ($results == FALSE)
            echo (sqlsrv_errors());
        else {
            $row = sqlsrv_fetch_array($results, SQLSRV_FETCH_ASSOC); 
            return $row['id']; 
        }
          
    }
?>