<?php

namespace App\Endpoints;

class TickerPrice extends BaseEndPoint
{
    public function __construct(
        private string $symbols = '["BTCUSDT"]',
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/ticker/price';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbols() => $this->symbols
        ];
    }
}
