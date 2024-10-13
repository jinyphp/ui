@props(['spinnerStyle' => null, 'spinnerSize' => null])

<div {{$attributes->merge(['class' => "spinner-border"])->class([
  "text-$spinnerStyle" => $spinnerStyle,
  "spinner-border-$spinnerSize" => $spinnerSize
])}} role="status">
  <span class="visually-hidden">Loading...</span>
</div>