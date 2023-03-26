<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product; //путь до модели
use App\Models\Category; //путь до модели

class CatalogController extends Controller
{
    public function index() //вывод товара на главной странице
    {
        $products = Product::OrderBy('id', 'desc')->limit(8)->get(); //вывод только восьми товаров с базы, от нового товара к старому
        return view('about', ['products' => $products]); //на какую страницу вывести
    }

    // public function catalog() //вывод всего товара на страницу каталог
    // {
    //     $products = Product::all(); //весь товар с таблицы 'product'
    //     $categories = Category::all(); //все категории с таблицы 'category'        
    //     return view('catalog', ['products' => $products, 'categories' => $categories]); //на какую страницу вывести
    // }

    public function show(Product $product) //вывод одного продукта
    {
        return view('oneproduct', ['product' => $product]); //на какую страницу вывести
    }
    
    // public function category($id) //фильтр по категориям
    // {
    //     $category = Category::findOrFail($id); //получаем объект категории по ID
    //     $products = $category->products; //получаем все товары, связанные с этой категорией
    //     return view('catalog-category', ['category' => $category, 'products' => $products]); //на какую страницу вывести
    // }
    
    public function catalog(Request $request) //вывод всего товара на страницу каталог с сортировкой по имени и цене
    {
        $sort_by = $request->query('sort_by', 'name'); //стандартная сортировка по имени
        $sort_order = $request->query('sort_order', 'asc'); //стандартная сортирвока от старого к новому
        
        $categories = Category::all(); //вывод всего товара
        $products = Product::orderBy($sort_by, $sort_order)->get();//получение выбранных параметров
        
        return view('catalog', ['categories' => $categories, 'products' => $products, 'sort_by' => $sort_by, 'sort_order' => $sort_order]);//идентификация всех массивов на страницу каталога 
    }
    
    public function category($category_id, Request $request)
    {
        $sort_by = $request->query('sort_by', 'name');//стандартная сортировка по имени
        $sort_order = $request->query('sort_order', 'asc');//стандартная сортирвока от старого к новому
        
        $category = Category::findOrFail($category_id);//вывод товара по выбранному id категории
        $products = $category->products()->orderBy($sort_by, $sort_order)->get();//вывод продуктов связвных с категорией и стандартными сортировками
        
        return view('catalog-category', ['category' => $category, 'products' => $products, 'sort_by' => $sort_by, 'sort_order' => $sort_order]);//идентификация всех массивов на страницу каталога 
    }
}
