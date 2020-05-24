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
                    <span>FAQ</span>
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
                            <a href="{{ route('page.faq') }}" class="nav-link active">
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
                    <h1>FAQ</h1>
                    <div class="description">
                        <div id="accordionFaq" class="accordion">
                            <div class="card">
                                <div id="headingOne" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseOne" aria-expanded="false" data-target="#collapseOne" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Как зарегистрироваться?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingOne" data-parent="#accordionFaq" id="collapseOne" class="collapse" style="">
                                    <div class="card-body">
                                        <p>
                                            Регистрация на сайте занимает пару минут:
                                        </p>
                                        <ul>
                                            <li>В правом верхнем углу сайта найдите кнопку «Вход»</li>
                                            <li>Введите свой номер телефона с префиксом +7, получите SMS и введите короткий номер. Готово!</li>
                                        </ul>
                                        <p>
                                            Если у вас нет поблизости телефона, вы можете зарегистрироваться по e-mail,
                                            нажмите кнопку ниже «Войти по почте» — далее «Зарегистрироваться по почте».
                                            Заполните необходимые данные, кликните «Зарегистрироваться» и активируйте
                                            ссылку подтверждения на почте.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingTwo" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseTwo" aria-expanded="false" data-target="#collapseTwo" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Как сделать заказ?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingTwo" data-parent="#accordionFaq" id="collapseTwo" class="collapse" style="">
                                    <div class="card-body">
                                        <p>
                                            Вы можете найти нужные продукты четырьмя способами:
                                        </p>
                                        <ul>
                                            <li>Ввести название в строке поиска</li>
                                            <li>В навигации по разделам (например, Продукты —&gt; Бакалея —&gt; Мука)</li>
                                            <li>В спецколлекциях на главной странице.</li>
                                            <li>Позвонить нашим операторам и назвать продукты, которые хотите заказать.
                                                Мы посмотрим товары в наличии и оформим заказ.</li>
                                        </ul>
                                        <p>
                                            Добавляйте товары в корзину. Минимального и максимального заказа на сайте нет —
                                            от количества товаров зависит лишь цена доставки. Чтобы отправить заказ, заходите
                                            в «Корзину» в правой верхней части сайта и нажмите кнопку «Оформить заказ».
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingThree" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseThree" aria-expanded="false" data-target="#collapseThree" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Как оплатить?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingThree" data-parent="#accordionFaq" id="collapseThree" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            Оплачивать можно 4 способами, выберите удобный для себя:
                                        </p>
                                        <ul>
                                            <li>Наличными курьеру</li>
                                            <li>Онлайн, платежной карточкой Visa/MasterCard</li>
                                            <li>Карточкой курьеру (курьер привезет POS-терминал и выдаст вам чек)</li>
                                            <li>Банковским переводом (для юр. лиц)</li>
                                        </ul>
                                        <p>
                                            Если у вас возникли проблемы с оплатой, позвоните нам по телефонам
                                            +7 (727) 346 85 83, +7 (705) 926 00 00 или напишите на help@arbuz.kz.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingFour" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseFour" aria-expanded="false" data-target="#collapseFour" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Когда доставят заказ?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingFour" data-parent="#accordionFaq" id="collapseFour" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            Арбуз работает каждый день с 10.00 до 22.00. Время доставки зависит от того,
                                            когда будет сделан заказ.
                                        </p>
                                        <p>
                                            Мы доставляем заказы день в день в пределах рабочих часов, но также можем и в
                                            другой запланированный день — укажите нужную дату в в комментарии к заказу
                                            (не позднее 14 дней после оформления заказа).
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingFive" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseFive" aria-expanded="false" data-target="#collapseFive" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Сколько стоит доставка?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingFive" data-parent="#accordionFaq" id="collapseFive" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            Доставка Arbuz.kz действует только в городе Алматы.
                                            Стоимость доставки по Алматы: 700 тенге, при заказе на сумму меньше 7 000 тг.
                                            При заказе на сумму свыше 7 000 — бесплатно.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingSix" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseSix" aria-expanded="false" data-target="#collapseSix" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Почему изменилась стоимость заказа? Мне вернут деньги?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingSix" data-parent="#accordionFaq" id="collapseSix" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            Если в заказе были весовые товары, не всегда есть возможность набрать точную
                                            массу до грамма, поэтому стоимость заказа может по итогу незначительно поменяться.
                                        </p>
                                        <p>
                                            Если сумма оказалась меньше, а вы уже оплатили онлайн, то сумма списания денег
                                            на карте поменяется в течение 3-х рабочих дней.
                                        </p>
                                        <p>
                                            <strong>
                                                Внимание! При корректировке итоговой суммы от банка не приходит оповещений.
                                                Измененную сумму списания вы увидите в выписке на дату оформления заказа.
                                            </strong>
                                        </p>
                                        <p>
                                            Если же сумма больше, то нужно будет доплатить разницу наличными курьеру при доставке.
                                        </p>
                                        <p>
                                            В обоих случаях, оператор вас обязательно предупредит.
                                        </p>
                                        <p>
                                            <strong>
                                                Важно! Как происходит возврат суммы:
                                            </strong>
                                        </p>
                                        <p>
                                            Если вы при доставке отказались от части заказа, то мы оформим возврат денег
                                            в течение 3-х дней с даты доставки. Обычно деньги возвращаются за 2-3 дня.
                                            В редких случаях возврат денег может занять до 14 дней.
                                        </p>
                                        <p dir="ltr">
                                            Если у вас настроены смс или пуш-уведомления, то вам придет оповещение о возврате средств.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingSeven" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseSeven" aria-expanded="false" data-target="#collapseSeven" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Товара нет в наличии
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingSeven" data-parent="#accordionFaq" id="collapseSeven" class="collapse">
                                    <div class="card-body">
                                        <div>
                                            В редких случаях какого-то товара нет на нашем складе и тогда наши специалисты
                                            созвонятся с вами и предложат замену (с другим свойством или вкусом).
                                            Если альтернатива вас не устраивает, вы можете заказать этот товар позднее
                                            или отказаться от заказа.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingEight" class="card-header"><h2 class="mb-0">
                                        <button aria-controls="collapseEight" aria-expanded="false" data-target="#collapseEight" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Я передумал делать заказ. Что делать? Как мне вернут деньги?
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingEight" data-parent="#accordionFaq" id="collapseEight" class="collapse">
                                    <div class="card-body">
                                        <p>
                                            Если вы залогинены, все ваши продукты останутся в корзине до тех времен,
                                            пока вы не решитесь сделать заказ. Если вы хотите очистить корзину или удалить
                                            ненужные товары — вы можете это сделать в корзине в правом верхнем углу.
                                        </p>
                                        <p>
                                            Если вы хотите отменить заказ, позвоните нам по телефонам +7 (727) 346 85 83,
                                            +7 (705) 926 00 00 и сообщите об отмене своего заказа.
                                        </p>
                                        <p>
                                            <strong>
                                                Как возвращаются деньги при отмене всего заказа
                                            </strong>
                                        </p>
                                        <p>
                                            Если вы сделали отмену заказа до доставки, позвонив в колл-центр, то мы моментально
                                            разблокируем сумму. Обычно банк не присылает уведомлений о разблокировке, а в
                                            интернет-банкинге нет отдельной операции. Оплата исчезнет из истории операций и выписки.
                                        </p>
                                        <p>
                                            Если вы отказались от всего заказа во время или при доставке, то мы оформим
                                            стандартный возврат в течение 3-х дней с момента доставки. Дальше в зависимости
                                            от банка эта сумма вернется вам на карту. Обычно деньги возвращаются за 2-3 дня.
                                            В редких случаях может занять до 14 дней. Если у вас настроены смс или пуш-уведомления,
                                            то вам придет оповещение о возврате средств.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div id="headingNine" class="card-header">
                                    <h2 class="mb-0">
                                        <button aria-controls="collapseNine" aria-expanded="false" data-target="#collapseNine" data-toggle="collapse" type="button" class="btn btn-link collapsed">
                                            Курьер опаздывает
                                        </button>
                                    </h2>
                                </div>
                                <div aria-labelledby="headingNine" data-parent="#accordionFaq" id="collapseNine" class="collapse">
                                    <div class="card-body">
                                        Если мы подтвердили точное время доставки вашего заказа, то курьер обязательно приедет сегодня.
                                        Если он приедет позже назначенного времени — с вами свяжется оператор и предупредит о задержке.
                                        В случае, если мы опоздали, но не предупредили вас, позвоните нам по телефонам
                                        +7 (727) 346 85 83, +7 (705) 926 00 00 или напишите на help@arbuz.kz.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
@endsection
