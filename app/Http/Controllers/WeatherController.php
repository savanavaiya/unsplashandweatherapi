<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function getkey()
    {
        $apikey = Request()->apikey;
        $q = Request()->q;
        $language = Request()->language;
        $details = Request()->details;
        $toplevel = Request()->toplevel;

        $client = new Client();

        $res = $client->request('GET', 'https://api.accuweather.com/locations/v1/cities/geoposition/search.json?apikey=' . $apikey . '&' . 'q=' . $q . '&' . 'language=' . $language . '&' . 'details=' . $details . '&' . 'toplevel=' . $toplevel);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;

        // return response()->json(['message'=>'ok'],200);
    }

    public function curcondition()
    {
        $apikey = Request()->apikey;
        $language = Request()->language;
        $details = Request()->details;
        $getphotos = Request()->getphotos;

        $client = new Client();

        $res = $client->request('GET', 'https://api.accuweather.com/currentconditions/v1/202441.json?apikey=' . $apikey . '&' . 'language=' . $language . '&' . 'details=' . $details . '&' . 'getphotos=' . $getphotos);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }

    public function houredata()
    {
        $apikey = Request()->apikey;
        $language = Request()->language;
        $details = Request()->details;
        $metric = Request()->metric;

        $client = new Client();

        $res = $client->request('GET', 'http://api.accuweather.com/forecasts/v1/hourly/24hour/202441?apikey=' . $apikey . '&' . 'language=' . $language . '&' . 'details=' . $details . '&' . 'metric=' . $metric);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }

    public function daysdata()
    {
        $apikey = Request()->apikey;
        $language = Request()->language;
        $details = Request()->details;
        $metric = Request()->metric;

        $client = new Client();

        $res = $client->request('GET', 'https://api.accuweather.com/forecasts/v1/daily/15day/202441.json?apikey=' . $apikey . '&' . 'language=' . $language . '&' . 'details=' . $details . '&' . 'metric=' . $metric);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }

    public function serchloca()
    {
        $q = Request()->q;
        $apikey = Request()->apikey;
        $language = Request()->language;
        $get_param = Request()->get_param;

        $client = new Client();

        $res = $client->request('GET', 'https://api.accuweather.com/locations/v1/cities/autocomplete?q=' . $q . '&' . 'apikey=' . $apikey  . '&' . 'language=' . $language . '&' . 'get_param=' . $get_param);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }

    public function aqi()
    {
        $apiKey = Request()->apiKey;
        $format = Request()->format;
        $scale = Request()->scale;
        $geocode = Request()->geocode;
        $language = Request()->language;
        $units = Request()->units;

        $client = new Client();

        $res = $client->request('GET', 'https://api.weather.com/v3/aggcommon/v3-wx-globalAirQuality;v3-wx-forecast-hourly-10day;v3-wx-lightning-15minute-mobile?apikey=' . $apiKey . '&' . 'format=' . $format . '&' . 'scale=' . $scale . '&' . 'geocode=' . $geocode . '&' . 'language=' . $language . '&' . 'units=' . $units);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }
}
