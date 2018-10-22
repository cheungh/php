<?php

$client = new SoapClient("http://localhost:7789/?wsdl");
// figure out calls
var_dump($client->__getFunctions());
/* returns
array(1) {
  [0]=>
  string(49) "say_helloResponse say_hello(say_hello $say_hello)"
}
*/
// figure out params in calls
var_dump($client->__getTypes());
/*
array(3) {
  [0]=>
  string(50) "struct say_hello {
 string name;
 integer times;
}"
  [1]=>
  string(38) "struct stringArray {
 string string;
}"
  [2]=>
  string(58) "struct say_helloResponse {
 stringArray say_helloResult;
}"
}
*/

// first way to call
$results = $client->__soapCall("say_hello", 
        array(
            array("name" => "Dave", "times" => 5)
        )
    ); 

// or second way to call
$results = $client->say_hello(
    array("name" => "Dave", 
        "times" => 5)
    ); 

print_r($results);


