@extends('template.template')

@section('content')

<div class="h-[400px] w-full bg-brown4 flex flex-nowrap text-brown1 font-poppins">
    <div class="w-[40%] h-full flex justify-center border-r-2 border-brown1">
        {{-- Image --}}
        <div class="w-[80%] h-[80%] overflow-hidden rounded-3xl m-auto imageJefferson bg-cover bg-center bg-no-repeat border-4 border-brown1">
        </div>
    </div>
    <div class="w-[60%] bg-brown4 h-full py-32 px-20">
        <h2 class="text-6xl font-bold mb-3">Jefferson Johan</h2>
        <h3 class="text-xl mb-1">Palembang, 12 Februari 2004</h3>
        <p >BCA IT Scholarship Program Batch 12</p>
    </div>
</div>

<div class="w-full h-[250px] text-center text-brown1 font-poppins">
    <h1 class="mt-16 text-4xl font-bold underline">Motto</h1>
    <section>
        <blockquote class="py-12 px-36 text-xl italic">
            "I'm hungry of knowledge, <br> The whole thing is to learn every day, to get brighter and brighter!"
        </blockquote>
    </section>
</div>

<div class="w-full text-xl text-justify text-brown4 px-40 py-20 bg-brown1 font-poppins">
    
    <p class="mb-5">Hi, there! My name is Jefferson Johan. Or you can call me Jeff. Currently, i'm interested in Laravel, Chess, and Badminton. If i ask people who i am, maybe they will feel confused what my hobbies are. Yeah, personally i agree with statement saying that hobbies can change dynamically every day.</p>
    <img src="img/chess1.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
    <p class="mb-5">Even though i have multiple hobbies, i still have time & willingness to join religious organization in PPA/PPTI/PPBP. The organization is Big Goal Community. This organization is a safety place for me to share about my thoughts. My role in this organization is Coordinator of Event Planning Division. </p>
    <img src="img/bgcEvent.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
    <p class="mb-5">In my university life, i feel grateful that i still have good GPA, even i have some activities outside. My favourite course is Algorithm and Programming. First time i learned about that course, i felt happy because there were so many mathematical problem that could be solved using my own algorithm. Some courses that i like are Algorithm Design and Analysis, Accounting from BCA, Artificial Intelligence.</p>
    <img src="img/sneakys.jpg" alt="Image 1" class = "w-3/5 m-auto mb-10">
    <p class="mb-5">Most important thing, i'm really grateful for my classmate at PPTI 12. They are my support system who always available for me whenever i need them. When i'm having hard time on class, they always accompany and teach me. And vice versa. Unfortunately, at the beginning of this program we consist of 35 members. But God's plan is not our plan. Now, we are 34 sneakys who want to pass this program and give positive impact to others</p>
</div>
@endsection