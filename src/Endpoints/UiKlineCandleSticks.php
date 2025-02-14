<?php

namespace App\Endpoints;

class UiKlineCandleSticks extends BaseEndPoint
{
    public function __construct(
        private string $symbol,
        private string $interval = '1m',
        private string $limit = '500',
        private string $startTime = '', //"2025-02-10 14:00:00"
        private string $endTime = '', //"2025-02-10 14:30:00"
        private string $timezone = '0',
    ) {
    }
    public function getUrl(): string
    {
        return '/api/v3/uiKlines';
    }
    public function getFullQuery(): array
    {
        return [
            $this->getSymbol() => $this->symbol,
            $this->getInterval() => $this->interval,
            $this->getStartTime() => $this->startTime == '' ? $this->startTime = (time() - 60) * 1000 : strtotime($this->startTime) * 1000,
            $this->getEndTime() => $this->endTime == '' ? $this->endTime = time() * 1000 : strtotime($this->endTime) * 1000,
            $this->getLimit() => $this->limit,
        ];
    }
}
