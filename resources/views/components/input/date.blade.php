@props(['inputLabel' => "Date"])

<div {{$attributes->merge(['class' => "m-3"])}}>
  <label for="date" class="form-label">{{$inputLabel}}</label>
  <input type="text" class="form-control" id="date" data-input-format='{"date": true, "delimiter": "-", "datePattern": ["Y", "m", "d"]}' placeholder="yyyy-mm-dd">
</div>
<script src="/assets/vendor/cleave.js/dist/cleave.min.js"></script>