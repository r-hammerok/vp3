@section('content-bottom')
    <div class="content-bottom">
        @if (!empty($gamesInBottom))
            <div class="line"></div>
            <div class="content-head__container">
                <div class="content-head__title-wrap">
                    <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
                </div>
            </div>
            <div class="content-main__container">
                <div class="products-columns">
                    @foreach($gamesInBottom as $game)
                        @include('layouts.item')
                    @endforeach
                    @stack('item')
                </div>
            </div>
        @endif
    </div>
@show
