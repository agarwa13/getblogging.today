@component('mail::message')
Your Get Blogging Today Password is
# ShowMeTheVideos

@component('mail::button', ['url' => 'https://getblogging.today/store-cookie?password=ShowMeTheVideos'])
Watch the Videos
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
