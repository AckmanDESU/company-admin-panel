<a
    class="button is-link"
    {{-- href="{{ url("companies/$company->id/employees") }}" --}}
    href="companies/{{ $company->id }}/employees"
    >
    <span class="icon is-medium has-text-light" title="@lang('View Employees')">
        <i class="fas fa-user"></i>
    </span>
</a>
