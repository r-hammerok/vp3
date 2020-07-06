@extends('layouts.app')

@section('content-head-title', 'Новости')
@include('layouts.content-head')

@section('title', 'Новости - ГеймсМаркет')

@section('content')
    @yield('content-head')
    <div class="content-main__container">
        <div class="news-list__container">
            <div class="news-list__item">
                <div class="news-list__item__thumbnail"><img src="/img/news/ps_vr.jpg"></div>
                <div class="news-list__item__content">
                    <div class="news-list__item__content__news-title">О новых играх в режиме VR</div>
                    <div class="news-list__item__content__news-date">04.12.2016</div>
                    <div class="news-list__item__content__news-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                <div class="news-list__item__content__news-btn-wrap"><a href="/news/1" class="btn btn-brown">Подробнее</a>
                </div>
            </div>
            <div class="news-list__item">
                <div class="news-list__item__thumbnail"><img src="/img/news/ps4-pro_01.jpg"></div>
                <div class="news-list__item__content">
                    <div class="news-list__item__content__news-title">О новой PS4 Pro</div>
                    <div class="news-list__item__content__news-date">04.12.2016</div>
                    <div class="news-list__item__content__news-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </div>
                </div>
                <div class="news-list__item__content__news-btn-wrap"><a href="/news/2" class="btn btn-brown">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
@endsection
