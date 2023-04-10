<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Category;

class admin extends Controller
{
    public function admin()
    {
        $product = product::all();
        $category = Category::all();
        return view('admin', ['product' => $product, 'category' => $category]);
    }
    public function proddel($id) //удалить товар
    {
        product::where('id', $id)->delete();
        return redirect(route('admin'));
    }

    public function categoriesdel($id) //удалить категорию
    {
        Category::where('id', $id)->delete();
        return redirect(route('admin'));
    }
    // переотправка на форму создания товара
    public function form()
    {
        $category = category::all();
        return view('maketovar', ['category' => $category]);
    }
    // отправка данных в базу товар
    public function maketovar(Request $request)
    {
        $file = $request->file('img');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('img'), $filename);


        product::create([ //внести в поля базы
            'name' => $request->input('name'),
            'img' => $filename,
            'price' => $request->input('price'),
            'description' => $request->input('description'),
            'category' => $request->input('category'),
        ]);

        return redirect(route('admin')); //возвращает на страницу админа
    }

    // отправка новой категории в базу
    public function makecategory(Request $request)
    {
        category::create([ //внести в поля базы

            'name' => $request->input('name')
        ]);
        return redirect(route('admin')); //возвращает на страницу админа
    }

    public function prodedit($id)
    {
        $prod = product::where('id', $id)->get();
        $cat = category::all();
        return view('editprod', ['cat' => $cat, 'prod' => $prod]);
    }

    public function produpdate(Request $request, $id)
    {
        $product = product::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->description = $request->input('description');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = time() . '_' . $image->getClientOriginalName();
            $path = $request->file('img')->move(public_path('img'), $filename);
            $product->img_url = $filename;
            $product->save();
        } else {
            $product->save();
        }
        return redirect(route('admin'));
    }
}
