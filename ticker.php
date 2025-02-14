<?php

require_once 'vendor/autoload.php';

$binance = new \App\BinanceEndPoints('apiKey', 'secretKey');
$binance->executeQuery(new \App\Endpoints\Ticker());
