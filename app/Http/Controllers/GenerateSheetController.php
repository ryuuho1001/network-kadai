<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GenerateSheetController extends Controller
{
    public function squared(Request $request)
    {
        $request->input('number');
    }
    //
}