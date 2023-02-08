<?php

namespace App\Http\Controllers;

use App\Api\ApiSigaa;
use Illuminate\Http\Request;

use App\Api\IApi;
use App\Http\Requests\UserSigaaRequest;

class ApiController extends Controller
{

    public Iapi $api;
    public function __construct($instance = ApiSigaa::class)
    {

        $this->api = new $instance;

    }


    public function CheckUserSiggaa(UserSigaaRequest $request)
    {
         $data = $this->api->fetchOne($request->except('_token'));

         return $data;

    }
}
