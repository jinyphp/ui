@props(['countdownDate' => null, 'size' => 'h4', 'backGround' => null])

<div class="d-flex flex-wrap" data-countdown-date="{{$countdownDate}}">
  <div class="text-center mb-2">
    <div class="{{$backGround ? 'bg-body-' . $backGround : 'border'}} rounded p-2">
      <div class="{{$size}} fw-medium mb-0 mx-1" data-years></div>
    </div>
    <span class="fs-sm">years</span>
  </div>
  <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
  <div class="text-center mb-2">
    <div class="{{$backGround ? 'bg-body-' . $backGround : 'border'}} rounded p-2">
      <div class="{{$size}} fw-medium mb-0 mx-1" data-days></div>
    </div>
    <span class="fs-sm">days</span>
  </div>
  <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
  <div class="text-center mb-2">
    <div class="{{$backGround ? 'bg-body-' . $backGround : 'border'}} rounded p-2">
      <div class="{{$size}} fw-medium mb-0 mx-1" data-hours></div>
    </div>
    <span class="fs-sm">hours</span>
  </div>
  <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
  <div class="text-center mb-2">
    <div class="{{$backGround ? 'bg-body-' . $backGround : 'border'}} rounded p-2">
      <div class="{{$size}} fw-medium mb-0 mx-1" data-minutes></div>
    </div>
    <span class="fs-sm">mins</span>
  </div>
  <span class="animate-blinking text-body-secondary fs-2 mx-2">:</span>
  <div class="text-center mb-2">
    <div class="{{$backGround ? 'bg-body-' . $backGround : 'border'}} rounded p-2">
      <div class="{{$size}} fw-medium mb-0 mx-1" data-seconds></div>
    </div>
    <span class="fs-sm">secs</span>
  </div>
</div>