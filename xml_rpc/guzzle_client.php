<?php
require 'vendor/autoload.php';
/*
$xml = '<?xml version=\'1.0\'?>  
<methodCall>
    <methodName>pow</methodName>
    <params>
        <param>
            <value><int>2</int></value>
        </param>
        <param>
            <value><int>3</int></value>
        </param>
</params>
</methodCall>';
*/
$xml = xmlrpc_encode_request('pow', array(3, 4));

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
$client = new Client();

$url = 'localhost:8000/RPC2';

$options = [
    'headers' => [
        'Content-Type' => 'text/xml; charset=UTF8',
    ],
    'body' => $xml,
];

$response = $client->request('POST', $url, $options);
echo ($response->getBody());
