@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ url('companies/create') }}" class="button is-link is-pulled-right">Add Company</a>

    <h1 class="title">Companies</h1>

    <table class="table is-fullwidth is-hoverable">
      <thead>
        <tr>
          <th>Name</th>
          <th>Email</th>
          <th>Website</th>
          <th></th>
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
        serverSide: true,
        processing: true,
        responsive: true,
        ajax: "{{ route('companies_all_dt') }}",
        columns: [
            { name: 'name' },
            { name: 'email' },
            { name: 'website', render: (url) => '<a href="' + url + '">' + url + '</a>' },
            { name: "listEmployees", orderable: false, searchable: false },
            { name: "edit", orderable: false, searchable: false },
            { name: "delete", orderable: false, searchable: false },
        ],
    });
});
</script>
@endpush
