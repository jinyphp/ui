@props(['column' => null, 'percent' => null, 'type' => null, 'size' => null])

<span {{$attributes->merge(['class' => 'placeholder'])->class([
    "col-$column" => $column,
    "bg-$type" => $type,
    "placeholder-$size" => $size
])}}  {{ $percent ? 'style = width:' . $percent . '%' : '' }} ></span>

