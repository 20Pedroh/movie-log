<nav class="bg-primary-500 text-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <h1 class="text-xl font-bold">GameReviews</h1>

        <div class="flex gap-6 text-sm items-center">
            <a href="{{ route('home') }}" class="hover:text-primary-300">Dashboard</a>

            @guest
                <a href="{{ route('login') }}" class="hover:text-primary-300">Login</a>
                <a href="{{ route('register') }}" class="hover:text-primary-300">Cadastro</a>
            @endguest

            @auth
                <span class="text-primary-200 text-xs">Olá, {{ auth()->user()->name }}</span>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="hover:text-red-300">Sair</button>
                </form>
            @endauth
        </div>
    </div>
</nav>