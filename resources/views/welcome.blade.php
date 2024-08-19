<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  @vite('resources/css/app.css')
</head>
<body class="relative h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/images/bg1.jpg');">
  <div class="absolute inset-0 bg-gray-800 opacity-50"></div>
  <div class="relative z-10 flex items-center justify-center h-full text-center text-white">
    <div>
      <h1 class="text-4xl font-bold mb-8">
        Welcome to Our Platform
      </h1>
      <div class="space-x-4 mt-4">
        <a href="{{ route('register') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
          Register
        </a>
        <a href="{{ route('login') }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          Login
        </a>
      </div>
    </div>
  </div>
</body>
</html>