@component('mail::message')
# Project created: {{ $project->title }}

{{ $project->description }}

@component('mail::button', ['url' => url('/projects/' . $project->getKey())])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
