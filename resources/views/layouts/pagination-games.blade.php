<ul class="page-nav">
    <li class="page-nav__item">
        <a href="{{$paginator->previousPageUrl()}}" class="page-nav__item__link @if($paginator->onFirstPage()){{'disabled'}}@endif">
            <i class="fa fa-angle-double-left"></i>
        </a>
    </li>
    @foreach($paginator->getUrlRange(1, $paginator->lastPage()) as $item)
        <li class="page-nav__item">
            <a href="{{$item}}" class="page-nav__item__link">
                {{$loop->iteration}}
            </a>
        </li>
    @endforeach
    <li class="page-nav__item">
        <a href="{{$paginator->nextPageUrl()}}" class="page-nav__item__link @if($paginator->currentPage() == $paginator->lastPage()){{'disabled'}}@endif">
            <i class="fa fa-angle-double-right"></i>
        </a>
    </li>
</ul>
