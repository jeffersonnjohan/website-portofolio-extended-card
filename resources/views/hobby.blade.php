@extends('template.template')

@section('content')

{{-- Section Card --}}
<div class="w-full h-[400px] text-center text-black font-poppins py-10">
    <h1 class="text-3xl mb-5 font-bold">What are my hobbies?</h1>

    <div class="w-[50%] m-auto h-[2px] bg-black"></div>

    {{-- Card Hobbies --}}
    <div class="mt-10 w-[620px] m-auto flex justify-between text-brown1">
        {{-- Hobi 1 --}}
        <a href="#catur">
            <div class="w-[200px] h-52 bg-brown4 rounded-md flex flex-col items-center hover:border-2 box-border border-brown1 hover:scale-105 hover:cursor-pointer active:border-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="160" viewBox="0 0 448 512"><path fill="#8d7b68" d="M96 48L82.7 61.3c-12 12-18.7 28.2-18.7 45.2v132.4c0 10.7 5.3 20.7 14.2 26.6l10.6 7c14.3 9.6 32.7 10.7 48.1 3l3.2-1.6c2.6-1.3 5-2.8 7.3-4.5l49.4-37c6.6-5 15.7-5 22.3 0c10.2 7.7 9.9 23.1-.7 30.3L90.4 350C73.9 361.3 64 380 64 400h320l28.9-159c2.1-11.3 3.1-22.8 3.1-34.3V192C416 86 330 0 224 0H83.8C72.9 0 64 8.9 64 19.8c0 7.5 4.2 14.3 10.9 17.7L96 48zm24 68a20 20 0 1 1 40 0a20 20 0 1 1-40 0zM22.6 473.4c-4.2 4.2-6.6 10-6.6 16c0 12.5 10.1 22.6 22.6 22.6h370.8c12.5 0 22.6-10.1 22.6-22.6c0-6-2.4-11.8-6.6-16L384 432H64l-41.4 41.4z"/></svg>
                <h2 class="font-bold text-xl">Chess</h2>
            </div>
        </a>
        {{-- Hobi 2 --}}
        <a href="#bulutangkis">
            <div class="w-[200px] h-52 bg-brown4 rounded-md flex flex-col items-center hover:border-2 box-border border-brown1 hover:scale-105 hover:cursor-pointer active:border-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="160" viewBox="0 0 48 48"><g fill="none" stroke="#8d7b68" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="2" stroke-width="4"><path d="M19.5 44c2.49 0 4.5-2.01 4.5-4.5V19h-4l-5 20.5c0 2.49 2.01 4.5 4.5 4.5Z"/><path d="M20 19h-4L6.68 37.9c-1.11 2.61.48 5.74 3.3 6.07A4.494 4.494 0 0 0 15 39.5M28.5 44c-2.49 0-4.5-2.01-4.5-4.5V19h4l5 20.5c0 2.49-2.01 4.5-4.5 4.5Z"/><path d="M28 19h4l9.32 18.9c1.11 2.61-.48 5.74-3.3 6.07A4.494 4.494 0 0 1 33 39.5M16.06 13c-.04-.33-.06-.66-.06-1c0-4.42 3.58-8 8-8s8 3.58 8 8c0 .34-.02.67-.06 1H16.06Z"/></g></svg>
                <h2 class="font-bold text-xl">Badminton</h2>
            </div>
        </a>
        {{-- Hobi 3 --}}
        <a href="#memasak">
            <div class="w-[200px] h-52 bg-brown4 rounded-md flex flex-col items-center hover:border-2 box-border border-brown1 hover:scale-105 hover:cursor-pointer active:border-red-500">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="160" viewBox="0 0 256 256"><path fill="#8d7b68" d="M88 48V16a8 8 0 0 1 16 0v32a8 8 0 0 1-16 0Zm40 8a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8Zm32 0a8 8 0 0 0 8-8V16a8 8 0 0 0-16 0v32a8 8 0 0 0 8 8Zm94.4 35.2a8 8 0 0 0-11.2-1.6L224 104V88a16 16 0 0 0-16-16H48a16 16 0 0 0-16 16v16L12.8 89.6a8 8 0 0 0-9.6 12.8L32 124v60a32 32 0 0 0 32 32h128a32 32 0 0 0 32-32v-60l28.8-21.6a8 8 0 0 0 1.6-11.2Z"/></svg>
                <h2 class="font-bold text-xl">Cooking</h2>
            </div>
        </a>
    </div>
</div>

{{-- Section Hobbies --}}
<div id="catur" class="w-full text-center text-black font-poppins">
    <div class="w-4/5 m-auto border-t-2">
        <h1 class="text-3xl mt-16 mb-7 font-bold">Chess</h1>
        <p class="mb-5 text-lg px-16 text-justify">Playing chess is my hobby. When i play chess, i often forget about time. I think chess is the best way to train our mental and brain. Chess is full of theory and strategy. Small mistake in chess can lead us to the defeat.</p>
        <img src="/img/mainCatur3.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">This picture took at Talent's League PPA/PPTI/PPBP. I play chess with my partner Fanny Angelia PPTI 12. We join this competition to bring PPTI 12 name.</p>
        <img src="/img/mainCatur.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">The picture above is final round of Talent's League at RTB (Rumah Talenta BCA). I was nervous at that time because of many people watching us playing chess. Every move is critical decision, so that we can't do that mistake.</p>
        <img src="/img/mainCatur2.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">Praise the Lord, we got first podium at this league. From this moment, i decide to take chess more serious and serious again. </p>
        <img src="/img/ekskulCatur.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">I am entrusted to be the head of chess extracurricular PPBP/PPTI. Our extracurricular is held every Thursday 19.00 - 21.00</p>
    </div>
</div>
<div id="bulutangkis" class="w-full text-center text-black font-poppins mt-16">
    <div class="w-4/5 m-auto border-t-2">
        <h1 class="text-3xl mt-16 mb-7 font-bold">Badminton</h1>
        <p class="mb-5 text-lg px-16 text-justify">I used to play badminton every day when i was in Junior High School. I often play with my cousin at my house. I like this sport because don't need high power, but need speed and focus.</p>
        <img src="/img/mainBadmin1.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">My favourite badminton player is Hendra Setiawan. Even though he is almost 40 years old, he still capable to be World Champion. His playing style is slow, but his speciality in ball placement. Maybe if i play against him, i will get back pain hahahaha</p>
        <img src="/img/mainBadmin2.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
    </div>
</div>

<div id="memasak" class="w-full text-center text-black font-poppins my-16">
    <div class="w-4/5 m-auto border-t-2">
        <h1 class="text-3xl mt-16 mb-7 font-bold">Cooking</h1>
        <p class="mb-5 text-lg px-16 text-justify">Although i can't cook properly, i still can cook indomie and fried egg. Back then when i am in 4th Cawu holiday, i tried to cook Fried Rice for the first time. You can see my progress below</p>
        <img src="/img/masak2.jpg" alt="Image 1" class = "w-1/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">First, i cook 2 sunny side up eggs. The only thing i need is egg and margarine. The result is so good, until now i can remember and feel the taste </p>
        <img src="/img/masak1.jpg" alt="Image 1" class = "w-1/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">After it, i put rice.</p>
        <img src="/img/masak3.jpg" alt="Image 1" class = "w-1/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">The most important thing, i use Racik instant seasoning for Fried Rice :V</p>
        <img src="/img/masak4.jpg" alt="Image 1" class = "w-1/5 m-auto mb-10">
        <p class="mb-5 text-lg px-16 text-justify">Well done! My fried rice is so delicious!</p>
    </div>
</div>

@endsection