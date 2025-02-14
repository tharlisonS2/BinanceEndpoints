<?php

namespace App\Endpoints;

class RecentTrades extends BaseEndPoint
{
    public function __construct(private string $symbol, private string $limit = '500')
    {
    }
    public function getUrl(): string
    {
        return '/api/v3/trades';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbol() => $this->symbol,
            $this->getLimit() => $this->limit
        ];
    }
}
