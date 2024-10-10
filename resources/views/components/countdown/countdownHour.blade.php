@props(['countdownDate' => null, 'size' => 'h4'])

<div class="d-flex" data-countdown-date="{{$countdownDate}}">
  <div class="text-center">
    <div class="{{$size}} mb-0" data-hours></div>
    <span class="fs-sm">hours</span>
  </div>
  <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
  <div class="text-center">
    <div class="{{$size}} mb-0" data-minutes></div>
    <span class="fs-sm">mins</span>
  </div>
  <span class="animate-blinking text-body-secondary fs-xl mx-2">:</span>
  <div class="text-center">
    <div class="{{$size}} mb-0" data-seconds></div>
    <span class="fs-sm">secs</span>
  </div>
</div>

<script src="/assets/vendor/timezz/dist/timezz.js"></script>
