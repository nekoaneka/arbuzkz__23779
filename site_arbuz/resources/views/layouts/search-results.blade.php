<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>arbuzkz</title>
    <link rel="shortcut icon" href="/img/watermelon--v2.png" type="image/png">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_arbuz.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/сart/cart.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>

</head>
@extends('layouts.header')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <br>
                @if ($products->count() > 0)
                    <h4>Найдено {{ $products->count() }} продукт(ов) по запросу
                        '{{ request()->input('searchform') }}'</h4><br>
                @else
                    <div style="margin-left: 200px;">
                        <h4 class="mt-2">Ничего не найдено по запросу '{{ request()->input('searchform') }}'</h4><br>
                        <a href="/" class="btn btn-dark ml-3">Вернуться на Главную страницу</a>
                    </div>
                @endif

                @foreach($products as $pro)
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="/img/{{ $pro->image_path }}" class="img-thumbnail" width="200" height="200">
                        </div>
                        <div class="col-lg-5">
                                <h5><a class="text-dark" href="/shop/{{ $pro->slug }}">{{ $pro->name }}</a></h5><br>
                                <p>Цена: {{ $pro->price }} тг</p>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                    <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                        <div class="row">
                                            <button class="btn btn-secondary btn-md mt-3" class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"></i> add to cart
                                            </button>
                                        </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <br><hr>
                @endforeach

            </div>
        </div>
        <br><br>
    @include('layouts.footer')
@endsection
