@props(["barHide" => "false", "maxWidth" => "500px", "maxHeight" => "320px"])

<!-- 
d-flex로 이루어져있다고 설명?
혹은 알아서 만들게 삭제?
-->


<div {{$attributes->merge(['class' => "overflow-x-auto pb-4"]) }} data-simplebar data-simplebar-auto-hide={{$barHide}}  style="max-width: {{$maxWidth}}; max-height: {{$maxHeight}};">
  <div class="d-flex gap-4">
    {{$slot}}
  </div>
</div>