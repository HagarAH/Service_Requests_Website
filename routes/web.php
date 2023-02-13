<?php

use App\Http\Controllers\ProfileController;
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




Route::get('/',  [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/user/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/user/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');
    Route::patch('/user/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => 'admin', 'auth', 'verified'], function () {

    Route::resource('/profileA', \App\Http\Controllers\AdminProfileController::class);

    $mains = [
        'post',
        'server',
    ];
    foreach ($mains as $main) {

        Route::get("/{$main}s", "{$main}\IndexController")->name("admin.{$main}.index");
        Route::get("/{$main}s/{{$main}}/edit", "{$main}\EditController")->name("admin.{$main}.edit");
        Route::patch("/{$main}s/{{$main}}", "{$main}\UpdateController")->name("admin.{$main}.update");

    }


    $models = [
        ['cpu', 'cpus'],
        ['daire', 'daires'],
        ['disk', 'disks'],
        ['mudurluk', 'mudurluks'],
        ['ram', 'rams'],
        ['system', 'systems'],
        ['category', 'categories'],
    ];

    foreach ($models as $model) {
        $routeName = $model[0];
        $routePlural = $model[1];

        Route::get("/{$routePlural}", "{$routeName}\IndexController")->name("admin.{$routeName}.index");
        Route::get("/{$routePlural}/create", "{$routeName}\CreateController")->name("admin.{$routeName}.create");
        Route::post("/{$routePlural}", "{$routeName}\StoreController")->name("admin.{$routeName}.store");
        Route::get("/{$routePlural}/{{$routeName}}/edit", "{$routeName}\EditController")->name("admin.{$routeName}.edit");
        Route::patch("/{$routePlural}/{{$routeName}}", "{$routeName}\UpdateController")->name("admin.{$routeName}.update");
        Route::delete("/{$routePlural}/{{$routeName}}", "{$routeName}\DestroyController")->name("admin.{$routeName}.delete");
    }
});




Route::group(['namespace' => 'App\Http\Controllers\User', 'prefix' => 'user', 'middleware' => 'user', 'auth', 'verified'], function () {

    Route::get('/servers', 'Server\IndexController')->name('user.server.index');
    Route::get('/servers/create', 'Server\CreateController')->name('user.server.create');
    Route::post('/servers', 'Server\StoreController')->name('user.server.store');
    Route::get('/servers/{server}/edit', 'Server\EditController')->name('user.server.edit');
    Route::patch('/servers/{server}', 'Server\UpdateController')->name('user.server.update');
    Route::delete('/servers/{server}', 'Server\DestroyController')->name('user.server.delete');

    Route::resource('/Post', 'Post\PostController');

});





require __DIR__.'/auth.php';
