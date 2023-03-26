<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

//регистрация авторизация
Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');//на страницу логина кидает

//главная страница
Route::get('/', [CatalogController::class, 'index']);//вывод товара на главной странице

//работа с товаром
Route::get('/catalog', [CatalogController::class, 'catalog']);//вывод всего товара на странице каталога
Route::get('/catalog/product/{product}', [CatalogController::class, 'show']);//вывод одного товара и всей его информации
Route::get('/catalog/sort', [CatalogController::class, 'catalog']);//сортировка по имени и цене на странице каталога
Route::get('/catalog/category/{category}', [CatalogController::class, 'category']);//фильтр по категории
Route::get('/catalog/{category_id}', [CatalogController::class, 'category']);//сортировка внутри категории

//ссылки и функции админа