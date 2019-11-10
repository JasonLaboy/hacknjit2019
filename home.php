<!DOCTYPE HTML5>
<html>
    <?php
        session_start();
        include ("sqlConn.php");
        include ("functions.php");
        
        if (!isset($_SESSION['userId'])){
            echo "Should redirect!";
            header("Location: http://www.example.com/blog"); 
            die();
        }

    ?>
    <head>
        
    </head>
    <body>
        
        <a href="logout.php">logout</a>
        
    </body>
</html>