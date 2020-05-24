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
                    <span>Доставка</span>
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
                            <a href="{{ route('page.dostavka') }}" class="nav-link active nav-link-secondary">
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
            <div class="col-sm-12 col-md-8 ml-5">
                <article class="article content">
                    <h1>Доставка</h1>
                    <div class="description">
                        <p>
                            <strong>Внимание! Сроки доставки могут быть увеличены до нескольких дней,
                                в связи с карантином в Алматы из-за коронавируса. Мы делаем все возможное,
                                чтобы ускорить доставку для всех. Просим отнестись с пониманием!</strong>
                        </p>

                        <p>&nbsp;</p>

                        <p>Доставка по всему городу Алматы бесплатна от 7 000 тенге.&nbsp;Заказывайте Arbuz.kz
                            в любой район Алматы.</p>

                        <p>
                            <img alt="almaty_map" src="/img/dostavka_karta.png" style="width: 550px; height: 550px;">
                        </p>

                        <p>Мы доставляем товары день в день — 7 дней в неделю, с 10.00 до 22.00</p>
                        <hr>
                        <p dir="ltr">
                            <strong>Стоимость доставки</strong>
                        </p>
                        <p dir="ltr">700 тенге по всему городу Алматы, при заказе на сумму меньше 7 000 тг.
                            При заказе на сумму свыше 7 000 в пределах официальных границ г. Алматы — бесплатно.</p>

                        <p dir="ltr">&nbsp;</p>
                        <p>&nbsp;</p>

                        <div class="page-text mt-2">
                            <div class="page-text-head h5">
                                Доставка осуществляется только в городе Алматы.&nbsp;
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
