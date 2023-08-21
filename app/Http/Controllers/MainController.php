<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weather;

class MainController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function form() {
        return view('form');
    }
    public function weather() {
        $weather = new Weather;
        return view('weather', ['weather'=>$weather->all()]);
    }
}
