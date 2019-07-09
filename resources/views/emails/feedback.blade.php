@component('mail::message')
<div><b>Тема сообщения:</b> {{$data['subject']}}</div><br>
<div><b>Сообщение:</b><br>{{$data['message']}}</div><br>

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Спасибо,<br>
с уважением<br>
{{ $data['name'] }}<br>
<a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
@endcomponent