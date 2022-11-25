<html>
<head>
    <title>MafiaZone | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='index.css'>
    <script src="https://kit.fontawesome.com/44d0f25a2a.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-center bg-no-repeat bg-cover m-0 overflow-hidden p-0">
    <ul class='bg-black flex items-center justify-between h-12 m-0 overflow-hidden p-0 text-white w-full'>
        <li><i class="fa-solid fa-bars ml-6" id='display'></i><i class="fa-solid fa-xmark icon" id='display2' onclick='closeMenu()'></i><a href='index.php' class='logo'>MafiaZone</a></li>
        <div class='hide gap-8 flex text-xl'>
            <li><a href="index.php" id="first">Home</a></li>
            <li><a href="login.php">Game</a></li>
            <li><a href="#">Info</a></li>
        </div>
        <li><a href='login.php'><button class="h-full text-base py-0 px-6 text-white uppercase font-bold bg-[#A10216]">Login</button></a></li>
    </ul>
    <ul class='dropdown bg-black border-white border-solid border-t-2 m-0 overflow-hidden py-0 px-6 fixed w-full z-10'>
    <li><a href="index.php" id="first">Home</a></li>
        <li><a href='login.php'>Game</a></li>
        <li><a href='#'>Info</a></li>
    </ul>
    <div class='flex flex-col justify-center py-0 px-6 relative h-5/6'>
        <div>
            <h1 class="bg-black inline-block p-1 text-center">MafiaZone: Enter the zone</h1><br />
            <div class='center'><a href='registreer.php'><button>Create account.</button></a></div>
        </div>
    </div>
</body>
</html>

<style>
    body {
        background-image: url('images/background.png');
    }

    #dropdown {
        max-height: 0;
        transition: 0.5s;
    }

    @media screen and (max-width: 769px) {
    ul .hide {
        display: none;
    }
    .center {
        display: flex;
        justify-content: center;
    }
    #display {
        display: inline;
    }
}
</style>