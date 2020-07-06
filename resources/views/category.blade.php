@extends('layouts.app')

@section('content-head-title', $categoryName)
@include('layouts.content-head')

@section('title', 'Категория - ГеймсМаркет')

@section('content')
    @yield('content-head')
    @isset($games)
    <div class="content-main__container">
        <div class="products-columns">
            @foreach($games as $game)
                @include('layouts.item')
            @endforeach
            @stack('item')
        </div>
    </div>
    <div class="content-footer__container">
        <div class="content-footer__container">
            {{$games->links('layouts.pagination-games')}}
        </div>
    </div>
    @endisset
@endsection

