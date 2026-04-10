<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Bienvenidos al cole de Martín';
});

// Rutas múltiples

/*Route::get('/asignaturas', function (){
    return 'Listado de Asignaturas de Martín';
});*/

Route::get('/about', function (){
    return 'Acerca del cole de Martín';
});

Route::get('/contact', function () {
    return 'Página de Contacto';
});

// Vistas BLADE

Route::get('/asignaturas', function (){
    $titulo = 'Asignaturas de Martín';
    return view('asignaturas', ['titulo' => $titulo]);
});

Route::get('/listaAsignaturas', function () {
    $asignaturas = ['Matemáticas', 'Lengua', 'Inglés', 'Conocimiento del Medio', 'Educación Física'];
    return view('listaAsignaturas', ['asignaturas' => $asignaturas]);
})->name('listaAsig');

//Rutas con Parámetros

Route::get('/asignaturas/{id}', function ($id) {
    $asignaturas = [
        ['nombre' => 'Matemáticas','superPoder' => 'Resolver problemas'],
        ['nombre' => 'Lengua', 'superPoder' => 'Dominar las palabras y la escritura'],
        ['nombre' => 'Inglés', 'superPoder' => 'Hablar con personas de todo el mundo'],
        ['nombre' => 'Conocimiento del Medio', 'superPoder' => 'Entender la naturaleza y la sociedad'],
        ['nombre' => 'Educación Física', 'superPoder' => 'Conocer los deportes y el cuerpo'],
    ];

    $asignatura = $asignaturas[$id] ?? null;

    return view('asignaturas.show', ['asignatura' => $asignatura]);
})->name('asignaturas.show');
