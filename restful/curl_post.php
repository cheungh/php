<?php

$data = array("name" => "Hagrid", "id" => 36, 'title'=>'mytitle');                                                                    
$data_string = json_encode($data);                                                                                   
                                                                                                                     
$ch = curl_init('http://localhost:5000/empdb/employee');                                                                      
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);                                                                                                                   
                                                                                                                     
$result = curl_exec($ch);
print_r($result);