<?php
$url= "https://api.coindesk.com/v1/bpi/currentprice.json";
$client = new \GuzzleHttp\Client(); //Guzzle HTTP makes it easy to send HTTP requests and trivial to integrate with web services.

function getApiData($client, $url) {
$response = $client->request('GET',$url);
$data = json_decode($response -> getBody());
return $data;
}
$price = getPrice($data);

function getPrice($data){
  $price;
  return $price;
}
$data = getApiData($client, $url);
echo $price;
