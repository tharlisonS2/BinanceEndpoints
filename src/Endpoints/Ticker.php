<?php

namespace App\Endpoints;

class Ticker extends BaseEndPoint
{
    public function __construct(
        private string $symbols = '["BTCUSDT"]',
        private string $windowSize = '5m',
        private string $type = 'FULL'
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/ticker';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbols() => $this->symbols,
            $this->getWindowSize() => $this->windowSize,
            $this->getType() => $this->type
        ];
    }
}