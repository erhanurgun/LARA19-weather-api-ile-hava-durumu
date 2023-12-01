<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function index(Request $request)
    {
        $lang = $request->lang ?? app()->getLocale();
        $country = $request->cityOrCountry;
        $apiKey = env('WEATHER_API_KEY');
        $apiUrl = env('WEATHER_API_URL') . "/weather?q={$country}&units=metric&appid={$apiKey}&lang={$lang}";
        $client = new Client();
        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            // dd($data);
            $data = (object)[
                'dt' => date('d/m/Y - H:i', $data['dt']),
                'city' => $data['name'],
                'temp' => $data['main']['temp'],
                'desc' => $data['weather'][0]['description'],
                'icon' => $data['weather'][0]['icon'],
                'temp_min' => $data['main']['temp_min'],
                'temp_max' => $data['main']['temp_max'],
                'humidity' => $data['main']['humidity'],
                'wind_speed' => $data['wind']['speed'],
                'wind_deg' => $data['wind']['deg'],
                'visibility' => $data['visibility'],
                'pressure' => $data['main']['pressure'],
                'sunrise' => date('H:i', $data['sys']['sunrise']),
                'sunset' => date('H:i', $data['sys']['sunset']),
                'lat' => $data['coord']['lat'],
                'lon' => $data['coord']['lon'],
            ];
            return view('weather', compact('data'));
        } catch (\Exception $e) {
            return view('error-page', ['error' => $e->getMessage()]);
        }
    }
}
