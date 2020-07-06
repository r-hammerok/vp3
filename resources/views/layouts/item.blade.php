@push('item')
    <div class="products-columns__item">
        <div class="products-columns__item__title-product">
            <a href="/games/{{$game['id']}}" class="products-columns__item__title-product__link">
                {{$game['name']}}
            </a>
        </div>
        <div class="products-columns__item__thumbnail">
            <a href="/games/{{$game['id']}}" class="products-columns__item__thumbnail__link">
                <img src="/img/cover/{{$game['photo']}}" alt="Preview-image"
                     class="products-columns__item__thumbnail__img">
            </a>
        </div>
        <div class="products-columns__item__description">
            <span class="products-price">{{$game['purchase_price']}} руб</span>
            <a href="/games/{{$game['id']}}" class="btn btn-blue">Купить</a>
        </div>
    </div>
@endpush
