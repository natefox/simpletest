<?php

$url = 'http://elasticsearch:9200/logstash-'.date("y.m.d")."/testing";
$data = json_encode(array('@timestamp' => date("Y-m-d\TH:i:s-0000"), 'status' => 200));


//open connection
$ch = curl_init();

//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_SAFE_UPLOAD,1);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

#curl_setopt($ch, CURLOPT_VERBOSE, TRUE);





//execute post
$result = curl_exec($ch);
print_r(json_decode($result));
echo "";
?>
