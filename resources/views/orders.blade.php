@extends('layouts.app')

@section('content-head-title', 'Мои заказы')
@include('layouts.content-head')

@section('title', 'Корзина - ГеймсМаркет')

@section('content')
    @yield('content-head')
    <div class="cart-product-list">
        @if (!empty($orders))
            @foreach($orders as $order)
                <div class="cart-product-list__item">
                    <div class="cart-product__item__product-photo">
                        <img src="/img/cover/{{$order['product']['photo']}}"
                             class="cart-product__item__product-photo__image">
                    </div>
                    <div class="cart-product__item__product-name">
                        <div class="cart-product__item__product-name__content">
                            <a href="/games/{{$order['id_product']}}">
                                {{$order['product']['name']}}
                            </a>
                        </div>
                    </div>
                    <div class="cart-product__item__cart-date">
                        <div class="cart-product__item__cart-date__content">
                            {{date('d.m.Y', strtotime($order['created_at']))}}
                        </div>
                    </div>
                    <div class="cart-product__item__product-price">
                    <span class="product-price__value">
                        {{$order['product']['purchase_price']}} рублей
                    </span>
                    </div>
                </div>
            @endforeach
            <div class="content-footer__container">
                {{$orders->links('layouts.pagination-games')}}
            </div>
        @else
            <p class="h3">Ваша корзина пуста</p>
        @endif
    </div>
@endsection
