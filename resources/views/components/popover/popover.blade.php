@props(['type' => 'button', 'btType' => 'primary'])
<!-- data-bs-title, data-bs-content, data-bs-placement -->


<button type="{{$type}}" {{$attributes->merge(['class' => "btn btn-lg btn-" . $btType])}} data-bs-toggle="popover">
  {{$slot}}
</button>