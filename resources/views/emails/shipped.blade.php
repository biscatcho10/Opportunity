@component('mail::message')
# Introduction

Please Take This Code To verify
@component('mail::button', ['url' => ''])
Verify
@endcomponent
<p> This Code To Verify : {{ $code }}</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
