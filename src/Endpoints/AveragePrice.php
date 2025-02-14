<?php

namespace App\Endpoints;

class AveragePrice extends BaseEndPoint
{
    public function __construct(private string $symbol)
    {
    }
    public function getUrl(): string
    {
        return '/api/v3/avgPrice';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbol() => $this->symbol
        ];
    }
}
