<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TrainingCenterController extends Controller
{
    // Método privado para manejar llamadas HTTP repetitivas
    private function fetchDataFromApi(string $url){
        $response = Http::get($url);
        return $response->json();
    }



    public function index(){
        $url = env('URL_SERVER_API');

        $training_centers = $this->fetchDataFromApi($url . '/training-center/index');
        // return $training_centers;
        return view('training-center.index', compact('training_centers'));
    }



    public function create(){
        return view('training-center.create');
    }



    public function store(Request $request){
        $url = env('URL_SERVER_API');

        Http::post($url . '/training-center', $request->all());
        return redirect()->route('training-center.index');
    }



    public function show(int $id){
        $url = env('URL_SERVER_API');

        $training_center = $this->fetchDataFromApi($url . '/training-center/' . $id);
        return view('training-center.show', compact('training_center'));
    }



    public function edit(int $id){
        $url = env('URL_SERVER_API');

        $training_center = $this->fetchDataFromApi($url . '/training-center/' . $id);
        return view('training-center.edit', compact('training_center'));
    }



    public function update(Request $request, int $id){
        $url = env('URL_SERVER_API');

        Http::put($url . '/training-center/' . $id, $request->all());
        return redirect()->route('training-center.index');
    }



    public function destroy(int $id){
        $url = env('URL_SERVER_API');

        Http::delete($url . '/training-center/' . $id);
        return redirect()->route('training-center.index');
    }
}
