@props(['type' => null])
<div {{$attributes->class(["text-$type" => $type])->merge(['class' => "spinner-border"])}} role="status">
  <span class="visually-hidden">Loading...</span>
</div>