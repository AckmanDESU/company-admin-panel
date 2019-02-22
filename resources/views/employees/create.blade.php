@extends('layouts.app')

@section('content')
<section class="hero is-primary is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
        <a href="{{ url('./employees') }}" class="button-back">
            <span class="icon is-medium has-text-light">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span>Back</span>
        </a>

        <h1 class="title">
            Creating employee
        </h1>
    </div>
  </div>
</section>

<div class="container my-5">
    <div class="columns is-centered">
        <div class="box column is-half">
            {!! Form::model('App\Employee', ['url' => 'employees', 'method' => 'post']) !!}

                {{ Form::blText('first_name', '', []) }}
                {{ Form::blText('last_name', '', []) }}
                {{ Form::blEmail('email', '', []) }}
                {{ Form::blText('phone', '', []) }}
                {{ Form::blSelect('company_id', $companies, null, ['placeholder' => 'Pick a company...']) }}

                <div class="field is-grouped is-pulled-right">
                    <div class="control">
                        <button class="button is-link">Submit</button>
                    </div>
                    <div class="control">
                        <button type="reset" class="button is-secondary">Reset</button>
                    </div>
                </div>
                {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
