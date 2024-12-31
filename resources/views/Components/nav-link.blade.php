@props(['active' => false, 'type' => 'a'])

@if ($type === 'a')
    <a class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300' }}" {{$attributes}}>{{$slot}}</a>
@else
    <button class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300' }}" {{$attributes}}>{{$slot}}</button>
@endif
