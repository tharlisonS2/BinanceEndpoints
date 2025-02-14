<?php

use App\BinanceEndPoints;
use App\Endpoints\Ping;

require_once 'vendor/autoload.php';



$var = new BinanceEndPoints('', '');
$var->execute(new Ping());