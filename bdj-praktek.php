<?php
require_once 'vendor/autoload.php';

define("AUTH", "LdT23Q9rv8g9bVf8v/fQYsyIcuD14svaYL6Bi8f9uGhLBVlHA3ybTFjjqe+cQO8k");

function get(){
    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', 'http://api.jakarta.go.id/v1/', [
        'headers' => [
            'Accept'     => 'application/json',
            'Authorization'      => AUTH,
        ]
    ]);

    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();
    $result = [];
    if ($statusCode===200){
        $body = json_decode($body);
        $result = @$body->data[0] ? @$body->data[0] : [];
    }

    return $result;
}


function mergeAPI(){
    $client = new \GuzzleHttp\Client();

    $response = $client->request('GET', 'http://api.jakarta.go.id/v1/rumahsakitumum', [
        'headers' => [
            'Accept'     => 'application/json',
            'Authorization'      => AUTH,
        ]
    ]);

    $statusCode = $response->getStatusCode();
    $body = $response->getBody()->getContents();
    $result = [];
    if ($statusCode===200){
        $body = json_decode($body);
        
        
    }

    return $result;
}

$r = mergeAPI();
var_dump($r);