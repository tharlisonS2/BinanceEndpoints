<?php

namespace App\Endpoints;

class GetAllCoins extends BaseEndPoint
{
    
    public function getUrl(): string
    {
        return '/sapi/v1/capital/config/getall';
    }
    public function getFullQuery(): array
    {
        return [];
    }
    public function checkNeedSignature(): bool
    {
        return true;
    }
}
