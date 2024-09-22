@props(['type' => null, 'size' => null])

<div {{$attributes->merge(['class' => 'spinner-grow'])->class([
  "text-$type" => $type,
  "spinner-grow-$size" => $size
])}} role="status">
    <span class="visually-hidden">Loading...</span>
</div>
