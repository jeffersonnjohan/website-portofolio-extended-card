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
    <title>Your title</title>
</head>
<body>
    
    {{-- Navbar --}}
    <div class="navbar bg-[url('https://source.unsplash.com/1200x400?background-pink')] container h-[500px] bg-cover">
        <div class="container h-10"></div>
        <div class="container w-full h-20 flex justify-center sticky top-0">
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]">Introduction</span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]">Academic</span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]">Hobby</span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]">Contact</span> </div>
            <div class="p-3 text-center"><span class="drop-shadow-[0_2px_6px_rgba(0,0,0,1)] hover:text-brown1 hover:cursor-pointer hover:drop-shadow-[0_2px_6px_rgba(255,255,255,1)]">Organization</span> </div>
        </div>
    </div>

    @yield('content')
</body>
</html>