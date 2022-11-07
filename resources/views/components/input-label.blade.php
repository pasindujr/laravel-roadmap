@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-[#fffffe]']) }}>
    {{ $value ?? $slot }}
</label>
