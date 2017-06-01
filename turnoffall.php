<?php

$cURL = curl_init();

  $url = "http://90.77.107.119:8082/api/cqk7k2oUYSRxy2yCusLuyqhnsq-wxosy3k1g0VyM/groups/1/action";

  $data = array('on'=>false);
  $data_json = json_encode($data);

  curl_setopt($cURL , CURLOPT_URL, $url);
  curl_setopt($cURL , CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($data_json)));
  curl_setopt($cURL , CURLOPT_CUSTOMREQUEST, 'PUT');
  curl_setopt($cURL , CURLOPT_POSTFIELDS,$data_json);
  curl_setopt($cURL , CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($cURL);
print $result;

  curl_close($cURL);
 
?>
