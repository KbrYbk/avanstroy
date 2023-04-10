@extends('layouts.app')

@section('content')
<h1 class="d-flex justify-content-center text-black">Админка</h1>
<h3 class="d-flex justify-content-center text-black">Управление товаром</h3>
<div class="container">
    <div class="row">
        @foreach($product as $obprod)
        <div class="col mb-3">
            <div class="card mb-3 h-100" style="width: 18rem;">
                <img class="w-100" src="{{url('img')}}/{{$obprod->img}}">
                <div class="card-body">
                    <h5 class="d-flex justify-content-center text-black">{{$obprod->name}}</h5>
                    <div class="row">
                        <div class="col">
                            <a href="{{url('/admin/product/edit')}}/{{$obprod->id}}" class="btn btn-dark text-white">Редактировать</a>
                            <!-- это кнопка отвечает за редактирования товара -->
                        </div>
                        <div class="col">
                            <a href="{{url('/admin/product/delete/')}}/{{$obprod->id}}" class="btn btn-dark text-white">Удалить</a>
                        </div> <!-- это кнопка отвечает за удаление товара из базы данных -->
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="ynitaz text-center">
        <a href="{{url('/admin/product')}}" class="btn btn-danger justify-content-center text-white mb-3">Создать товар</a>
    </div>

<h3 class=" d-flex justify-content-center text-black">Упрваление категориями</h3>

<div class="row">
    @foreach($category as $obcat)
 
        <div class="col-sm-6">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="text-black">{{$obcat->name}}</h5>
                    <a href="{{url('/admin/category/delete/')}}/{{$obcat->id}}" class="btn btn-primary">Удалить</a>
                </div>
            </div>
        </div>
    
    @endforeach
    </div>
    <div class="koni text-center">
        <a href="{{url('/admin/category')}}" class="btn btn-danger justify-content-center text-white mb-3">Создать категорию</a>
    </div>

    </div>
@endsection