  @props(["imgSrc" => null, "imgHref" => "#", "imgAlt" => "Image"])
  
<div {{ $attributes->merge(['class' => "col-sm-5 pe-sm-4"]) }}>
    <x-blog-img href={{$imgHref}} imgSrc={{$imgSrc}} imgAlt="$imgAlt"></x-blog-img>
</div>