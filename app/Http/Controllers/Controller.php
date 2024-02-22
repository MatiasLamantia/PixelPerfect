<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Http;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

        public function index()
        {
        // Realizar la solicitud a la API y obtener los datos
        $response = Http::get('https://api.rawg.io/api/games?key=c925af6dad62464ab96f6c4666a17175');
  
        // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            // Obtener los datos en formato JSON
            $data = $response->json();

            // Devolver los datos a la vista 'index'
            //return view('index', ['data' => $data]);
            return $data;
        } else {
            // En caso de error, mostrar mensaje de error
            return "Error al obtener datos de la API";
        }
    }

    
}
