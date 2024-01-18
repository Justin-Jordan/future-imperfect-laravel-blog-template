@if (isset($paginator) && $paginator->lastPage() > 1)
    <ul class="actions pagination">
        @php
            $interval = isset($interval) ? abs(intval($interval)) : 3;
            $from = $paginator->currentPage() - $interval;
            if ($from < 1) {
                $from = 1;
            }

            $to = $paginator->currentPage() + $interval;
            if ($to > $paginator->lastPage()) {
                $to = $paginator->lastPage();
            }
        @endphp
        <!-- first/previous -->
        @if ($paginator->currentPage() > 1)
        <li>
            <a href="{{ $paginator->url($paginator->currentPage() - 1) }}" class="button large previous">
                <span aria-hidden="true">Previous Page</span>
            </a>
        </li>
        @endif
        <!-- links -->
        @for ($i = $from; $i <= $to; $i++)
            @php
                $isCurrentPage = $paginator->currentPage() == $i;
            @endphp
            <li class="{{ $isCurrentPage ? 'active' : '' }} button large">
                <a href="{{ !$isCurrentPage ? $paginator->url($i) : '#' }}">
                    {{ $i }}
                </a>
            </li>
        @endfor
        <!-- next -->
        @if ($paginator->currentPage() < $paginator->lastPage())
            <li class="button large next">
                <a href="{{ $paginator->url($paginator->currentPage() + 1) }}" aria-label="Next">
                    <span aria-hidden="true">Next Page</span>
                </a>
            </li>
        @endif
    </ul>
@endif
