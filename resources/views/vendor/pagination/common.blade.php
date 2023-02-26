@if ($paginator->hasPages())
    <ul class="pagination" data-aos="fade-up" data-aos-duration="700">
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span><i class="fas fa-angle-double-left"></i></span>
            </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-angle-double-left"></i></a>
                </li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="d-none d-sm-block"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="d-none d-sm-block"><span>{{ $page }}</span></li>
                    @else
                        <li class="d-none d-sm-block"><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if ($paginator->hasMorePages())
            <li class="d-none d-sm-block">
                <a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a>
            </li>
        @else
            <li class="fas fa-angle-double-right disabled">
                <span></span>
            </li>
        @endif
    </ul>
@endif