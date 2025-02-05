@props(["btnType" => "button", "btnMessage" => "Click Me", "btnStyle" => "primary", "toastId" => "Toast"])

<button type="{{$btnType}}" class="btn btn-{{$btnStyle}}" id="{{$toastId}}Btn">{{$btnMessage}}</button>

<div {{$attributes->merge(['class' => "toast-container position-fixed bottom-0 end-0 p-3"])}}>
    <div id="{{$toastId}}" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        {{$slot}}
    </div>
</div>

<script>
    
document.addEventListener('DOMContentLoaded', function() {
    const toastTrigger = document.getElementById('{{$toastId}}Btn');
    const toastLiveExample = document.getElementById('{{$toastId}}');

    if (toastTrigger && toastLiveExample) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show();
        });
    }
});
</script>
