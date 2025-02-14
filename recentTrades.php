<?php

use App\BinanceEndPoints;
use App\Endpoints\RecentTrades;

require_once 'vendor/autoload.php';



$var = new BinanceEndPoints('', '');
$var->executeQuery(new RecentTrades('BTCUSDT'));
