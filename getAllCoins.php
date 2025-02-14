<?php

require_once 'vendor/autoload.php';

$binance = new \App\BinanceEndPoints('', '');
$binance->executeQuery(new \App\Endpoints\GetAllCoins()); // Endpoint com signature
