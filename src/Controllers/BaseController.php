<?php

namespace MagedAhmad\Aymakan\Controllers;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class BaseController
{
    public $client;

    public function __construct()
    {
        $this->client = new Client();
    }

    /**
     * @throws GuzzleException
     */
    public function send($method, $url, $body = [])
    {
        $response = $this->client->request(
            $method,
            config('aymakan.api_url') . $url,
            [
                'form_params' => $body,
                'headers' => [
                    'Authorization' => config('aymakan.api_key'),
                    'Accept'        => 'application/json',
                ]
            ]);

        // Access the response data
        $responseBody = $response->getBody()->getContents();

        // If the response is in JSON format, you can decode it
        return json_decode($responseBody, true);
    }
}