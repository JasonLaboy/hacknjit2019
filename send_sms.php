<?php 
    $path = __DIR__.'\index.php';
    echo $path . '\n';
    if(file_exists($path)){
        echo "okay"; 
    }
    else 
        echo "no"; 
?> 