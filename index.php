<?php

    echo getenv('databasepass') . " A<br>";
    
    include ("sqlConn.php");
    include ("functions.php");

    authUser('jal73@njit.edu', '123456');





?>