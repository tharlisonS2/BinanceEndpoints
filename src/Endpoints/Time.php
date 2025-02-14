<?php

namespace App\Endpoints;

class Time extends BaseEndPoint
{
    public function getUrl(): string
    {
        return '/api/v3/time';
    }
    public function getFullQuery(): array
    {
        return [];
    }

}
