@props(['type' => 'button'])

<button {{$attributes}} class="btn btn-secondary" data-bs-toggle="tooltip">
  {{$slot}}
</button>