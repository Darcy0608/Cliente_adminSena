<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GlobalSearchController extends Controller
{
    // Consulta la API y devuelve los resultados en formato objeto
    private function fetchDataFromApi(string $url, string $query)
    {
        $response = Http::get($url, [
            'query' => $query,
        ]);

        return $response->object();
    }

    // Realiza la búsqueda y muestra los resultados
    public function search(Request $request)
    {
        // Validamos que se ingrese un término de búsqueda
        $request->validate([
            'query' => ['required', 'string'],
        ]);

        // Obtenemos el texto que escribió el usuario
        $query = trim($request->input('query'));

        // Verificamos que el término no esté vacío
        if ($query === '') {
            return back()->with('error', 'Debes ingresar un término de búsqueda.');
        }

        // Obtenemos la dirección de la API
        $url = rtrim(env('URL_SERVER_API'), '/');

        // Consultamos la API y recibimos los resultados
        $data = $this->fetchDataFromApi(
            $url . '/buscar',
            $query
        );

        // Convertimos cada grupo de resultados en una colección
        $apprentices = collect($data->apprentices ?? []);
        $courses = collect($data->courses ?? []);
        $computers = collect($data->computers ?? []);
        $teachers = collect($data->teachers ?? []);
        $areas = collect($data->areas ?? []);
        $trainingCenters = collect($data->trainingCenters ?? []);

        // Enviamos los resultados a la vista existente
        return view('search.results', compact(
            'query',
            'apprentices',
            'courses',
            'computers',
            'teachers',
            'areas',
            'trainingCenters'
        ));
    }
}
