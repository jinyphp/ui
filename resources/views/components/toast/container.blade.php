<button type="button" class="btn btn-primary" id="liveToastBtn">{{$message}}</button>

<div {{$attributes->merge(['class' => "toast-container position-fixed bottom-0 end-0 p-3"])}}>
    
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        {{$slot}}
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toastTrigger = document.getElementById('liveToastBtn');
    const toastLiveExample = document.getElementById('liveToast');

    if (toastTrigger && toastLiveExample) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show();
        });
    }
});
</script>
