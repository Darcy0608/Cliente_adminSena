<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApprenticeController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi(string $url){
        $response = Http::get($url);
        return $response->json();
    }



    // Muestra el listado de aprendices
    public function index(){
        $url = env('URL_SERVER_API');

        $apprentices = $this->fetchDataFromApi($url . '/apprentice/index');
        return view('apprentice.index', compact('apprentices'));
    }



    // Muestra el formulario para crear un aprendiz
    public function create(){
        $url = env('URL_SERVER_API');

        // Consultamos los cursos y computadores para los select
        $courses = $this->fetchDataFromApi($url . '/course/index');
        $computers = $this->fetchDataFromApi($url . '/computer/index');

        return view('apprentice.create', compact('courses', 'computers'));
    }



    // Almacena un nuevo aprendiz
    public function store(Request $request){
        $url = env('URL_SERVER_API');

        Http::post($url . '/apprentice', $request->all());
        return redirect()->route('apprentice.index');
    }



    // Muestra la informacion de un aprendiz
    public function show(int $id){
        $url = env('URL_SERVER_API');

        $apprentice = $this->fetchDataFromApi($url . '/apprentice/' . $id);
        return view('apprentice.show', compact('apprentice'));
    }


    // Muestra el formulario para editar un aprendiz
    public function edit(int $id){
        $url = env('URL_SERVER_API');

        // Consultamos los datos del aprendiz
        $apprentice = $this->fetchDataFromApi($url . '/apprentice/' . $id);

        // Consultamos los cursos y computadores disponibles
        $courses = $this->fetchDataFromApi($url . '/course/index');
        $computers = $this->fetchDataFromApi($url . '/computer/index');

        return view('apprentice.edit', compact('apprentice', 'courses', 'computers'));
    }



    // Actualiza la informacion de un aprendiz
    public function update(Request $request, int $id){
        $url = env('URL_SERVER_API');

        Http::put($url . '/apprentice/' . $id, $request->all());
        return redirect()->route('apprentice.index');
    }


    // Elimina un aprendiz
    public function destroy(int $id){
        $url = env('URL_SERVER_API');

        Http::delete($url . '/apprentice/' . $id);
        return redirect()->route('apprentice.index');
    }
}
