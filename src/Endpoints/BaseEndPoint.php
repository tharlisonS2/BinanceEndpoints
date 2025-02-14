<?php

namespace App\Endpoints;

abstract class BaseEndPoint
{
    private string $method = 'GET';
    final public function getMethod(): string
    {
        return $this->method;
    }
    final public function getSymbol(): string
    {
        return 'symbol';
    }
    final public function getSymbols(): string
    {
        return 'symbols';
    }
    final public function getLimit(): string
    {
        return 'limit';
    }
    final public function getFromId(): string
    {
        return 'fromId';
    }
    final public function getStartTime(): string
    {
        return 'startTime';
    }
    final public function getEndTime(): string
    {
        return 'endTime';
    }
    final public function getTimezone(): string
    {
        return 'timezone';
    }
    final public function getInterval(): string
    {
        return 'interval';
    }
    final public function getType(): string
    {
        return 'type';
    }
    final public function getWindowSize(): string
    {
        return 'windowSize';
    }
    public function checkNeedSignature(): bool
    {
        return false;
    }
    abstract public function getUrl(): string;
    abstract public function getFullQuery(): array;
}
