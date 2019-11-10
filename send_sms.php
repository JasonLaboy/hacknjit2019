<?php 
    $path = __DIR__.'/twilio-php-master/twilio-php-master/src/Twilio/autoload.php';
    require $path;
    use Twilio\Rest\Client;
    // Your Account SID and Auth Token from twilio.com/console
    $account_sid = 'AC23010d085a4753b32117856483aef181';
    $auth_token = 'fb7cc58969e4d2fbc71a132ba89b7b27';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]
    // A Twilio number you own with SMS capabilities
    $twilio_number = "+12055399401";
    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
        // Where to send a text message (your cell phone?)
        '+18624529510',
        array(
            'from' => $twilio_number,
            'body' => 'I sent this message in under 10 minutes!'
        )
    );
?> 