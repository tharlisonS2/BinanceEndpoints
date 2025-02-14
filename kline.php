<?php

require_once 'vendor/autoload.php';

use App\BinanceEndPoints;
use App\Endpoints\KlineCandleSticks;
$var = new BinanceEndPoints('apiKey', 'secretKey');

$var->executeQuery(new KlineCandleSticks('ZRXUSDT', '1m', '500',"2025-02-11 21:33:00"));

