@props(['btnType' => 'button', 'btnStyle' => 'primary'])

<button type="{{$btnType}}" {{$attributes->merge(['class' => "btn btn-" . $btnStyle])}} data-bs-toggle="tooltip">
  {{$slot}}
</button>