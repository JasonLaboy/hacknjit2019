<!DOCTYPE HTML5>
<html>
    <head>
    </head>
    <body>

        <?php
            session_start();
            include ("sqlConn.php");
            include ("functions.php");
            
            if (!isset($_SESSION['userId'])){
                echo "Should redirect";
                header("Location: index.php");
                die();
            }

            



        ?>
        <a href="logout.php">logout</a>
    </body>
</html>