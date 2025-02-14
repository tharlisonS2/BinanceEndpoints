<?php

namespace App\Endpoints;

class TickerPriceBook extends BaseEndPoint
{
    public function __construct(
        private string $symbols = '["BTCUSDT"]',
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/ticker/book';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbols() => $this->symbols
        ];
    }
}