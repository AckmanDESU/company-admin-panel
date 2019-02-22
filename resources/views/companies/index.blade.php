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
      <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->website }}</td>
                <td>
                    <a
                        class="button is-link"
                        href="{{ url("companies/$company->id/employees") }}"
                        >
                        <span class="icon is-medium has-text-light" title="View Employees">
                            <i class="fas fa-user"></i>
                        </span>
                    </a>
                </td>
                <td>
                    <a
                        class="button is-primary"
                        href="{{ url("companies/$company->id/edit") }}"
                        >
                        <span class="icon is-medium has-text-light" title="Edit">
                            <i class="fas fa-edit"></i>
                        </span>
                    </a>
                </td>
                <td>
                    <form action="{{ url("companies/$company->id") }}" method="post" title="Delete">
                        @csrf
                        @method('delete')
                        <button class="button is-danger">
                            <span class="icon is-medium has-text-light">
                                <i class="fas fa-trash-alt"></i>
                            </span>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>

    {{ $companies->links() }}
</div>
@endsection
