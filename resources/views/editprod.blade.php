@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-mb-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="d-flex justify-content-center">Редактирование товара</h2>
                    </div>
                    <div class="card-body">
                        @foreach($prod as $obprod)
                        <form method="post"  action="{{route('produpdate',$obprod->id)}}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Название товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" value="{{$obprod->name  }}" id="name" type="text" name="name" required autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="img_url" class="col-md-4 col-form-label text-md-end">Добавить фото
                                    товара</label>

                                <div class="col-md-6">
                                    <input class="form-control" value="{{$obprod->img_url}}" id="img_url" type="file" name="img_url"
                                           autofocus>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="price" class="col-md-4 col-form-label text-md-end">Цена</label>

                                <div class="col-md-6">
                                    <input class="form-control" value="{{$obprod->price}}" id="price" type="text" name="price" required autofocus>
                                </div>
                            </div>
                            
                            
                            @endforeach
                           
                            @foreach($prod as $objprod)
                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">description</label>

                                <div class="col-md-6">
                                    <input class="form-control" value="{{$objprod->description}}" id="description" type="text"
                                           name="description" required autofocus>
                                </div>
                            </div>
                            @endforeach
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Отредактировать товар') }}
                                    </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection