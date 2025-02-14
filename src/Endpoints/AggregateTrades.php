<?php

namespace App\Endpoints;

class AggregateTrades extends BaseEndPoint
{
    public function __construct(
        private string $symbol,
        private string $limit = '500',
        private string $fromId = '0',
        private string $startTime = '',
        private string $endTime = '',
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/aggTrades';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbol() => $this->symbol,
            $this->getLimit() => $this->limit,
            $this->getStartTime() => $this->startTime == '' ? $this->startTime = (time() - 60) * 1000 : strtotime($this->startTime) * 1000,
            $this->getEndTime() => $this->endTime == '' ? $this->endTime = time() * 1000 : strtotime($this->endTime) * 1000,
        ];
    }
}
