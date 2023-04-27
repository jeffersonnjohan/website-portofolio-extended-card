@extends('template.template')

@section('content')


<div class="flex relative items-center m-auto bg-white border border-gray-200 rounded-lg shadow flex-row md:max-w-xl hover:bg-gray-100 mt-10">
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="/img/lomie.jpg" alt="Lomie Taksam">
    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Lomie Taksam Palembang</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            Jl. Letda Abdul Rozak No.23, Duku, Kec. Ilir Tim. II, Kota Palembang, Sumatera Selatan 30114
        </p>
        <a href="/restaurant/1" class="inline-flex items-center w-32 px-3 py-2 text-sm font-medium text-center text-brown1 bg-brown4 rounded-lg hover:bg-brown1 hover:text-brown4 focus:ring-4 focus:outline-none focus:ring-blue-300">
            Read more
            <svg aria-hidden="true" class="w-4 h-4 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </a>    
    </div>
    <div class="rounded-tr-xl rounded-bl-xl text-center px-3 h-8 top-0 right-0 bg-gold absolute">
        GOLD
    </div>
</div>


@endsection