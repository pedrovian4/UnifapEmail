<?php


namespace App\Api;



interface IApi
{
    public function fetchOne(string |array $data): array|object | null | bool ;

    public function fetchMany(array $data): array|object | null | bool ;

    public function put(array $data): array|object | null | bool;
}


