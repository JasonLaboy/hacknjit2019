
<?php
    session_start();
    include ("sqlConn.php");
    include ("functions.php");

    if (isset($_SESSION['userId'])){
        header("Location: home.php");
    }

    if (isset($_POST['email'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        if (authUser($email, $password, $userId)){
            $_SESSION['userId'] = $userId;
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
                    email<br>
                    <input type="email" name="email">
                </p>
                <p>
                    password<br>
                    <input type="password" name="password">
                </p>
                <p>
                    <input type="submit" name="submit" value="submit">
                </p>
            </form>

        </div>
    </body>
</html>