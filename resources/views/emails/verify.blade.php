@component('mail::message')
# Introduction

Please Take This Code To verify
@component('mail::button', ['url' => 'http://127.0.0.1:8000/Verify'])
Verify
@endcomponent
<p> This Code To Verify : {{ $code }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
