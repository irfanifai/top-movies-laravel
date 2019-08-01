<?php

namespace App;
use GuzzleHttp\Client;

use Illuminate\Database\Eloquent\Model;

class Api extends Model
{
    public function index()
    {
        $client = new Client();

        $response = $client->request('GET', 'http://newsapi.org/v2/top-headlines', [
            'query' => [
                'country' => 'id',
                'category' => 'sports',
                'apiKey' => '5381ee48fd2c427ba90d84ffe2a0b844'
            ]
        ]);


        $result = json_decode($response->getBody()->getContents(), true);

        return $result['articles'];
        // var_dump($result['articles']);
        // die;
    }
}
