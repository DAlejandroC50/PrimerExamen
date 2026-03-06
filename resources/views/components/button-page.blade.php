@props([
    'title',
    'text',
    'route',
    'color' => 'primary',
    'label' => 'Ver más'
])

<div class="col-md-4">
    <h5 class="fw-bold">{{ $title }}</h5>

    <p>
        {{ $text }}
    </p>

    <a {{ $attributes->merge(['href' => route($route), 'class' => "btn btn-$color btn-sm mt-2 w-100"]) }}>
        {{ $label }}
    </a>

</div>