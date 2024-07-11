@props([
    'classes' => 'btn bg-black text-white rounded-0 px-4 py-2',
    'attributes' => [],
    'href' => null,
    'target' => '_self',
    'icon' => null,
    'iconPosition' => 'left',
])

@php
    $attributes['href'] = $href;
    $attributes['target'] = $target;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    @if ($icon && $iconPosition === 'left')
        <span class="iconify" data-icon="{{ $icon }}"></span>
    @endif
    {{ $slot }}
    @if ($icon && $iconPosition === 'right')
        <span class="iconify" data-icon="{{ $icon }}"></span>
    @endif
</a>

