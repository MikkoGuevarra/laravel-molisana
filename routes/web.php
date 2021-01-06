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
    return view('home');
});

Route::get('/prodotti', function () {
    $array_pasta = config('pasta');
    /*
    $lunga = array_filter($array_pasta, function($elemento){
        return $elemento['tipo'] == 'lunga';
    });
    $corta = array_filter($array_pasta, function($elemento){
        return $elemento['tipo'] == 'corta';
    });
    $cortissima = array_filter($array_pasta, function($elemento){
        return $elemento['tipo'] == 'cortissima';
    });
    */

    //Collection

    $collection_pasta = collect($array_pasta);
    $lunga = $collection_pasta->where('tipo', 'lunga');
    $corta = $collection_pasta->where('tipo', 'corta');
    $cortissima = $collection_pasta->where('tipo', 'cortissima');
    $data = [
        'formati' => [
            'lunga' => $lunga,
            'corta' => $corta,
            'cortissima' => $cortissima
        ]
    ];
    return view('prodotti', $data);
})->name('prodotti');

Route::get('/dettagli-prodotto/{id}', function($id){
    $array_pasta = config('pasta');
    if (is_numeric($id) && $id > 0 && $id < count($array_pasta) ) {
        $prodotto = $array_pasta[$id];

        $data = [
            'formato' => $prodotto
        ];
        return view('dettagli', $data);
    } else {
        abort('404');
    }
})->name('details');

Route::get('/news', function () {
    return view('news');
})->name('news');
