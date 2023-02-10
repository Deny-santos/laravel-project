<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    $name = "deny";
    $idade = 23;
    $arr = [12,2,3,4,5,6];
    $nomes = ["ana", "joão", "saulo", "pedro", "mateus"];
    
    return view('welcome',
        [
            "name" => $name,
            "idade2" => $idade,
            "arr" => $arr,
            "nomes" => $nomes
        ]

    );
});

Route::get("/contact", function (){
    return view('contact');
});

Route::get("/produtos", function (){

    $busca = request("search"); //query params

    return view("products", ["busca" => $busca]);
});

Route::get("/produto/{id?}", function ($id = null){ //por padrau é o 1 para não dar erro, alem do ?

    return view("product", ["id" => $id]);
});
