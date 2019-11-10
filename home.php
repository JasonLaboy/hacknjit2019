<?php
    session_start();
    include ("sqlConn.php");
    include ("functions.php");
    
    if (!isset($_SESSION['userId'])){
        echo "Should redirect!!";
        header("Location: index.php"); 
        die();
    }

?>
<!DOCTYPE HTML5>

<html>
    
    <head>
        
    </head>
    <body>
        
        <a href="logout.php">logout</a>
        
    </body>
</html>