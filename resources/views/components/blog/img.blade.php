@props(["imgSrc" => null, "imgAlt" => "Image"])
<!-- href 설정,  -->

<a {{$attributes->merge(['class' => "ratio d-flex hover-effect-scale rounded-4 overflow-hidden"])}} style="--cz-aspect-ratio: calc(305 / 416 * 100%)">
    <img src={{$imgSrc}} class="hover-effect-target" alt={{$imgAlt}}>
</a>