@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Dashboard
                        </p>
                    </header>

                    <div class="card-content">
                        You are logged in!

                        <ul>
                            <li>
                                <a class="" href="{{ url('companies') }}">
                                    Companies
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{ url('employees') }}">
                                    Employees
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
