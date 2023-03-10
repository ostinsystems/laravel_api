<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
class WeatherController extends Controller
{
  public function index(){

    return view('index');
}

  public function search(Request $request){

    $data = $request->validate([
    'city' => 'required'
    ]);

    $city = $data['city'];
    $key = config('services.owm.key');

    $response = Http::get("https://api.openweathermap.org/data/2.5/weather?q=".$city."&lang=es"."&appid=".$key)
      ->json();
    if($response['cod'] == "200") {

        $weather = $response['weather'][0]['description'];
        $main = $response['weather'][0]['main'];
        $temp = $response['main']['temp'] - 273 ."°C";
        $humidity = $response['main']['humidity']."%";
        $name = $response['name'];
        $country = $response['sys']['country'];
        $ok = $response['cod'];

        \DB::table('history')->insert([
          'weather' => $weather,
          'main' => $main,
          'temp' => $temp,
          'humidity' => $humidity,
          'name' => $name,
          'country' => $country    
        ]); 

      
      return view('index', compact('weather', 'main', 'temp', 'humidity', 'name', 'country', 'ok'));
    } else {
      $notFound = true;
    return view('index', compact('notFound'));
    }
  }
}