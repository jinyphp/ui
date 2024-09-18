<div {{$attributes->merge(['class' => "toast-header flex justify-between"])}}>
      <div>
      {{$slot}}
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
</div>