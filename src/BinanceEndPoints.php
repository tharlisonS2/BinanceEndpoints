<?php

namespace App;

use App\Endpoints\BaseEndPoint;
use App\Endpoints\Time;
use Exception;
use GuzzleHttp\Client;

class BinanceEndPoints
{
    private Client $client;
    private string $timestamp;
    public function __construct(private string $apiKey, private string $secretKey)
    {
        $this->client = new Client(['verify' => false]);
        $this->apiKey = $apiKey;
        $this->secretKey = $secretKey; // deve usar .env
    }

    private function getApiKey(): string
    {
        return $this->apiKey;
    }

    private function getSecretKey(): string
    {
        return $this->secretKey;
    }

    public function getBaseUrl(): string
    {
        return 'https://api.binance.com';
    }
    private function getSignature()
    {
        $params = [
            'timestamp' => $this->getTimestamp(),
        ];
        $queryString = http_build_query($params);
        return hash_hmac('sha256', $queryString, $this->getSecretKey());
    }
    private function getTimestamp(): string
    {
        $this->timestamp = json_decode($this->execute(new Time()))->serverTime;
        return $this->timestamp;
    }
    public function execute(BaseEndPoint $endpoint)
    {
        $url = $this->getBaseUrl() . $endpoint->getUrl();
        $response = $this->client->request($endpoint->getMethod(), $url);
        //echo $response->getBody();
        return $response->getBody();
    }
    public function executeQuery(BaseEndPoint $endpoint)
    {
        $url = $this->getBaseUrl() . $endpoint->getUrl();

        try {
            if ($endpoint->checkNeedSignature() === false) {
                $response = $this->client->request($endpoint->getMethod(), $url, ['query' => $endpoint->getFullQuery()]);
            } else {
                $headers = [
                    'X-MBX-APIKEY' => $this->getApiKey()
                ];
                $response = $this->client->request(
                    $endpoint->getMethod(),
                    $url,
                    [
                        'query' => array_merge(
                            $endpoint->getFullQuery(),
                            [
                                'signature' => $this->getSignature(),
                                'timestamp' => $this->timestamp
                            ]
                        )
                        ,
                        'headers' => $headers
                    ]
                );
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            return;
        }

        //echo $response->getBody();

        print_r(json_decode($response->getBody(), true));

        //foreach (json_decode($response->getBody(), true) as $value) {
        //    if(str_ends_with($value['symbol'],'USDT'))
        //    echo $value['symbol'] . PHP_EOL;
        //}
    }
}
