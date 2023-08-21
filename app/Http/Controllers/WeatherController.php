<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Weather;

class WeatherController extends Controller
{
    public function submit(Request $req) {

        $weather = new Weather;
        $weather->city = $req->input('city');
        
        //обработка данных о погоде
        $key = "6e11d40f494c5fb4f2459d35a1fe30cb";
        $response = sprintf("http://api.openweathermap.org/data/2.5/weather?q=%s&units=metric&lang=ru&appid=%s", $weather->city, $key);
        $content = file_get_contents($response);
        $data = json_decode($content, true);
        
        $weather->temperature = $data["main"]["temp"];
        $weather->sky = $data["weather"][0]["description"];

        //save
        $weather->save();
        return redirect('form');


    }
}
