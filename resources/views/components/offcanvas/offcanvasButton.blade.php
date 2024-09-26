@props(["btnType" => "primary", "targetName" => "example"])


<button {{$attributes->merge(['class' => "btn btn-$btnType"])}} type="button" data-bs-toggle="offcanvas" data-bs-target="#{{$targetName}}" aria-controls="{{$targetName}}">
  {{$slot}}
</button>