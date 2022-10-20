<?php

namespace Nazhim\FirstPackage;

use GuzzleHttp\Client;

class Request {

    public function req(){
        $client = new Client();
        
        $response = $client->request('GET', 'https://jsonplaceholder.typicode.com/posts');
        
        return $response;
    }
}