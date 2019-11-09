<!DOCTYPE HTML5>
<html>
    <head>
    </head>
    <body>

        <?php
            session_start();
            include ("sqlConn.php");
            include ("functions.php");

            if (isset($_POST['email'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                if (authUser($email, $password, $userId)){
                    $_SESSION['userId'] = $userId;
                    header("location: home.php");
                }
            }
        ?>
        <div>
            <h2>
                NJIT food
            </h2>
            <form>
                <p>
                    email<br>
                    <input type="email" name="email">
                </p>
                <p>
                    password<br>
                    <input type="password" name="password">
                </p>
            </form>

        </div>
    </body>
</html>