<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return "Hola desde la página principal";
});

//      Ruta para mostrar el listado de registros
Route::get('/posts', function(){
    return "Hola desde la página de posts";
});

//      Ruta para mostrar un formulario para crear registro
Route::get('/post/create', function(){
    return 'Aqui se mostrar un formulario para crear un post';
});

//      Ruta para guardar un registro
Route::post('/posts', function(){
    return 'Aqui se procesará el formulario para crear un post';
});

//      Ruta para mostrar un registro
Route::get('/posts/{post}', function($post){
    return "Aqui se mostrará el post: $post";
});

//      Ruta para mostrar un formulario para editar un registro
Route::get('/posts/{post}/edit', function($post){
    return "Aqui se mostrará el formulario para editar el post: $post";
});

//      Ruta para actualizar un registro
Route::put('/posts/{post}', function($post){
    return "Aqui se procesará el formulario para editar el post: $post";
});

//      Ruta para eliminar un registro
Route::delete('/posts/{post}', function($post){
    return "Aqui se eliminará el post: $post";
});


/*--------------------------------------------------------------------------------------- */

/*
        Sección 4: Rutas

12. Cómo definir rutas
13. Cómo pasar parametros
14. Cómo proteger rutas con expresiones regulares
15. Lista de rutas
16. Cómo nombrar rutas
17. Cómo almacenar rutas en el caché
18. Rutas necesarias para hacer un crud















Route::get('/contacto', function(){
    return "Hola desde contactos usando get";
});



Route::get('/cursos/informacion', function(){
    return "Aqui podras encontrar toda la información de las cosas";
})->name('cursos.informacion');



Route::get('/cursos/{id}', function($id){
    return "Bienvenido al curso con id: $id";
})->name('cursos.show');

*/



//  where('curso', '[A-Za-z]+');
//  whereAlpha
//  whereIn('curso', ['php', 'laravel', 'react', 'ciencia de datos', 'cyberseguridad']);








/*
Route::get('/cursos/{curso}', function($curso){
    return "Bienvenido al curso: $curso";
})->where('curso', '[A-Za-z]+')->name('cursos.show');
*/








/*

        Pasar parametros a las rutas:

Route::get('/cursos/{curso}/{category?}', function($curso, $category = null){

    if($category){
        return "Bienvenido al curso: $curso de la categoria: $category";
    } else {
        return "Bienvenido al curso: $curso";
    }

});



        Proteger rutas con expresiones regulares:

Route::get('/cursos/{curso}/{category?}', function($curso, $category = null){

    if($category){
        return "Bienvenido al curso: $curso de la categoria: $category";
    } else {
        return "Bienvenido al curso: $curso";
    }

})->where(['curso' => '[A-Za-z]+', 'category' => '[A-Za-z]+']);
*/

