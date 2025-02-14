<?php

require_once 'vendor/autoload.php';

use App\BinanceEndPoints;
use App\Endpoints\UiKlineCandleSticks;
$var = new BinanceEndPoints('apiKey', 'secretKey');

$var->executeQuery(new UiKlineCandleSticks('BTCUSDT', '1m', '500'));

