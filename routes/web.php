<?php

use Illuminate\Support\Facades\Route;
//Homeapge
//Chi sono
//Servizi 
Route::get('/', function () {
    return view('welcome');
});

Route::get('/chi-sono', function () {
    return view('about');
});


// Route::get('/servizi', function () {

//     //$services = ['web', 'ciccio', 'market', 'consulenza']; //array semplice
//     $services = json_decode(file_get_contents('products.json'));

//     $titolo = 'I miei Servizi';

//     return view('services', ['services' => $services, 'titolo' => $titolo]);
// });
Route::get('/servizi', function () {

    $services = ['web', 'ciccio', 'market', 'consulenza']; //array semplice
    $titolo = 'I miei Servizi';

    return view('services', ['services' => $services, 'titolo' => $titolo]);
});

//Rotta parametrica
Route::get('/dettagli/{ciccio}', function ($ciccio) {
    return $ciccio;
});

// Route::get('/sasmung-s22', function () {
//     return view('about');
// });

// Route::get('/sasmung-s20', function () {
//     return view('about');
// });
