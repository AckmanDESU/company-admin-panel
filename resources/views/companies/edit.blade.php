@extends('layouts.app')

@section('content')
<section class="hero is-primary is-bold">
  <div class="hero-body">
    <div class="container has-text-centered">
        <a href="{{ url('./companies') }}" class="button-back">
            <span class="icon is-medium has-text-light">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span>Back</span>
        </a>

        <figure class="image is-128x128" style="margin: auto">
            <div id="cover">
                <button class="button is-dark" onclick="$('#logo').click()">Subir Logo</button>
            </div>
            {{-- <img class="is-rounded" src="{{ asset('storage/'.$company->logo) }}" alt="Company logo"> --}}
            <img class="is-rounded" src="{{ asset('storage/' . (Storage::disk('public')->exists($company->logo) ? $company->logo : 'default-logo.gif')) }}" alt="Company logo">
        </figure>

        @if ($errors->has('logo'))
            <p class="help is-danger">{{ $errors->first('logo') }}</p>
        @endif
        <h1 class="title">
            Editing company
        </h1>
    </div>
  </div>
</section>

<div class="container my-5">
    <div class="columns is-centered">
        <div class="box column is-half">
            {!! Form::model($company, ['url' => 'companies/' . $company->id, 'method' => 'put', 'files' => true]) !!}

                {{-- {{ Form::blText('id', '', ['disabled']) }} --}}
                {{ Form::blText('name', '', []) }}
                {{ Form::blEmail('email', '', []) }}
                {{ Form::blText('website', '', []) }}
                {{ Form::file('logo', ['hidden', 'id' => 'logo']) }}

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
