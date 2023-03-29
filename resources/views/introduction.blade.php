@extends('template.template')

@section('content')

<div class="h-[400px] w-full bg-brown4 flex flex-nowrap text-brown1">
    <div class="w-[40%] h-full flex justify-center border-r-2 border-brown1">
        {{-- Image --}}
        <div class="w-[80%] h-[80%] overflow-hidden rounded-3xl m-auto imageJefferson bg-cover bg-center bg-no-repeat border-4 border-brown1">
        </div>
    </div>
    <div class="w-[60%] bg-brown4 h-full py-32 px-20">
        <h2 class="text-6xl font-bold mb-3">Jefferson Johan</h2>
        <h3 class="text-xl mb-1">Palembang, 12 Februari 2004</h3>
        <p >Program Pendidikan Teknik Informatika BCA Batch 12</p>
    </div>
</div>

<div class="w-full h-[250px] text-center text-brown1">
    <h1 class="mt-16 text-4xl font-bold underline">Motto</h1>
    <section>
        <blockquote class="py-12 px-36 text-xl italic">
            "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam et veritatis ratione adipisci cum sint provident dolore possimus cupiditate distinctio?"
        </blockquote>
    </section>
</div>

<div class="w-full text-xl text-justify text-brown4 px-40 py-20 bg-brown1">
    <img src="https://source.unsplash.com/600x300?background-pink" alt="Image 1" class = "w-3/5 m-auto mb-10">
    <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex ullam ipsam tenetur cum dolorem incidunt nostrum autem aut, ipsa veniam voluptatibus. Asperiores porro dolore vitae repellat sed dolorem! Ratione animi, provident doloribus nesciunt molestias recusandae cum tempore similique aut! Rerum.</p>
    <img src="https://source.unsplash.com/600x300?background-pink" alt="Image 1" class = "w-3/5 m-auto mb-10">
    <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nihil ab qui pariatur dolorum animi eius, deserunt magni alias suscipit? Provident eaque distinctio aliquam, rerum delectus sit tempore deleniti minima maiores dolorum ab possimus inventore. Ipsam sequi illum, accusantium sunt ipsa, dolores beatae quidem eos dicta animi doloremque eius facilis..</p>
</div>
@endsection