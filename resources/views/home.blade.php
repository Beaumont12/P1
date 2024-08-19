<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-300 min-h-screen">
    <!-- Fixed Navbar -->
    <nav class="w-full p-4 min-h-20 bg-sky-700 shadow-lg border-b border-black top-0 z-20 rounded-md mt-2 ml-2 mr-2" >
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="text-lg font-bold text-gray-800">My Website</div>
                <div class="space-x-8">
                    <a href="#" class="text-white hover:text-blue-500 font-semibold">Home</a>
                    <a href="#" class="text-white hover:text-blue-500 font-semibold">About</a>
                    <a href="#" class="text-white hover:text-blue-500 font-semibold">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="mt-6 mx-auto max-w-full p-8 bg-gray-100">
        <h1 class="text-4xl font-bold mb-6">Welcome to Our Platform</h1>
        <p class="text-lg text-gray-700 mb-4">
            This is the home page. YOU CAN NOW REST HINDI KO NA KAEYA.
        </p>
        <p class="text-lg text-gray-700 mb-1">
            "New Woman"</p>
            <p class="text-sm text-gray-700 mb-4">(LISA feat. ROSALÍA)</p>

            <p class="text-sm text-gray-700" >Here I go
            <p class="text-sm text-gray-700">Banging it, banging it, wanna crack these walls</p>
            <p class="text-sm text-gray-700">Banging it, banging it, wanna echo through the halls</p>
            <p class="text-sm text-gray-700">Pulling up fresh face brand new día</p>
            <p class="text-sm text-gray-700">Uh</p>
            <p class="text-sm text-gray-700 mb-4">Lalisa and Rosalia</p>

            <p class="text-sm text-gray-700">Soak up, all new</p>
            <p class="text-sm text-gray-700">So I cut</p>
            <p class="text-sm text-gray-700">I go, go to the root</p>
            <p class="text-sm text-gray-700 mb-4">Off to bloom, yeah</p>

            <p class="text-sm text-gray-700">Purple into gold</p>
            <p class="text-sm text-gray-700"p>Pain has come and gone again</p>
            <p class="text-sm text-gray-700">Walked through that fire</p>
            <p class="text-sm text-gray-700 mb-4">I rediscover, ah, ah</p>

            <p class="text-sm text-gray-700">Hit it when I serve</p>
            <p class="text-sm text-gray-700">Bitch, you better swerve</p>
            <p class="text-sm text-gray-700">Revving up my, au, au, au, au, aura</p>
            <p class="text-sm text-gray-700">Focus on my mind</p>
            <p class="text-sm text-gray-700">Taking my-y time</p>
            <p class="text-sm text-gray-700">I'm a new woman</p>
            <p class="text-sm text-gray-700 mb-4">Woman</p>

            <p class="text-sm text-gray-700">Bitch, you better swerve</p>
            <p class="text-sm text-gray-700">Revving up my au, au, au, au, aura</p>
            <p class="text-sm text-gray-700">Focus on my mind</p>
            <p class="text-sm text-gray-700">Taking my-y time</p>
            <p class="text-sm text-gray-700">I'm a new woman</p>
            <p class="text-sm text-gray-700 mb-4">Woman</p>

            <p class="text-sm text-gray-700">Face, eyes, body go wild</p>
            <p class="text-sm text-gray-700">You want this?</p>
            <p class="text-sm text-gray-700">I'm a new woman, woman</p>
            <p class="text-sm text-gray-700">Eyes</p>
            <p class="text-sm text-gray-700">I'm all about mind</p>
            <p class="text-sm text-gray-700">You want this?</p>
            <p class="text-sm text-gray-700 mb-4">I'm a new woman
        </p>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-red-500 hover:text-red-700 font-semibold">Logout</button>
        </form>
        
    </div>
</body>

</html>