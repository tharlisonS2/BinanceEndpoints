<?php

namespace App\Endpoints;

class Depth extends BaseEndPoint
{
    public function __construct(private string $symbol, private string $limit = '10')
    {
    }
    public function getUrl(): string
    {
        return '/api/v3/depth';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbol() => $this->symbol,
            $this->getLimit() => $this->limit
        ];
    }
}
