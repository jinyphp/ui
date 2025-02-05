@props(["titleName" => "offcanvas"])

<div {{$attributes->merge(['class' => "offcanvas-header"])}}>
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">{{$titleName}}</h5>
    {{$slot}}
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
</div>