<?php 
    // This sample uses the Apache HTTP client from HTTP Components (http://hc.apache.org/httpcomponents-client-ga/)
    require_once 'HTTP/Request2.php';

    $request = new Http_Request2('https://westcentralus.api.cognitive.microsoft.com/vision/v2.0/detect');
    $url = $request->getUrl();

    $headers = array(
        // Request headers
        'Content-Type' => 'application/json',
        'Ocp-Apim-Subscription-Key' => '8deea8d5024941daac199e5acc1e8125',
    );

    $request->setHeader($headers);

    $parameters = array(
        // Request parameters
    );

    $url->setQueryVariables($parameters);

    $request->setMethod(HTTP_Request2::METHOD_POST);

    // Request body
    $request->setBody('{"url":"pics/milk.jpg"}');

    try
    {
        $response = $request->send();
        echo $response->getBody();
    }
    catch (HttpException $ex)
    {
        echo $ex;
    }
?>