<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailGenerationController extends Controller
{
    public function create(Request $request)
    {
        //TODO
        return json_encode(['test'=>'test']);
    }

    public function sendMailConfirmation(Request $request)
    {
        return null;
    }
}
