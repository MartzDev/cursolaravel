<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OtroController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\Post\PostController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cursos', function () {
    return "cursos";
});

// ruta con parametro opcional
Route::get('cursos/{curso}/{categoria?}', function (string $curso, ?string $categoria = null) {
    if ($categoria)
        return "pagina: {$curso} - categoria del curso: {$categoria}";
    return "pagina: {$curso}";
})->whereIn('categoria', ['programacion', 'analitica-de-datos', 'inteligencia-artificial'])->whereAlpha('curso');

// ruta con parametro opcional complejo
Route::get('comentarios/{id?}/{id_usuario?}/{mensaje?}/{respuesta_mensaje?}', function (?int $id = null, ?int $id_usuario = null, ?string $mensaje = null, ?string $respuesta_mensaje = 'no aplica') {
    if ($id && $id_usuario && $mensaje) {
        return "id-comentario: {$id} - id_usuario: {$id_usuario} - mensaje: {$mensaje} - respuesta-mensaje: {$respuesta_mensaje}";
    } else {
        return "comentarios";
    }
})->name('comentarios.index');

// protegiendo rutas con expresiones regulares
Route::get('asignaturas/{id?}', function (int $id = null) {
    return 'asignaturas: ' . $id;
})->whereNumber('id');

// protegiendo rutas con expresiones regulares
Route::get('empleados/{id?}', function (int $id = null) {
    return 'empleados: ' . $id;
})->whereNumber('id');

// protegiendo rutas con expresiones regulares
Route::get('libros/{id?}', function (int $id = null) {
    return 'libros: ' . $id;
})->whereNumber('id');

// se modifico la uri y se tuvo que agregar parametro y nombre del recurso para evitar cambiar en el codigo restante donde se implementa
// enrutamiento de recursos
Route::resource('usuarios', UsuariosController::class)->parameters(['usuarios' => 'users'])->names('users');

// rutas con multiples recursos
Route::resources([
    'photos' => PhotoController::class,
    'posts' => PostController::class,
    'homes' => HomeController::class,
    'otros' => OtroController::class,
]);

// grupo de rutas de controladores,
Route::controller(PedidoController::class)->prefix('pedidos')->name('pedidos.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('/', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::get('/{id}/edit', 'edit')->name('edit');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'delete')->name('delete');
});

// ruta para componentes de clase
Route::get('componente-clase', function () {
    return view('componente-clase.index');
});
