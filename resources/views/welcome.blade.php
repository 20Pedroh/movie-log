<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameReviews</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-primary-50 text-primary-500 min-h-screen flex flex-col">

<!-- HEADER -->
<header class="bg-primary-500 text-white shadow-md">
    <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
        <h1 class="text-xl font-bold">GameReviews</h1>
        <nav class="flex gap-6 text-sm">
            <a href="/" class="hover:text-primary-300">Home</a>
            <a href="#" class="hover:text-primary-300">Games</a>
            <a href="#" class="hover:text-primary-300">Login</a>
        </nav>
    </div>
</header>

<main class="flex-grow">
    <!-- HERO -->
    <section class="text-center py-16 px-4 bg-gradient-to-r from-primary-100 via-primary-300 to-primary-500 text-white">
        <h2 class="text-3xl font-bold">Descubra e avalie jogos</h2>
        <p class="mt-4 text-indigo-100 max-w-xl mx-auto text-sm">Veja opiniões da comunidade gamer</p>
    </section>

    <!-- GRID -->
    <div class="max-w-6xl mx-auto px-4 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5 auto-rows-fr">
            
            @forelse($reviews as $review)
            <!-- CARD -->
            <div class="relative group bg-primary-100 rounded-lg shadow-md overflow-hidden
                        transform transition duration-300 hover:shadow-xl hover:scale-[1.03] flex flex-col">
                
                <!-- IMAGEM -->
                <img src="{{ $review->game->cover_image ?? 'https://via.placeholder.com/400' }}"
                     class="w-full h-32 object-cover">

                <!-- CONTEÚDO -->
                <div class="p-3 flex-1 flex flex-col">
                    <h3 class="text-sm font-semibold mb-1">{{ $review->title }}</h3>
                    <p class="text-xs text-primary-500 mb-1">{{ $review->game->title }}</p>
                    <p class="text-primary-400 text-xs mb-2 leading-snug flex-1">{{ Str::limit($review->content, 60) }}</p>

                    <div class="flex justify-between text-xs items-center mt-auto">
                        <span class="text-yellow-500 font-bold">⭐ {{ $review->score }}/10</span>
                        <span class="text-primary-300">{{ $review->user->name }}</span>
                    </div>
                </div>

                <!-- OVERLAY -->
                @if(true)
                <div class="absolute inset-0 bg-black/70 flex items-center justify-center gap-3
                            opacity-0 group-hover:opacity-100 transition duration-300
                            z-10 pointer-events-none group-hover:pointer-events-auto">
                    <a href="{{ route('reviews.edit', $review->id) }}"
                       class="bg-primary-400 text-white px-3 py-1 text-sm rounded hover:bg-blue-600 transition">Editar</a>
                    <form action="{{ route('reviews.destroy', $review->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="btn-delete bg-red-500 text-white px-3 py-1 text-sm rounded hover:bg-red-600 transition">
                            Excluir
                        </button>
                    </form>
                </div>
                @endif

            </div>
            @empty
            <p class="col-span-full text-center text-gray-500">Nenhuma avaliação encontrada 😢</p>
            @endforelse

        </div>
    </div>
</main>

<!-- FOOTER -->
<footer class="bg-primary-500 text-white mt-10">
    <div class="max-w-6xl mx-auto px-4 py-8 text-center text-sm text-primary-300">
        © 2026 GameReviews
    </div>
</footer>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script para confirmação de exclusão -->
<script>
document.querySelectorAll('.btn-delete').forEach(function(button) {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        const form = this.closest('form');

        Swal.fire({
            title: 'Tem certeza?',
            text: "Esta ação não pode ser desfeita!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#638ECB',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
</script>

@if(session('success'))
<script>
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'success',
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        background: '#eff6ff',
        color: '#1e40af',
        customClass: {
            popup: 'rounded-xl shadow-lg',
            title: 'text-sm font-semibold'
        },
        showClass: { popup: 'animate__animated animate__fadeInRight' },
        hideClass: { popup: 'animate__animated animate__fadeOutRight' }
    });
</script>
@endif

</body>
</html>