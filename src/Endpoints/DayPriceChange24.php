<?php

namespace App\Endpoints;

class DayPriceChange24 extends BaseEndPoint
{
    public function __construct(
        private string $symbols = '["BTCUSDT"]',
        private string $type = 'FULL' 
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/ticker/24hr';
    }
    public function getFullQuery(): array
    {
        return [
           // $this->getSymbols() => $this->symbols,
            $this->getType() => $this->type
        ];
    }
}
