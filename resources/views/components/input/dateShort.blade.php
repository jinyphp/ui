@props(['inputLabel' => "Date Short"])


<div {{$attributes->merge(['class' => "m-3"])}}>
  <label for="date-short" class="form-label">{{$inputLabel}}</label>
  <input type="text" class="form-control" id="date-short" data-input-format='{"date": true, "datePattern": ["m", "y"]}' placeholder="mm/yy">
</div>
<script src="/assets/vendor/cleave.js/dist/cleave.min.js"></script>