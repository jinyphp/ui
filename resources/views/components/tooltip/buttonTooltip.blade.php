@props(['type' => 'button'])

<button  class="btn btn-secondary" {{$attributes->merge(['class' => $class])}} data-bs-toggle="tooltip">
  {{$slot}}
</button>