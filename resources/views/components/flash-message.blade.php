@if (flash()->message)
    <div class="alert alert-{{ flash()->class }}" role="alert">
        @if (flash()->class == 'success')
            <i class="bi bi-check-circle-fill"></i>
        @endif
        @if (flash()->class == 'danger')
            <i class="bi bi-exclamation-triangle-fill"></i>
        @endif
        {{ flash()->message }}
    </div>
@endif