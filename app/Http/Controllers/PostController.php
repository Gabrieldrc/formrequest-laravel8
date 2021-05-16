<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(PostRequest $request)
    {
        /**
         * La validacion está en el archivo PostRequest
         * que creamos utilizando el comando:
         * "php artisan make:request PostRequest"
         * donde hicimos la validacion (revisar)
         * y en vez de recibir por parametro un request,
         * lo cambiamos por el PostRequest que creamos
         * para que se realicen dichas verificaciones
         *
         * Se hizo de esta manera porque una buena practica
         * es realizar aislar la logica de validacion a
         * otro archivo
         */

        dd($request->all());
    }
}
