@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('employees/create') }}" class="button is-link is-pulled-right">Add Employee</a>

    @if (isset($company))
        <a href="{{ url('./companies') }}" class="button is-pulled-right" style="margin-right: 15px">
            <span class="icon is-medium has-text-light">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span>Back</span>
        </a>
        <h1 class="title">Employees in {{ $company->name }}</h1>
    @else
        <h1 class="title">Employees</h1>
    @endif

    <table class="table is-fullwidth is-hoverable">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
    </table>

</div>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    $('table').DataTable({
        serverSide: true,
        processing: true,
        responsive: true,
        ajax: "{{ route('employees_dt') }}",
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
@endsection
