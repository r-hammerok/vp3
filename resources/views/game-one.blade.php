@extends('layouts.app')

@section('title', 'Одна игра - ГеймсМаркет')
@section('content-head-title', $games['name'] ?? '')

@include('layouts.content-head')

@section('content')
    @yield('content-head')
    <div class="content-main__container">
        <div class="product-container">
            <div class="product-container__image-wrap">
                <img src="/img/cover/{{$games['photo']}}" class="image-wrap__image-product">
            </div>
            <div class="product-container__content-text">
                <div class="product-container__content-text__title">SuperMario</div>
                <div class="product-container__content-text__price">
                    <div class="product-container__content-text__price__value">
                        Цена: <b>{{$games['purchase_price']}}</b>
                        руб
                    </div>
                    <button type="button" class="btn btn-blue" data-toggle="modal" data-target="#buyModal">
                        Купить
                    </button>
{{--                    <a href="#" class="btn btn-blue">--}}
{{--                        Купить--}}
{{--                    </a>--}}
                </div>
                <div class="product-container__content-text__description">
                    {!!$games['description']!!}
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal" tabindex="-1" role="dialog" id="buyModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Заявка</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Оставьте свои данные и с Вами свяжется наш менеджер.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Оставить заявку</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                </div>
            </div>
        </div>
    </div>
@endsection
