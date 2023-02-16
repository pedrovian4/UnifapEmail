<?php

namespace App\Http\Controllers;

use App\Api\ApiSigaa;

use App\Api\IApi;
use App\Http\Requests\UserSigaaRequest;
use App\Models\Log;

class ApiController extends Controller
{

    public Iapi $api;
    public function __construct($instance = ApiSigaa::class)
    {

        $this->api = new $instance;

    }

    public function checkUserSiggaa(UserSigaaRequest $request)
    {
        $user = Log::where('tuition_number', $request->input('tuition_number'))->get()->first();
        if($user || !$this->api->fetchOne(['parameter'=>'data'])){
            $request->session()->flash('status', 'Usuário já possui email');
            return redirect('/');
        }
        $request->session()->put('access', true);
        $request->session()->put('tuition_number',$request->input('tuition_number'));
        return redirect('/termoAceite');
    }


}
