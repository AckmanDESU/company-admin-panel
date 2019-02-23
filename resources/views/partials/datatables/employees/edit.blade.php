<a
    class="button is-primary"
    {{-- href="{{ url("employees/$employee->id/edit") }}" --}}
    href="employees/{{ $employee->id }}/edit"
    >
    <span class="icon is-medium has-text-light" title="@lang('Edit')">
        <i class="fas fa-edit"></i>
    </span>
</a>
