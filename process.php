<?php
    include ("sqlConn.php");    
    include ("functions.php");

    if (isset($_COOKIE['userId'])){
        header("Location: home.php");
    }

    else if (isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (authUser($email, $password, $userId)){
            setcookie("userId", $userId, time() + 3600, "/"); 
            header('Location: home.php');
        }else{
            echo "<h3 style='color:red;'>Invaild email/password</h3> ";
        }
    }
?>
