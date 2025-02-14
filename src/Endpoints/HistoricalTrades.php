<?php

namespace App\Endpoints;

class HistoricalTrades extends BaseEndPoint
{
    public function __construct(private string $symbol, private string $limit = '500', private string $fromId = '0')
    {
    }
    public function getUrl(): string
    {
        return '/api/v3/historicalTrades';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbol() => $this->symbol,
            $this->getLimit() => $this->limit,
            $this->getFromId() => $this->fromId
        ];
    }
}
