<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin;
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
Route::get('/admin', [admin::class, 'admin'])->name('admin');//Админ панель
Route::get('/admin/product', [admin::class, 'form']);//Форма создания товара
Route::get('/admin/product/edit/{id}', [admin::class, 'prodedit']);//Форма создания товара
Route::post('/admin/product/edit/{id}/update', [admin::class, 'produpdate'])->name('produpdate');//Форма создания товара
Route::post('/admin/product/create', [admin::class, 'maketovar'])->name('maketovar'); // Отправка данных в базу данных
Route::get('/admin/product/delete/{id}', [admin::class, 'proddel']);//Удаление продукта из базы данных
Route::get('/admin/category', function () {
    return view('createcat');
});//Форма создания категорий
Route::post('/admin/category/create', [admin::class, 'catcreate'])->name('createcat');
Route::get('/admin/category/delete/{id}', [admin::class, 'categoriesdel']);//Удаление категории из базы данных
Route::get('/admin', [Admin::class, 'admin'])->name('admin'); //страница админа с редактированием данных
//админ-товар
Route::get('/admin/product/delete/{id}', [Admin::class, 'proddel']); //Удаление продукта из базы данных
//админ-категория
Route::get('/admin/category', function () {
    return view('makecategory');
}); //Форма создания категории
Route::post('/admin/category/create', [Admin::class, 'makecategory'])->name('makecategory'); // Отправка данных категории в базу данных