@if ($paginator->hasPages())
    <div class="pagination pagination-md m-0 float-right" id="example2_paginate">
        <ul class="pagination">
       
        @if ($paginator->onFirstPage())
            <li class="paginate_button page-item previous disabled" id="example2_previous">
                <a href="" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link"> &lt; </a>
            </li>
        @else
            <li class="paginate_button page-item previous" id="example2_previous">
                <a href="{{ $paginator->previousPageUrl() }}" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link"> &lt; </a>
            </li>
        @endif
        
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled paginate_button page-item"><span>{{ $element }}</span></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="paginate_button page-item active">
                            <a href="{{ $url }}"  aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">{{ $page }}</a>
                        </li>
                    @else
                        <li class="paginate_button page-item">
                            <a href="{{ $url }}"  aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class="paginate_button page-item next" id="example2_next">
                <a href="{{ $paginator->nextPageUrl() }}" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link"> &gt; </a>
            </li>
        @else
            <li class="paginate_button page-item next disabled" id="example2_next">
                <a href="" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link"> &gt; </a>
            </li>
        @endif
    </ul>
@endif 