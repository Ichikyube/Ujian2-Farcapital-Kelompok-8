<?php

namespace App\Helpers;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\RequestInterface;


class HttpClient
{
    static function fetch($method, $url, $body = [], $files = []) {
        // jika method get, langsung return response dengan method get
        if($method == "GET")  return  Http::get($url)->json();

        if(sizeof($files) > 0) {
            $client = Http::asMultipart();

            // attach setiap file pada client
            foreach($files as $key => $file) {
                $path = $file->getPathName();
                $name = $file->getClientOriginalName();
                //attach file
                $client->attach($key, file_get_contents($path), $name);
            }

            //fetch api
            return $client->post($url, $body);
        }
        return Http::post($url, $body)->json();
    }
}
