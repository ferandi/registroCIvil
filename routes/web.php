<?php


Route::get('/', function () {
    return view('principal');
});

Route::get('/nacimiento', function () {
    return view('formulario');
});

Route::get('/defuncion', function () {
    return view('formmulario');
});

Route::get('/matrimonio', function () {
    return view('formulario');
});

Route::get('/divorcio', function () {
    return view('formulario');
});

Route::get('/reconocimiento', function () {
    return view('formulario');
});

Route::get('/adopcion', function () {
    return view('formulario');
});

