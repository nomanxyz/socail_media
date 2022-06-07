@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-300 rounded-md focus:ring focus:ring-blue-200 focus:border-blue-600 transition duration-200']) !!}>
