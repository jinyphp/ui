<button  data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>
@props(['type' => 'button', 'btType' => 'primary'])
<!-- data-bs-title, data-bs-content, data-bs-placement -->


<button type="{{$type}}" {{$attributes->merge(['class' => "btn btn-lg btn-" . $btType])}} data-bs-toggle="popover">
  {{$slot}}
</button>