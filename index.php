
<!DOCTYPE HTML5>
<html>
    <?php 
        $connectionInfo = array("UID" => "hacknjitfood", "pwd" => "pizzaMaster@", "Database" => "foodsaver", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
        $serverName = "tcp:foodsaver.database.windows.net,1433";
        $conn = sqlsrv_connect($serverName, $connectionInfo);

        $sql = "SELECT * FROM [dbo].[users] WHERE [email] = '$email' and [password] ='$password'";
        $result = sqlsrv_query($conn, $sql);
        
        if(sqlsrv_has_rows($result)){
            header('Location: home.php');
        }
        else 
            echo "<h3> invalid username and password </h3> "; 
    ?> 
    <body>
        <div>
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

