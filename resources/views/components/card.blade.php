    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
@props([
    'title',
    'text' => null,
    'image' => null
])

<div class="col-md-4 mb-4">
    <div {{ $attributes->merge(['class' => 'card h-100 shadow-sm border-0']) }}>

        @if($image)
            <img src="{{ $image }}" class="card-img-top img-fluid" alt="{{ $title }}">
        @endif

        <div class="card-body text-center">

            <h5 class="card-title fw-bold">
                {{ $title }}
            </h5>

            <p class="card-text">
                {{ $text ?? $slot }}
            </p>

        </div>
    </div>
</div>