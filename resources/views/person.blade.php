@extends('layout')

@section('content')

<div class="max-w-screen p-4 md:flex md:gap-10">
    <img src={{ $person['hero'] }} alt={{ $person['hero'] }}
    class="rounded-full w-28 h-28 mx-auto object-cover shadow-lg border">
    <div class="w-full mt-2 text-center md:text-left ">

        <div class="font-bold text-lg mb-2">{{ $person['username'] }}</div>
        <p class="bg-gray-200 text-gray-800 text-sm inline-block py-2 px-4 rounded">{{ $person['description'] }}</p><br>

        <span class="italic font-bold">Position:  </span>
        <span class="inline-block text-sm mt-4 font-semibold"> {{ $person['title'] }}</span><br>


        <span class="italic font-bold">Email:  </span>
        <span class="inline-block text-sm mt-4 font-semibold"> {{ $person['email'] }}</span><br>

        <span class="italic font-bold">Location:  </span>
        <span class="inline-block text-sm mt-4 font-semibold"> {{ $person['location'] }}</span><br>

        <span class="italic font-bold">Company:  </span>
        <span class="inline-block text-sm mt-4 font-semibold"> {{ $person['company'] }}</span><br>
    </div>



</div>


@endsection

