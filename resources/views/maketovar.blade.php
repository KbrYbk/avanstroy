@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-mb-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-center">Создание товара</h2>
                    </div>
                    <div class="card-body">
                        <form method="post"  action="{{route('maketovar')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="name" type="text" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="img" class="col-md-4 col-form-label text-md-end">Добавить фото
                                    товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="img" type="file" name="img" required
                                           autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Цена</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="price" type="number" name="price" required autofocus>
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">description</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="description" type="text"
                                           name="description" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="category" class="col-md-4 col-form-label text-md-end">Категория</label>

                                <div class="col-md-6">
                                    <select class="form-select" name="category" id="category">
                                        @foreach($category as $obcat)
                                            <option value="{{$obcat->id}}">{{$obcat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Создать товар') }}
                                    </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
