@if ($paginator->hasPages())
<nav>
    <ul class="pagination pagination-template d-flex justify-content-center">
        {{-- Previous Page Link --}}
        @if (!$paginator->onFirstPage())
            <li class="page-item"><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
        @endif

        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><a href="#" class="page-link">{{ $element }}</a></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item" aria-current="page"><a href="#" class="page-link active">{{ $page }}</a></li>
                    @else
                        <li class="page-item"><a href="{{ $url }}" class="page-link">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="page-link"> <i class="fa fa-angle-right"></i></a></li>
        @endif
    </ul>
</nav>
@endif
