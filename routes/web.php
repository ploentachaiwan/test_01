<?php

use App\Backgronud;
use Illuminate\Support\Facades\Route;
// use Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//
Auth::routes();

Route::get('/about' , 'HomeController@about');

//Route::middleware(['verifyisadmin'])->group(function(){

//route Admin
Route::get('/index','Admin\AdminController@index')->name('index');

// Types
Route::get('/TypesForm','Admin\TypesController@index')->name('typesform');
Route::post('/Types/Create','Admin\TypesController@create');
Route::get('/AddTypes','Admin\TypesController@addtypes')->name('addtypes');
Route::get('/EditTypes','Admin\TypesController@edittypes')->name('edittypes');
Route::get('/Types/edit/{id_types}','Admin\TypesController@edit');
Route::post('/Types/update/{id_types}','Admin\TypesController@update');
Route::get('/Types/delete/{id_types}','Admin\TypesController@delete');


// Product
Route::get('/admin/product/index','Admin\productController@index')->name('productform');
Route::post('/Product/Create','Admin\productController@create');
Route::get('/Product/edit/{id_product}','Admin\productController@edit');
Route::get('/Addproduct','Admin\productController@addproduct')->name('addproduct');
Route::get('/Editproduct','Admin\productController@editproduct')->name('editproduct');
Route::post('/Product/update/{id_product}','Admin\productController@update');
Route::get('/Product/delete/{id_product}','Admin\productController@delete');

//home
Route::get('/','welcomeController@index')->name('welcome');


// Background
Route::get('/admin/background/index','Admin\backgroundController@index')->name('background');
Route::get('/Addbackground','Admin\backgroundController@addbackground')->name('addbackground');
Route::get('/Editbackground','Admin\backgroundController@editbackground')->name('editbackground');
Route::post('/Background/Create','Admin\backgroundController@create');
Route::get('/Background/Edit/{id_background}','Admin\backgroundController@edit');
Route::post('/Background/update/{id_background}','Admin\backgroundController@update');
Route::get('/Background/delete/{id_background}','Admin\backgroundController@delete');


// Contents
Route::get('/admin/contents/index','Admin\contentsController@index')->name('contents');
Route::get('/Addcontents','Admin\ContentsController@addcontents')->name('addcontents');
Route::get('/Editcontents','Admin\ContentsController@editcontents')->name('editcontents');
Route::post('/Contents/Create','Admin\ContentsController@create')->name('content.create');
Route::get('/Contents/edit/{id_contents}','Admin\ContentsController@edit');
Route::post('/Contents/update/{id_contents}','Admin\ContentsController@update');
Route::get('/Contents/delete/{id_contents}','Admin\ContentsController@delete');


// Specialcontents
Route::get('/admin/specialcontents/index','Admin\SpecialcontentsController@index')->name('specialcontents');
Route::get('/Addspecialcontents','Admin\SpecialcontentsController@addspecialcontents')->name('addspecialcontents');
Route::get('/Editspecialcontents','Admin\SpecialcontentsController@editspecialcontents')->name('editspecialcontents');
Route::post('/Specialcontents/Create','Admin\SpecialcontentsController@create');
Route::get('/Specialcontents/edit/{id_specialcontents}','Admin\SpecialcontentsController@edit');
Route::post('/Specialcontents/update/{id_specialcontents}','Admin\SpecialcontentsController@update');
Route::get('/Specialcontents/delete/{id_specialcontents}','Admin\SpecialcontentsController@delete');

Route::get('/home','HomeController@index')->name('home');
Route::get('welcome','HomeController@welcome')->name('welcome');

// });
