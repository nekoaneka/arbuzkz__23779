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
                    <span>О нас</span>
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12 col-md-2 d-none d-md-block">
                <aside>
                    <ul class="nav nav-pills article-nav side-nav-pills flex-column">
                        <li class="nav-item">
                            <a href="{{ route('page.about') }}" class="nav-link active ">
                                О нас
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.checkout_page') }}" class="nav-link ">
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
            <div class="col-sm-12 col-md-8 ml-5">
                <article class="article content">
                    <h1>О нас</h1>
                    <div class="description">
                        <p>
                            Онлайн-супермаркет Arbuz.kz запустился в 2011 году и
                            за 8 лет развития более 20 000 клиентов доверили нам свои покупки.
                        </p>

                        <p>&nbsp;</p>

                        <p>В 2018 году проект Arbuz.kz обрел новую команду — в лице СЕО Алексея Ли
                            и операционного директора Руслана Погорелова. В планах компании развить
                            проект до уровня самого успешного онлайн-супермаркета в Казахстане.</p>

                        <p>
                            Наша миссия — сэкономить время нашим клиентам и освободить их от скучной
                            рутины. Не стойте в пробках и очередях на кассу и оберегайте себя от спонтанных
                            покупок вместе с нами. Ежедневно наши курьеры доставляют огромное количество
                            товаров — от килограммов свежих овощей и фруктов до бытовой химии и товаров
                            для дома, вплоть до батареек и лампочек.
                        </p>

                        <p>
                            На нашем складе хранится около 10 000 разных товаров, которые тщательно
                            отбираются у проверенных поставщиков. В случае, если мы привезли некачественный
                            товар — вы всегда можете вернуть его на месте курьеру.
                        </p>
                        <hr>
                        <p dir="ltr">
                            <strong>Важно!</strong>
                        </p>
                        <p dir="ltr">
                            В случае отсутствия какого-то товара на складе в момент сбора заказа,
                            мы можем заменить их аналогичными. Замена всегда обсуждается заранее — вы
                            можете согласиться с предложенными нами вариантами замены или отказаться
                            от товара.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
