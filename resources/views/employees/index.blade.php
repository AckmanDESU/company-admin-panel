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
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->last_name }}, {{ $employee->first_name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
                    <a
                        class="button is-primary"
                        href="{{ url("employees/$employee->id/edit") }}"
                        >
                        <span class="icon is-medium has-text-light" title="Edit">
                            <i class="fas fa-edit"></i>
                        </span>
                    </a>
                </td>
                <td>
                    <form action="{{ url("employees/$employee->id") }}" method="post" title="Delete">
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

    {{ $employees->links() }}
</div>
@endsection
