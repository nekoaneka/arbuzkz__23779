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
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_arbuz.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/catalog/catalog.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}" >
    <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>

</head>
@extends('layouts.header')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-lg-2 full-width-below-lg">
                <li class="breadcrumb-item">
                    <a href="/" class="text-success" title="Главная">Arbuz.kz</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('catalog.'.$product->catalog_name.'.'.$product->category_name) }}"
                    class="text-success">
                        Back
                    </a>
                </li>
            </ol>
        </nav>

        <div class="col-sm-12 col-md-12 col-lg-12">
            <!-- product -->
            <div class="product-content product-wrap clearfix product-deatil">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 ">
                        <div class="product-image">
                            <img src="/img/{{ $product->image_path }}" alt="/img/{{ $product->image_path }}">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">

                        <h2 class="name">
                            {{ $product->name }}
                        </h2>
                        <hr>
                        <h3 class="price-container">
                            Цена: {{ $product->price }} тг
                        </h3>
                        <hr>
                        <div class="description description-tabs">
                            <h5>Description</h5>
                                    <p id="description">
                                        {{ $product->description }}
                                    </p>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-lg-6">
                                <form action="{{ route('cart.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="{{ $product->id }}" id="id" name="id">
                                    <input type="hidden" value="{{ $product->name }}" id="name" name="name">
                                    <input type="hidden" value="{{ $product->price }}" id="price" name="price">
                                    <input type="hidden" value="{{ $product->image_path }}" id="img" name="img">
                                    <input type="hidden" value="{{ $product->slug }}" id="slug" name="slug">
                                    <input type="hidden" value="1" id="quantity" name="quantity">
                                    <div class="card-footer">
                                        <div class="row">
                                            <button class="btn btn-success btn-md" class="tooltip-test" title="add to cart">
                                                <i class="fa fa-shopping-cart"></i> Добавить в Корзину
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <hr />
                            <h4>Display Comments</h4>
                        @foreach($comments as $comment)
                            @if($comment->commentabla_id == $product->id)
                                <div class="display-comment">
                                    <strong>{{ $comment->user()->name }}</strong>
                                    <p>{{ $comment->body }}</p>
                                </div>
                            @endif
                        @endforeach
                        <hr />
                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comment.add') }}">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="comment_body" class="form-control" />
                                <input type="hidden" name="product_id" value="{{ $product->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-warning" value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- end product -->
        </div>
    </div>


@endsection

