<?php 
    $path = __DIR__.'/twilio-php-master';
    echo $path . '\n';
    if(file_exists($path)){
        echo "okay"; 
    }
    else 
        echo "no"; 
?> 