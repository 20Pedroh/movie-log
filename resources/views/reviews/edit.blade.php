<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Review</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<div class="bg-white p-6 rounded shadow-md w-full max-w-md">

    <h2 class="text-lg font-bold mb-4">Editar Review</h2>

    <form action="{{ route('reviews.update', $review->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- TÍTULO -->
        <input type="text" name="title"
               value="{{ $review->title }}"
               class="w-full mb-3 p-2 border rounded"
               placeholder="Título">

        <!-- CONTEÚDO -->
        <textarea name="content"
                  class="w-full mb-3 p-2 border rounded"
                  placeholder="Conteúdo">{{ $review->content }}</textarea>

        <!-- NOTA -->
        <input type="number" name="score"
               value="{{ $review->score }}"
               class="w-full mb-3 p-2 border rounded"
               min="0" max="10">

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Atualizar
        </button>

    </form>

    <!-- VOLTAR -->
    <a href="{{ route('home') }}"
    class="block text-center mt-4 text-sm text-gray-500 hover:underline">
        ← Voltar
    </a>

</div>

</body>
</html>