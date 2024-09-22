@props([
    'valuenow' => null,
    'label' => null,
    'type' => null,
    'text' => null,
    'striped' => false,
    'animated' => false
])

<div {{$attributes->merge(['class' => "progress"])}}
    role="progressbar" 
    aria-label="{{ $label ?? 'Basic example' }}" 
    aria-valuenow="{{ $valuenow ?? 0 }}" 
    aria-valuemin="0" 
    aria-valuemax="100"
    style="width: {{ $valuenow ?? 0 }}%">
  <div class="progress-bar 
    {{$striped ? 'progress-bar-striped' : ''}} 
    {{$animated ? 'progress-bar-animated' : ''}} 
    {{ $type ? 'bg-' . $type : '' }} 
    {{$text ? 'text-' . $text : ''}}" 

    >
    {{$slot}}
  </div>
</div>
