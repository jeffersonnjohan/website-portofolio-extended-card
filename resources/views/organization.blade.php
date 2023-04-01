@extends('template.template')

@section('content')
<div class="w-full text-justify p-10 flex text-brown1 font-poppins">
    
    {{-- Kiri --}}
    <div class="w-1/3 h-[500px] flex flex-col items-center border-r-2 text-center p-5 border-brown1">
        {{-- Organisasi --}}
        <div class="w-[300px] font-bold mb-5">
            {{-- Header Organisasi --}}
            <div class="w-full p-4 text-lg border-2 rounded-t-xl border-brown1 bg-brown4">
                <h2>Organisasi</h2>
            </div>
            {{-- Button Organisasi --}}
            <a href="/organization/bgc">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 last:rounded-b-xl">
                    <p>Big Goal Community</p>
                </div>
            </a>
        </div>
        
        {{-- Organisasi --}}
        <div class="w-[300px] font-bold mb-5">
            {{-- Header Organisasi --}}
            <div class="w-full p-4 text-lg border-2 rounded-t-xl border-brown1 bg-brown4">
                <h2>Organisasi</h2>
            </div>
            {{-- Button Organisasi --}}
            <a href="/organization/bgc">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 last:rounded-b-xl">
                    <p>Big Goal Community</p>
                </div>
            </a>
        </div>

        {{-- Organisasi --}}
        <div class="w-[300px] font-bold mb-5">
            {{-- Header Organisasi --}}
            <div class="w-full p-4 text-lg border-2 rounded-t-xl border-brown1 bg-brown4">
                <h2>Organisasi</h2>
            </div>
            {{-- Button Organisasi --}}
            <a href="/organization/bgc">
                <div class="w-full p-2 border-b-2 border-x-2 border-brown1 hover:bg-brown1 hover:text-brown4 last:rounded-b-xl">
                    <p>Big Goal Community</p>
                </div>
            </a>
        </div>
    </div>
    {{-- Kanan --}}
    <div class="w-2/3 h-[500px] bg-blue-100">
        aksja
    </div>
</div>
@endsection