<?php

use App\Endpoints\AveragePrice;

require_once 'vendor/autoload.php';

$binance = new \App\BinanceEndPoints('apiKey', 'secretKey');
$binance->executeQuery(new AveragePrice("BTCUSDT"));

