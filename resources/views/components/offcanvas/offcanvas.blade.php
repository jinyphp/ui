@props(["targetName" => "example", "bodyScroll" => false, "backdrop" => "true", "direction" => "start"])



<div {{$attributes->merge(['class' => "offcanvas offcanvas-$direction"])}} tabindex="-1" id="{{$targetName}}" aria-labelledby="offcanvasExampleLabel"  
  {{$bodyScroll ? "data-bs-scroll=true" : ""}} 
  {{"data-bs-backdrop=$backdrop"}} 
  >
  {{$slot}}
</div>