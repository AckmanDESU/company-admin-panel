@component('mail::message')
# @lang('Company created')

@lang('Your company has been created!')

@component('mail::button', ['url' => $url])
    @lang('View company)
@endcomponent

@lang('Thanks),<br>
{{ config('app.name') }}
@endcomponent
