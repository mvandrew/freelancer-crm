@props(['suffix' => 'in', 'name'])

<input name="{{ $name }}" {!! $attributes->merge(['class' => 'form-control form-signin__input form-signin__input_'.$name.'  form-signin__input_'.$suffix]) !!}>
