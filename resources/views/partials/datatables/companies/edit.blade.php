<a
    class="button is-primary"
    {{-- href="{{ url("companies/$company->id/edit") }}" --}}
    href="companies/{{ $company->id }}/edit"
    >
    <span class="icon is-medium has-text-light" title="@lang('Edit')">
        <i class="fas fa-edit"></i>
    </span>
</a>
