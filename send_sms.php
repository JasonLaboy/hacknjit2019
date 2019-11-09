<?php 
    $path = __DIR__.'/twilio-php-master/twilio-php-master/src/Twilio/autoloader.php';
    echo $path . "\n";
    if(file_exists($path)){
        echo "okay"; 
    }
    else 
        echo "no"; 
?> 