@props(["barHide" => "false", "maxWidth" => "500px", "maxHeight" => "320px"])

<!-- 
barHide 바 숨김 여부
maxWidth, maxHeight 스크롤바가 생성되는 컨텐츠 크기 제한
-->

<div {{$attributes->merge(['class' => "overflow-y-auto pe-3"]) }} data-simplebar data-simplebar-auto-hide={{$barHide}} style="max-width: {{$maxWidth}}; max-height: {{$maxHeight}};">
  {{$slot}}
</div>
@once
    @push('scripts')
      <script>
      <script src="/assets/vendor/simplebar/dist/simplebar.min.js"></script>
      </script>
  @endpush
@endonce
