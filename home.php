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
        <?php 
            global $conn;
            //include functions file 
            include 'functions.php'; 
            
            //Printing foods connecting to account 
            $userPkey = getuserID($_POST['email']); 
            $tsql = "SELECT foodname FROM userfood WHERE userID = " . $userPkey . ";";
            $results = sqlsrv_query($conn, $tsql);
            echo ("Reading data from table" . PHP_EOL);
            if ($getResults == FALSE)
                echo (sqlsrv_errors());
            while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
            echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
        ?>
        <a href="logout.php">logout</a>
        <h2>Hello <?php echo $_SESSION['userId']; ?></h2>
        
    </body>
</html>