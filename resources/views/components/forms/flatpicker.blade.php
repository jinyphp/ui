<input type="text"
    class="flatpickr flatpickr-input active"
    placeholder="Select Date.."
    data-id="timePicker"
    readonly="readonly">
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('[data-id="timePicker"]')
            .flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
            });
    });
</script>
