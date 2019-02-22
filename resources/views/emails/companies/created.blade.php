@component('mail::message')
# Company created

Your company has been created!

@component('mail::button', ['url' => $url])
View company
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
