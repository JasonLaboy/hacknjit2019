<?php

    include ("info.env");
    echo "te<br>";
    echo getenv('databasepass') . " A<br>";
    echo " B<br>";
    
    include ("sqlConn.php");
    include ("functions.php");

    authUser('jal73@njit.edu', '123456');





?>