<?php

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

Route::get('/usuario/{id}', 'UserController@show')->name('user.show');
Route::get('/endereco/{adress}', 'AdressController@show')->name('adress.show');
Route::get('/artigo/{post}', 'PostController@show')->name('post.show');
Route::get('/categoria/{category}', 'CategoryController@show')->name('category.show');

// Route::get('/', 'PostController@showForm')->name('post.shoForm');
// Route::post('/debug', 'PostController@debug')->name('debug');

// Route::resource('usuarios', 'Form\TestController')->names('user')->parameters(['usuarios' => 'user']);

// Route::get('listagem-usuario', 'UserController@listUser');

// Route::group(['namespace' => 'Form'], function() {

//     Route::get('usuarios', 'TestController@listAllUsers')->name('users.listAll');
//     Route::get('usuarios/novo', 'TestController@formAddUser')->name('user.formAdd');
//     Route::get('usuarios/editar/{user}', 'TestController@formEditUser')->name('user.formEdit');
//     Route::get('usuarios/{user}', 'TestController@listUser')->name('user.list');
    
//     Route::post('usuarios/store', 'TestController@storeUser')->name('user.store');
    
//     Route::put('usuarios/edit/{user}', 'TestController@edit')->name('users.edit');
    
//     Route::delete('usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
// });
