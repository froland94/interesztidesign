<script>
    localStorage.setItem('theme', @json($themeMode));

    document.addEventListener('alpine:init', function () {
        window.addEventListener('theme-changed', function (event) {
            fetch('/admin/save-theme', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') ?? '',
                },
                body: JSON.stringify({ theme: event.detail }),
            });
        });
    });
</script>
