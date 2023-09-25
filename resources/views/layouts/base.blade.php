<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Página Inicial - LearnTube</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <wireui:scripts />
    {{-- <link rel="stylesheet" href="{{ asset('build/assets/app-2f367b9e.css') }}">
    <script src="{{ asset('build/assets/app-dbe23e4c.js') }}" defer></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <x-dialog />
    <x-notifications />
    <nav class="p-4 text-white bg-blue-600">
        <div class="container flex items-center justify-between mx-auto">
            <div>
                <h1 class="text-3xl font-bold"><a href="{{ route('index') }}">Bem-vindo ao LearnTube</a></h1>
                <p class="mt-2">Aprenda, Cresça, Conquiste com Cursos Gratuitos do YouTube.</p>
            </div>
            <div>
                {{-- @dd(auth()->user()) --}}
                @if (auth()->check() && auth()->user()->is_admin)
                    <a href="{{ route('dashboard') }}" class="text-white ">Dashboard</a>
                @elseif (auth()->check() && !auth()->user()->is_admin)
                    <div class="flex gap-4">
                        <a href="{{ route('studant.index') }}" class="text-white ">Meus Cursos</a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                Sair
                            </button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="text-white">Login</a>
                @endif
            </div>
        </div>
    </nav>


    {{ $slot }}

    <footer class="p-4 mt-8 text-white bg-green-500">
        <div class="container mx-auto">
            <p>&copy; 2023 LearnTube - Cursos Gratuitos do YouTube</p>
        </div>
    </footer>
</body>

</html>
