<?php

namespace Nazhim\FirstPackage;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Request {

    public function req(string $method, string $path){
        try {
            // Preparing Base Uri
            $client = new Client([
                'base_uri' => 'https://jsonplaceholder.typicode.com'
            ]);
            
            $response = $client->request($method, $path);

            $data = (string) $response->getBody();
            
            return $data;
        } catch (RequestException $e) {
            echo $e->getRequest() . "\n";
            if ($e->hasResponse()) {
                echo $e->getResponse() . "\n";
            }
        }
    }
}