@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'guayaba focus:border-teal-400 focus:ring-teal-400 rounded-md shadow-sm']) !!}>
<style>
.guayaba:focus{
    border-color: #5EC6D1;
}
</style>
