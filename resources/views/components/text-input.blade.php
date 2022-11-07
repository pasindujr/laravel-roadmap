@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-md bg-[#16161a] shadow-sm border-gray-300 text-[#fffffe] focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 focus:bg-[#16161a] focus:text-[#fffffe]' ]) !!}>
