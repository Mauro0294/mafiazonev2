<html>
<head>
    <title>MafiaZone | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <script src="https://kit.fontawesome.com/44d0f25a2a.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
</head>
<body class="bg-center bg-no-repeat bg-cover m-0 overflow-hidden p-0">
    <ul class='bg-black flex items-center justify-between h-12 m-0 overflow-hidden pl-6 uppercase font-bold text-white w-full border-b border-white'>
        <li><i class="fa-solid fa-bars ml-6 block lg:hidden" id='display'></i><i class="fa-solid fa-xmark icon block lg:hidden" id='display2' onclick='closeMenu()'></i><a href='index' class='text-xl'>MafiaZone</a></li>
        <div class='hidden lg:flex gap-8 text-lg'>
            <li><a href="#" id="first">Home</a></li>
            <li><a href="login">Game</a></li>
            <li><a href="#">Info</a></li>
        </div>
        <li><a href='login'><button class="h-full text-base py-0 px-6 text-white uppercase font-bold bg-[#A10216]">Login</button></a></li>
    </ul>
    <ul id="dropdown" class='dropdown hidden bg-black border-white border-solid border-t-2 m-0 overflow-hidden py-0 px-6 fixed w-full z-10'>
        <li><a href="index" id="first">Home</a></li>
        <li><a href='login'>Game</a></li>
        <li><a href='#'>Info</a></li>
    </ul>
    <div class='flex flex-col justify-center py-0 px-6 relative h-5/6 text-white font-bold uppercase'>
        <div>
            <h1 class="bg-black inline-block p-2 text-center text-3xl">MafiaZone: Enter the zone</h1>
            <div class='flex justify-center lg:block mt-4'><a href='register'><button class='bg-[#A10216] uppercase px-2 py-1'>Create account.</button></a></div>
        </div>
    </div>
</body>
</html>

<style>
    body {
        background-image: url('images/background.png');
    }

    .menu-open {
        padding: 10px 25px;
        max-height: 100px;
        transition: 0.5s;
    }   
</style>