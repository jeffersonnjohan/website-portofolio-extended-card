@extends('template.template')


@section('content')

@include('template.buttonAcademic')

{{-- Description --}}
<div class="w-full bg-brown4 py-10">
    <div class="w-3/5 py-20 px-28 font-poppins text-brown1 text-center bg-white m-auto rounded">
        {{-- Content academic --}}
        @yield('contentAcademic')
    </div>
</div>



@endsection