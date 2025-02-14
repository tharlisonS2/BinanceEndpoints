<?php

namespace App\Endpoints;

class TradingDay extends BaseEndPoint
{
    public function __construct(
        private string $symbols = '["BTCUSDT"]',
        private string $timezone = '0',
        private string $type = 'FULL'
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/ticker/tradingDay';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbols() => $this->symbols,
            $this->getTimezone() => $this->timezone,
            $this->getType() => $this->type
        ];
    }
}
