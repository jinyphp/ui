@props([
  'nowValue' => null,
  'pgLabel' => null,
  'pgStyle' => null,
  'textColor' => null,
])

<div {{$attributes->merge(['class' => "progress"])}}
     role="progressbar" 
     aria-label="{{ $pgLabel ?? 'Basic example' }}" 
     aria-valuenow="{{ $nowValue ?? 0 }}" 
     aria-valuemin="0" 
     aria-valuemax="100">
  <div class="progress-bar {{$pgStyle ? 'bg-' . $pgStyle : '' }} {{$textColor ? 'text-' . $textColor : ''}}" 
    style="width: {{ $nowValue ?? 0 }}%"
    >
    {{$slot}}
  </div>
</div>
