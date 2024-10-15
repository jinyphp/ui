@props(['inputLabel' => "Time"])

<div {{$attributes->merge(['class' => "m-3"])}}>
    <label for="time" class="form-label">{{$inputLabel}}</label>
    <input type="text" class="form-control" id="time" data-input-format='{"time": true, "timePattern": ["h", "m"]}' placeholder="hh:mm">
</div>
<script src="/assets/vendor/cleave.js/dist/cleave.min.js"></script>