@props(['type' => null, 'size' => null])
<div {{$attributes->merge(['class' => "spinner-border"])->class([
  "text-$type" => $type,
  "spinner-border-$size" => $size
])}} role="status">
  <span class="visually-hidden">Loading...</span>
</div>
