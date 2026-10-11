<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi(string $url){
        $response = Http::get($url);
        return $response->json();
    }



    public function index(){
        // Consultamos la URL de la API
        $url = env('URL_SERVER_API');

        // Consultamos los cursos y contamos los registros
        $courses = $this->fetchDataFromApi($url . '/course/index');
        $totalCourses = count($courses);

        // Consultamos los aprendices y contamos los registros
        $apprentices = $this->fetchDataFromApi($url . '/apprentice/index');
        $totalApprentices = count($apprentices);

        // Consultamos los instructores y contamos los registros
        $teachers = $this->fetchDataFromApi($url . '/teacher/index');
        $totalTeachers = count($teachers);

        // Enviamos los totales a la vista home
        return view('home', compact('totalCourses', 'totalApprentices', 'totalTeachers'));
    }
}
