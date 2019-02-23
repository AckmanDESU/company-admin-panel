@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('employees/create') }}" class="button is-link is-pulled-right">@lang('Add Employee')</a>

    @if (isset($company))
        <a href="{{ url('./companies') }}" class="button is-pulled-right" style="margin-right: 15px">
            <span class="icon is-medium has-text-light">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span>@lang('Back')</span>
        </a>
        <h1 class="title">@lang('Employees in :name', ['name' => $company->name])</h1>
    @else
        <h1 class="title">@lang('Employees')</h1>
    @endif

    <table class="table is-fullwidth is-hoverable">
      <thead>
        <tr>
          <th>@lang('First Name')</th>
          <th>@lang('Last Name')</th>
          <th>@lang('Email')</th>
          <th>@lang('Phone')</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
    </table>

</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    $('table').DataTable({
        language: {
            url: '{{ route("datatables_lang", Session::get("locale", "")) }}'
        },
        serverSide: true,
        processing: true,
        responsive: true,
        @if (isset($company))
            ajax: "{{ route('employees_from_company_dt', $company->id) }}",
        @else
            ajax: "{{ route('employees_all_dt') }}",
        @endif
        columns: [
            { name: 'first_name' },
            { name: 'last_name' },
            { name: 'email' },
            { name: 'phone' },
            { name: "edit", orderable: false, searchable: false },
            { name: "delete", orderable: false, searchable: false },
        ],
    });
});
</script>
@endpush
