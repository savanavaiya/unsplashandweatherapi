<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UnsplashController extends Controller
{
    public function photos()
    {
        $client_id = Request()->client_id;
        $page = Request()->page;
        $per_page = Request()->per_page;
        $order_by = Request()->order_by;

        $client = new Client();

        $res = $client->request('GET', 'https://api.unsplash.com/photos?client_id='.$client_id.'&'.'page='.$page.'&'.'per_page='.$per_page.'&'.'order_by='.$order_by);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }

    public function collections()
    {
        $client_id = Request()->client_id;
        $page = Request()->page;
        $per_page = Request()->per_page;

        $client = new Client();

        $res = $client->request('GET', 'https://api.unsplash.com/collections?client_id='.$client_id.'&'.'page='.$page.'&'.'per_page='.$per_page);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }

    public function collectionsphotos()
    {
        $client_id = Request()->client_id;
        $page = Request()->page;
        $per_page = Request()->per_page;

        $client = new Client();

        $res = $client->request('GET', 'https://api.unsplash.com/collections/9454911/photos?client_id='.$client_id.'&'.'page='.$page.'&'.'per_page='.$per_page);

        if ($res->getStatusCode() == 200) { // 200 OK
            $response_data = $res->getBody()->getContents();
        }

        return $response_data;
    }
}
