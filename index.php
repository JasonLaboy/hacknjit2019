
<?php
    session_start();
    if (isset($_SESSION['userId'])){
        echo "Should redirect!";
        header("Location: home.php");
    }

    
    include ("sqlConn.php");
    include ("functions.php");

    if (isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (authUser($email, $password, $userId)){
            $_SESSION['userId'] = $userId;
            //setcookie("userId", $userId, time() + 3600, "/"); 
            echo "Should redirect!!";
            header("Location: home.php");
        }else{
            echo "<h3 style='color:red;'>Invaild email/password</h3> ";
        }
    }
?>
<!DOCTYPE HTML5>
<html>

    <head>
        
    </head>
    <body>

        <?php
            

            
        ?>
        <div>
            <h2>
                NJIT food
            </h2>
            <form action="index.php" method="post">
                <p>
                    Email<br>
                    <input type="email" name="email">
                </p>
                <p>
                    Password<br>
                    <input type="password" name="password">
                </p>
                <p>
                    <input type="submit" name="submit" value="submit">
                </p>
                <p>
                    Don't have an account? <a href="newUser.php">Create one</a>
                </p>
            </form>

        </div>
    </body>
</html>

