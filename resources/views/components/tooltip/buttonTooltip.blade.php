@props(['type' => 'button', 'btType' => 'primary'])

<button type="{{$type}}" {{$attributes->merge(['class' => "btn btn-" . {{$btType}}])}} data-bs-toggle="tooltip">
  {{$slot}}
</button>