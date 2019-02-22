@if ($paginator->hasPages())
  <nav class="pagination" role="navigation" aria-label="pagination">
    {{-- Previous Page Link --}}
    @if ($paginator->onFirstPage())
      <a
        class="pagination-previous"
        disabled
        aria-disabled="true"
        aria-hidden="true"
        aria-label="@lang('pagination.previus')"
        >&lsaquo;</a
      >
    @else
      <a
        class="pagination-previous"
        href="{{ $paginator->previousPageUrl() }}"
        rel="prev"
        aria-label="@lang('pagination.previus')"
        >&lsaquo;</a
      >
    @endif

    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
      <a
        class="pagination-next"
        href="{{ $paginator->nextPageUrl() }}"
        rel="next"
        aria-label="@lang('pagination.next')"
        >&rsaquo;</a
      >
    @else
      <a
        class="pagination-next"
        disabled
        aria-disabled="true"
        aria-hidden="true"
        aria-label="@lang('pagination.next')"
        >&rsaquo;</a
      >
    @endif

    {{-- Pagination Elements --}}
    <ul class="pagination-list">
      @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
          <li>
            <span class="pagination-ellipsis">&hellip;</span>
          </li>
        @endif

        {{-- Array Of Links --}}
        @if (is_array($element)) @foreach ($element as $page => $url) @if ($page
          == $paginator->currentPage())
          <li>
            <a
              class="pagination-link is-current"
              aria-current="page"
              aria-label="Current page"
              >{{ $page }}</a
            >
          </li>
        @else
          <li>
            <a
              class="pagination-link"
              href="{{ $url }}"
              aria-current="page"
              aria-label="Current page"
              >{{ $page }}</a
            >
          </li>
        @endif @endforeach @endif @endforeach
    </ul>
  </nav>
@endif
