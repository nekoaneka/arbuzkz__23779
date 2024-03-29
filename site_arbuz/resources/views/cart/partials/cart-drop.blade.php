<link rel="stylesheet" type="text/css" href="{{ asset('css/cart/cart.css') }}" >

@if(count(\Cart::getContent()) > 0)
    @foreach(\Cart::getContent() as $item)
        <li class="list-group-item">
            <div class="row">
                <div class="col-lg-3">
                    <img src="/img/{{ $item->attributes->image }}" id="img-cart">
                </div>
                <div class="col-lg-6">
                    <b>{{$item->name}}</b>
                    <br><small>Кол: {{$item->quantity}}</small>
                </div>
                <div class="col-lg-3">
                    <p>{{ \Cart::get($item->id)->getPriceSum() }} тг</p>
                </div>
                <hr>
            </div>
        </li>
    @endforeach
    <br>
    <li class="list-group-item">
        <div class="row">
            <div class="col-lg-10">
                <b>Сумма: </b>{{ \Cart::getTotal() }} тг
            </div>
            <div class="col-lg-2">
                <form action="{{ route('cart.clear') }}" method="POST">
                    @csrf
                    <button class="btn btn-secondary btn-sm"><i class="fa fa-trash"></i></button>
                </form>
            </div>
        </div>
    </li>
    <br>
    <div class="row m-0">
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('cart.index') }}">
            КОРЗИНА <i class="fa fa-arrow-right"></i>
        </a>
        <a class="btn btn-dark btn-sm btn-block" href="{{ route('checkout.index') }}">
            ОПЛАТА <i class="fa fa-arrow-right"></i>
        </a>
    </div>
@else
    <p class="text-dark">Ваша Корзина Пуста</p>
@endif
