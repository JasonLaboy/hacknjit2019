<?php 
    $path = __DIR__.'\README.md';
    if(file_exists($path)){
        echo "okay"; 
    }
    else 
        echo "no"; 
?> 