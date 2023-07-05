<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function getting_started(){
        return view('charts/getting_started');
    }
}
