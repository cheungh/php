<?php
require 'vendor/autoload.php';
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
