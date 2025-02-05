@props(["titleHref" => null])

<h3 {{$attributes->merge(['class' => "h5 mb-0"])}}>
    <a class="hover-effect-underline" {{$titleHref ? "href = $titleHref" : ""}} >{{$slot}}</a>
</h3>