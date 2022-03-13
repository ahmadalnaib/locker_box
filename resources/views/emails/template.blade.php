@component('mail::message')
<h2>Hi,</h2>

{{$data['name']}}:User
<br>
{{$data['place_url']}}: Page Url

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
