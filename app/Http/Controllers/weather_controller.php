<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class weather_controller extends Controller
{
    public function index(Client $client){

        $response = Http::get('api.openweathermap.org/data/2.5/weather?q=dnepr&appid=7194c8c1458f81b6a8381ea9a6267247');
        $res_arr = $response->json();
        $data = [$res_arr['name'], $res_arr['weather'][0]['description'], ceil(floatval($res_arr['main']['temp']) - 273.15).' by C'];
        return view('weather', ['data' => $data]);

    }
}
