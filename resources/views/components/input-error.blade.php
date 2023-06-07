@props(['messages'])

@if ($messages)
<ul {{ $attributes->merge(['class' => 'bg-red-100 border-red-600 text-red-600 font-bold p-3']) }}>
    @foreach ((array) $messages as $message)
    <li>{{ $message }}</li>
    @endforeach
</ul>
@endif