<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GlobalSearchController extends Controller
{
    // Metodo privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi(string $url){
        $response = Http::get($url);
        return $response->json();
    }



    // Realizamos la busqueda global en la API
    public function search()
    {
        $url = env('URL_SERVER_API');

        $results = $this->fetchDataFromApi($url . '/buscar');
        // Enviamos los resultados a la vista
        return view('buscar', compact('results'));
    }
}
