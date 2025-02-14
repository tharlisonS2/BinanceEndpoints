<?php

use App\BinanceEndPoints;
use App\Endpoints\Depth;

require_once 'vendor/autoload.php';



$var = new BinanceEndPoints('', '');
$var->executeQuery(new Depth('ETHBTC', '10'));