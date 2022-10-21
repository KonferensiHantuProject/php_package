<?php

namespace Nazhim\FirstPackage;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Request {

    public function req(){
        try {
            // Preparing Base Uri
            $client = new Client([
                'base_uri' => 'https://jsonplaceholder.typicode.com'
            ]);
            
            $response = $client->request('GET', '/posts');

            $data = (string) $response->getBody();
            $data = json_decode($data);
            
            return $data;
        } catch (RequestException $e) {
            echo $e->getRequest() . "\n";
            if ($e->hasResponse()) {
                echo $e->getResponse() . "\n";
            }
        }
    }
}