<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameReviews</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

<!-- HEADER -->
<header class="bg-gray-900 text-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">

        <h1 class="text-xl font-bold">
            🎮 GameReviews
        </h1>

        <nav class="flex gap-6 text-sm">
            <a href="#" class="hover:text-gray-400">Home</a>
            <a href="#" class="hover:text-gray-400">Games</a>
            <a href="#" class="hover:text-gray-400">Login</a>
        </nav>

    </div>
</header>

<!-- HERO -->
<section class="text-center py-16 px-4 bg-gradient-to-r from-indigo-500 to-purple-600 text-white">

    <h2 class="text-3xl font-bold">
        Descubra e avalie jogos
    </h2>

    <p class="mt-4 text-indigo-100 max-w-xl mx-auto text-sm">
        Veja opiniões da comunidade gamer
    </p>

</section>

<!-- GRID -->
<div class="max-w-6xl mx-auto px-4 py-10">

    <!-- TESTE -->
    <!-- <div class="grid grid-cols-2 gap-4 mb-8">
        <div class="bg-red-500 p-4 text-white">Teste 1</div>
        <div class="bg-blue-500 p-4 text-white">Teste 2</div>
    </div> -->

    <!-- CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5">

        @forelse($reviews as $review)

        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl hover:scale-[1.02] transition duration-300 max-w-xs mx-auto">

            <img src="{{ $review->game->cover_image ?? 'https://via.placeholder.com/400' }}"
                 class="w-full h-32 object-cover">

            <div class="p-3">

                <h3 class="text-sm font-semibold mb-1">
                    {{ $review->title }}
                </h3>

                <p class="text-xs text-gray-400 mb-1">
                    {{ $review->game->title }}
                </p>

                <p class="text-gray-600 text-xs mb-2 leading-snug">
                    {{ Str::limit($review->content, 60) }}
                </p>

                <div class="flex justify-between text-xs items-center">

                    <span class="text-yellow-500 font-bold">
                        ⭐ {{ $review->score }}/10
                    </span>

                    <span class="text-gray-400">
                        {{ $review->user->name }}
                    </span>

                </div>

            </div>
        </div>

        @empty

        <p class="col-span-full text-center text-gray-500">
            Nenhuma avaliação encontrada 😢
        </p>

        @endforelse

    </div>
</div>

<!-- FOOTER -->
<footer class="bg-gray-900 text-white mt-10">
    <div class="max-w-6xl mx-auto px-4 py-8 text-center text-sm text-gray-400">

        © 2026 GameReviews

    </div>
</footer>

</body>
</html>