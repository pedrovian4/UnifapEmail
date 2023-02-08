<?php


namespace App\Api;



interface IApi
{
    public function fetchOne(string |array $data): array | object ;

    public function fetchMany(array $data): array | object ;

    public function put(array $data);
}


