<?php

require '../vendor/autoload.php';

use GuzzleHttp\Client;

$form_data = array("name" => "Howde", "id" => 36, 'title'=>'mytitle');                                                                    

$base_url = 'http://localhost:5000/';
$client = new Client([
  'base_uri' => $base_url
]);
$response = $client->post('empdb/employee', [
  'debug' => TRUE,
  'body' => json_encode($form_data),
  'headers' => [
    'Content-Type' => 'application/json',
  ]
]);
$body = $response->getBody();
print_r(json_decode((string) $body));

//  header example for file: 
// 'Content-Type' => 'application/x-www-form-urlencoded',
