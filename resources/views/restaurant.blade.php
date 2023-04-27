@extends('template.template')

@section('content')
<div class="w-full pb-10">
    @foreach ($restaurants as $restaurant)
        <div class="flex relative items-center m-auto bg-white border border-gray-200 rounded-lg shadow flex-row md:max-w-xl mt-10">
            <div class="bg-cover bg-center rounded-t-lg w-96 h-48 md:rounded-none md:rounded-l-lg" alt="Lomie Taksam" style="background-image: url('/img/{{ $restaurant["image"] }}')">

            </div>
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $restaurant["name"] }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    {{ $restaurant["address"] }}
                </p>
                <a href="/restaurant/{{ $restaurant["id"] }}" class="inline-flex items-center w-32 px-3 py-2 text-sm font-medium text-center text-brown1 bg-brown4 rounded-lg hover:bg-brown1 hover:text-brown4 focus:ring-4 focus:outline-none focus:ring-blue-300">
                    Read more
                    <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>    
            </div>
            <div class="rounded-tr-xl rounded-bl-xl text-center px-3 h-8 top-0 right-0 absolute leading-8 font-bold 
                {{ $restaurant["quality"] == 'gold'? 'bg-gold' : '' }}
                {{ $restaurant["quality"] == 'silver'? 'bg-silver' : '' }}
                {{ $restaurant["quality"] == 'bronze'? 'bg-bronze' : '' }}
            ">
                {{ strtoupper($restaurant["quality"]) }}
            </div>
        </div>
    @endforeach
</div>

@endsection