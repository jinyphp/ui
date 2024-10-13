@props(['spinnerStyle' => null, 'spinnerSize' => null])

<div {{$attributes->merge(['class' => 'spinner-grow'])->class([
  "text-$spinnerStyle" => $spinnerStyle,
  "spinner-grow-$spinnerSize" => $spinnerSize
])}} role="status">
    <span class="visually-hidden">Loading...</span>
</div>
