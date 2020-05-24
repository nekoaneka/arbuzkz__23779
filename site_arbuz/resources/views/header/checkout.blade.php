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
                    <span>Оплата</span>
                </li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-sm-12 col-md-2 d-none d-md-block">
                <aside>
                    <ul class="nav nav-pills article-nav side-nav-pills flex-column">
                        <li class="nav-item">
                            <a href="{{ route('page.about') }}" class="nav-link">
                                О нас
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('page.checkout_page') }}" class="nav-link active ">
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
                    <h1>Оплата</h1>
                    <div class="description">
                        <p dir="ltr">
                            Мы принимаем оплату любым способом,
                            выберите для себя удобный вариант:
                        </p>
                        <ul>
                            <li>Наличными курьеру</li>
                            <li>Онлайн, платежной карточкой Visa/MasterCard</li>
                            <li>Карточкой курьеру (курьер привезет POS-терминал и выдаст вам чек)</li>
                            <li>Банковским переводом (для юр. лиц)</li>
                        </ul>

                        <h3>Вопросы по оплате картой онлайн</h3>
                        <p dir="ltr">
                            <strong>
                                Как списываются деньги
                            </strong>
                        </p>
                        <p dir="ltr">
                            При выборе «Оплаты картой онлайн» мы блокируем деньги равной сумме заказа,
                            но не списываем ее окончательно. Списание происходит после фактической сборки
                            вашего заказа.</p> <p dir="ltr">Итоговая сумма может измениться из-за наличия
                            весовых товаров или если мы сделали вам замену одного товара на другой.&nbsp;
                        </p>
                        <p dir="ltr">
                            <strong>
                                Внимание! При корректировке итоговой суммы от банка не приходит оповещений.
                                Измененную сумму списания вы увидите в выписке на дату оформления заказа.&nbsp;
                            </strong>
                        </p>
                        <p dir="ltr">
                            <strong>
                                Как возвращаются деньги
                            </strong>
                        </p>
                        <p dir="ltr">
                            Если вы при доставке отказались от части заказа, то мы оформим возврат денег в
                            течение 3-х дней с даты доставки. Обычно деньги возвращаются за 2-3 дня. В редких
                            случаях возврат денег может занять до 14 дней.
                        </p>
                        <p dir="ltr">
                            Если у вас настроены смс или пуш-уведомления, то вам придет оповещение о возврате средств.
                        </p>
                        <p dir="ltr">
                            <strong>
                                Как возвращаются деньги при отмене всего заказа
                            </strong>
                        </p>
                        <p dir="ltr">
                            Если вы сделали отмену заказа до доставки, позвонив в колл-центр, то мы моментально
                            разблокируем сумму. Обычно банк не присылает уведомлений о разблокировке, а в
                            интернет-банкинге нет отдельной операции. Оплата исчезнет из истории операций и выписки.
                            &nbsp;&nbsp;
                        </p>
                        <p dir="ltr">
                            Если вы отказались от всего заказа во время или при доставке, то мы оформим стандартный
                            возврат в течение 3-х дней с момента доставки. Дальше в зависимости от банка эта сумма
                            вернется вам на карту. Обычно деньги возвращаются за 2-3 дня. В редких случаях может занять
                            до 14 дней.</p> <p dir="ltr">Если у вас настроены смс или пуш-уведомления, то вам придет
                            оповещение о возврате средств.
                        </p>
                        <p dir="ltr">
                            Если у вас возникли проблемы с оплатой, позвоните нам по телефонам
                            +7 (727) 346 85 83, +7 (705) 926 00 00 или напишите на
                            <a href="mailto:help@arbuz.kz">
                                help@arbuz.kz
                            </a>
                            .
                        </p>
                        <p dir="ltr">
                            <strong>
                                Реквизиты для юр. лиц:
                            </strong>
                        </p>
                        <p dir="ltr">
                            ТОО «Arbuz Group (Арбуз Груп)»
                        </p>
                        <p dir="ltr">
                            БИН: 170 840 025 205 АО «Народный Банк Казахстана»
                        </p>
                        <p dir="ltr">
                            ИИК: KZ 766017131000026746
                        </p>
                        <p dir="ltr">
                            БИК: HSBKKZKX
                        </p>
                        <p dir="ltr">
                            Адрес: РК, г. Алматы ул. Кунаева, 32
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
