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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/page.css') }}" >
    <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>

</head>

@extends('layouts.header')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-lg-0 full-width-below-lg">
                <li class="breadcrumb-item">
                    <a href="/" title="Главная">Arbuz.kz</a>
                </li>
                <li class="breadcrumb-item active">
                    <span>Акции</span>
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12 col-md-2 d-none d-md-block">
                <aside>
                    <ul class="nav nav-pills article-nav side-nav-pills flex-column">
                        <li class="nav-item">
                            <a href="{{ route('page.about') }}" class="nav-link ">
                                О нас
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                Оплата
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.dostavka') }}" class="nav-link">
                                Доставка
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.faq') }}" class="nav-link ">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                Политика возврата товара
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-sm-12 col-md-9">
                <div class="row">
                    <div class="col-md-12 publication-item">
                        <a href="/ru/actions/247410-my_otklyuchili_vse_promokody" class="d-block">
                            <div class="mt-2 mb-2">
                                <b>
                                    Мы отключили все промокоды
                                </b>
                            </div>
                            <div class="image-full">
                                <img src="https://arbuz.kz/image/s/247410-my_otklyuchili_vse_promokody.jpg/w/1001" alt="Мы отключили все промокоды" class="d-block">
                            </div>
                        </a>
                        <p class="mt-2">

                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination mt-3 justify-content-center flex-wrap">
                                <li class="page-item pagination-item disabled">
                                    <a href="?limit=12&amp;page=1" aria-label="Previous" class="page-link">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">
                                            Previous
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item pagination-item active">
                                    <a href="?limit=12&amp;page=1" class="page-link">1</a>
                                </li>
                                <li class="page-item pagination-item disabled">
                                    <a href="?limit=12&amp;page=1" aria-label="Next" class="page-link">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">
                                            Next
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
