<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Design Project</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-100">
  <header class="bg-white border-b border-gray-100">
    <div class="max-w-screen-lg mx-auto px-2 sm:px-4">
      <div class="flex justify-between items-center py-2">
        <div class="flex items-center gap-2">
          <div class="flex items-center justify-center w-10 h-10 rounded-full bg-gradient-to-r from-indigo-300 to-purple-400">
            <span class="text-white font-bold select-none">
              @auth
                DV
              @endauth

              @guest
                A
              @endguest
            </span>
          </div>
          <span class="hidden sm:block font-semibold">
            @auth
              Dmitry Vinogradov  
            @endauth
          </span>
        </div>
        <div class="burger-menu">
          <span></span>
        </div>
      </div>

      <nav class="menu py-2">
        <ul class="flex flex-col gap-1">
          @auth
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100" href="#">Main</a></li>
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100" href="#">About</a></li>
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100" href="#">Some more</a></li>
          @endauth

          @guest
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100 @if(Route::is('login')) underline @endif" href="{{ route('login') }}">Авторизация</a></li>
            <li><a class="block px-3 py-2 rounded-md font-medium hover:bg-gray-100 @if(Route::is('register')) underline @endif" href="{{ route('register') }}">Регистрация</a></li>
          @endguest
        </ul>
      </nav>
    </div>
  </header>

  <section class="bg-white shadow">
    <div class="max-w-screen-lg mx-auto px-2 sm:px-4">
      @yield('header')
    </div>
  </section>

  <main>
    <div class="max-w-screen-lg mx-auto px-2 sm:px-4">
      @yield('content')
    </div>
  </main>

  <script src="{{ asset('js/app.js') }}"></script>
  @yield('scripts', '')
</body>
</html>