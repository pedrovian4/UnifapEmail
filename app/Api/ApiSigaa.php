<?php

namespace App\Api;

use App\Api\IApi;
use GuzzleHttp;

class ApiSigaa implements IApi
{
    public function fetchOne(string | array $data) : array|object
    {
        return  (array) $data;   
    }

    public function fetchMany(array $data): array|object
    {
        return [''];
    }

    public function put(array $data)
    {   
        return 'ok';
    }

}