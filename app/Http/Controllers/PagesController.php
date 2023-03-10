<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(Request $request)
    {
        return view('home.index');
    }


    public function termoAceite(Request $request)
    {
        $termoAceiteLink = "https://drive.google.com/file/d/1qMVyGHqYS1g6BIriUuOcQd4JTPTFHtgb/preview";
        if($request->session()->get('access')){
            return view('termoAceite.termoAceite',[
                "termoAceite"=> $termoAceiteLink
            ]);
        }
        return redirect('/');
    }
}
