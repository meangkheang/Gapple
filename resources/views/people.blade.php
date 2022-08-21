@extends('layout')

@section('content')

@if (count($people) == 0)
    <p>no person with this id</p>
@endif

@foreach($people as $person)

<a href="/people/{{ $person['id'] }}">
    <div class="max-w-sm h-full rounded overflow-hidden shadow-lg xs:mb-6">
        <img class="w-full h-48 object-cover" src={{ $person['hero'] }} alt="Sunset in the mountains">
        <div class="px-6 py-4">
        <div class="font-semibold text-xl text-green-400 mb-4">{{ $person['title'] }}</div>
        <p class="text-gray-700 text-base">
            {{ $person['description'] }}
        </p>
        </div>
        <div class="px-6 pt-4 pb-2 ">
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
        </div>
    </div>
</a>




@endforeach


@endsection


