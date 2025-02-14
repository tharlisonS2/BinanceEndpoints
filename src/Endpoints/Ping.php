<?php

namespace App\Endpoints;

class Ping extends BaseEndPoint
{
    public function getUrl(): string
    {
        return '/api/v3/ping';
    }
    public function getFullQuery(): array
    {
        return [];
    }
}
