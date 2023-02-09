<?php

namespace App\Api;

use App\Api\IApi;
use GuzzleHttp;

class ApiSigaa implements IApi
{
    public function fetchOne(string | array $data) : array | object | null | bool
    {
        return true;
    }

    public function fetchMany(array $data): array|object | null | bool
    {
        return null;
    }

    public function put(array $data): array|object | null | bool
    {   
        return null;
    }

}