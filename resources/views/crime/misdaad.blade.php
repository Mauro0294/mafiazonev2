<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Mafiazone | Login</title>
    </head>
    <body>
        <div class="flex flex-wrap justify-between items-center px-12">
            <div class="w-full lg:w-1/3 p-4">
              <img src="{{ asset('images/marktplaats.png') }}" alt="Option 1" class="w-full rounded-lg shadow-lg">
              <h3 class="text-2xl font-bold mt-4">Marktplaats oplichting (50% kans)</h3>
              <p class="text-gray-600 mt-2">Je plaatst artikelen op marktplaats, vervolgens als je het geld binnenkrijgt laat je niks meer van je horen</p>
              <form action="{{ route('misdaadRequest', ['crimeId' => 1]) }}" method="POST">
                @csrf
                <button onclick="this.form.submit()" class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Kies</button>
              </form>
            </div>
            <div class="w-full lg:w-1/3 p-4">
              <img src="{{ asset('images/robbery.png') }}" alt="Option 2" class="w-full rounded-lg shadow-lg">
              <h3 class="text-2xl font-bold mt-4">Winkeloverval  (33% kans)</h3>
              <p class="text-gray-600 mt-2">Je gaat een lokale winkel overvallen.</p>
              <form action="{{ route('misdaadRequest', ['crimeId' => 2]) }}" method="POST">
                @csrf
                <button onclick="this.form.submit()" class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Kies</button>
              </form>
            </div>
            <div class="w-full lg:w-1/3 p-4">
              <img src="{{ asset('images/stealing.png') }}" alt="Option 3" class="w-full rounded-lg shadow-lg">
              <h3 class="text-2xl font-bold mt-4">Huis leegroven (25% kans)</h3>
              <p class="text-gray-600 mt-2">Je gaat op pad om een goed huis te zoeken om leeg te roven.</p>
              <form action="{{ route('misdaadRequest', ['crimeId' => 3]) }}" method="POST">
                @csrf
                <button onclick="this.form.submit()" class="bg-blue-500 text-white py-2 px-4 rounded-full mt-4">Kies</button>
              </form>
            </div>
          </div>          
    </body>
</html>