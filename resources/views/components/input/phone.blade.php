@props(['inputLabel' => "Phone"])
<div {{$attributes->merge(['class' => "m-3"])}}>
    <label for="phone" class="form-label">{{$inputLabel}}</label>
    <input type="tel" class="form-control" id="phone" data-input-format='{"numericOnly": true, "delimiters": [" ", " ", " "], "blocks": [3, 4, 4]}' placeholder="010 ____ ____">
</div>
<script src="/assets/vendor/cleave.js/dist/cleave.min.js"></script>