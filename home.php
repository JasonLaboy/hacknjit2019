<?php
    include ("sqlConn.php");
    include ("functions.php");
    
    if (!isset($_COOKIE['userId'])){
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
        <h2>Hello <?php echo $_SESSION['userId']; ?></h2>
        
    </body>
</html>