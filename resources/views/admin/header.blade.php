@section('header')
<header class="main-header">
    <div class="logotype-container"><a href="{{route('main')}}" class="logotype-link"><img src="/img/logo.png" alt="Логотип"></a></div>
    <nav class="main-navigation">
        <ul class="nav-list">
            <li class="nav-list__item"><a href="{{route('main')}}" class="nav-list__item__link">На сайт</a></li>
            <li class="nav-list__item">
                <a href="{{route('categories.index')}}" class="nav-list__item__link">
                    Категории
                </a>
            </li>
            <li class="nav-list__item"><a href="#" class="nav-list__item__link">Игры</a></li>
            <li class="nav-list__item"><a href="#" class="nav-list__item__link">Заказы</a></li>
        </ul>
    </nav>
</header>
@show
