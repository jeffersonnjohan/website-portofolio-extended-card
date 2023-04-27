@extends('template.template')

@section('content')
<div class="w-full p-10">
    
    {{-- Card1 --}}
    <div class="w-1/2 m-auto border border-gray-200 rounded-lg shadow">
        <div class="rounded-t-lg bg-cover bg-center w-full h-[400px]" style="background-image:url('/img/{{ $restaurant["image"] }}')">
            
        </div>
        <div class="p-5">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $restaurant["name"] }}</h5>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $restaurant["address"] }}</p>
            <div class="rounded-t-xl rounded-b-xl text-center px-3 h-8 leading-8 font-bold 
                {{ $restaurant["quality"] == 'gold'? 'bg-gold' : '' }}
                {{ $restaurant["quality"] == 'silver'? 'bg-silver' : '' }}
                {{ $restaurant["quality"] == 'bronze'? 'bg-bronze' : '' }}
            ">
                {{ strtoupper($restaurant["quality"]) }}
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-10">
        <a href="/restaurant" class="inline-flex items-center w-40 px-3 py-2 text-sm font-medium text-center text-brown1 bg-brown4 rounded-lg hover:bg-brown1 hover:text-brown4 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Back to Restaurant
        </a>   
    </div>
</div>

@endsection