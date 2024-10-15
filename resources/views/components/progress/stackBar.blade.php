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
    aria-valuemax="100"
    style="width: {{ $nowValue ?? 0 }}%">
  <div class="progress-bar 
    {{ $pgStyle ? 'bg-' . $pgStyle : '' }} 
    {{$textColor ? 'text-' . $textColor : ''}}" 

    >
    {{$slot}}
  </div>
</div>
