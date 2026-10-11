<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrainingEnvironmentController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi(string $url){
        $response = Http::get($url);
        return $response->json();
    }



    public function index(){
        $url = env('URL_SERVER_API');

        $training_environments = $this->fetchDataFromApi($url . '/training-environment/index');
        // return $training_environments;
        return view('training-environment.index', compact('training_environments'));
    }


    public function create(){
        return view('training-environment.create');
    }



    public function store(Request $request){
        $url = env('URL_SERVER_API');

        Http::post($url . '/training-environment', $request->all());
        return redirect()->route('training-environment.index');
    }



    public function show(int $id){
        $url = env('URL_SERVER_API');

        $training_environment = $this->fetchDataFromApi($url . '/training-environment/' . $id);
        return view('training-environment.show', compact('training_environment'));
    }



    public function edit(int $id){
        $url = env('URL_SERVER_API');

        $training_environment = $this->fetchDataFromApi($url . '/training-environment/' . $id);
        return view('training-environment.edit', compact('training_environment'));
    }



    public function update(Request $request, int $id){
        $url = env('URL_SERVER_API');

        Http::put($url . '/training-environment/' . $id, $request->all());
        return redirect()->route('training-environment.index');
    }



    public function destroy(int $id){
        $url = env('URL_SERVER_API');

        Http::delete($url . '/training-environment/' . $id);
        return redirect()->route('training-environment.index');
    }
}
