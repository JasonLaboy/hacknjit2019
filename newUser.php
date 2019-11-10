

<!DOCTYPE HTML5>
<html>

<head>
    <?php

    if (isset($_COOKIE['userId'])){
        header("Location: home.php");
    }


    include ("sqlConn.php");
    include ("functions.php");

    if (isset($_POST['email'])){
        echo "HERE";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        newUser($email, $fName, $lName, $password, $phone);
        echo "HERE";
    }
    ?>
</head>
<body>

    <?php
        

        
    ?>
    <div>
        <h2>
            NJIT food
        </h2>
        <form action="newUser.php" method="post">
            <p>
                Email<br>
                <input type="email" name="email">
            </p>
            <p>
                Password<br>
                <input type="password" name="password">
            </p>
            <p>
                Phone number<br>
                <input type="phone" name="phone">
            </p>
            <p>
                First Name<br>
                <input type="text" name="fName">
            </p>
            <p>
                Last Name<br>
                <input type="text" name="lName">
            </p>
            <p>
                <input type="submit" name="submit" value="submit">
            </p>
            <p>
                Already have an account? <a href="index.php">Login</a>
            </p>
        </form>

    </div>
</body>
</html>

