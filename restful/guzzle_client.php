<?php

require 'vendor/autoload.php';

$client = new GuzzleHttp\Client(['base_uri' => 'http://localhost:5000/']);

$re = $client->request('GET', 'empdb/employee');
echo $re->getBody();
