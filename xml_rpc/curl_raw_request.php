<?php

function do_call($host, $port, $request) {
  
    $url = "http://$host:$port/RPC2";
    $header[] = "Content-type: text/xml";
    $header[] = "Content-length: ".strlen($request);
    
    $ch = curl_init();   
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
    
    $data = curl_exec($ch);       
    if (curl_errno($ch)) {
        print curl_error($ch);
    } else {
        curl_close($ch);
        return $data;
    }
}

$xml_body = xmlrpc_encode_request('pow', array(3, 4));
// The call above will produce xml file like below
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
$response = do_call('localhost', 8000, $xml_body);
print_r($response);
exit;