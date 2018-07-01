<?php

function bitcoin($method){
$ch = curl_init();
$rpcuser='rpcusername';
$rpcpassword='rpcpassword'; 
$host='nodeIP';  //IP address of your node or localhost, if running locally
$port='port';

curl_setopt($ch, CURLOPT_URL, "http://$rpcuser:$rpcpassword@$host:$port/");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"jsonrpc\":\"1.0\",\"id\":\"curltext\",\"method\":\"$method\",\"params\":[]}");
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = "Content-Type: application/x-www-form-urlencoded";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
return($result);
}

?>
