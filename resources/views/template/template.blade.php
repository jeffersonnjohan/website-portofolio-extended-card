<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:ital,wght@0,200;0,400;1,600;1,700&display=swap" rel="stylesheet">
    <title> Jefferson | {{ $title }}</title>
</head>
<body>
    
    {{-- Navbar --}}
    <div class="navbar bg-[url('https://source.unsplash.com/1200x400?background-pink')] w-full h-[500px] bg-cover bg-fixed text-brown1">
    {{-- <div class="navbar bg-brown3 container h-[500px] bg-cover text-brown1"> --}}
        <div class="w-full h-10"></div>
        <div class="w-full h-20 flex justify-center sticky top-0">
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]"><a href="/">Introduction</a></span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]"><a href="/academic">Academic</a></span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]"><a href="/hobby">Hobby</a></span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]"><a href="/contact">Contact</a></span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]"><a href="/organization">Organization</a></span> </div>
        </div>
        <div class="w-full text-center py-10 px-[200px]">
            <h1 class="mt-[50px] text-4xl font-bold">Hello World!</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut accusamus tempore aspernatur nihil eius labore distinctio sit amet facilis. Nihil corrupti nemo qui id excepturi dolorum veniam deleniti libero autem.</p>
        </div>
    </div>

    @yield('content')

</body>
</html>