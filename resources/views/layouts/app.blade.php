{{-- resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Mon Blog' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">

    {{-- HEADER --}}
    <header class="bg-white shadow-md">
        <div class="max-w-5xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-blue-600">Mon Blog</h1>

            <nav class="flex gap-4">
                <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-500">Accueil</a>
                <a href="{{ route('posts.create') }}" class="text-gray-700 hover:text-blue-500">Créer un post</a>
            </nav>
        </div>
    </header>

    {{-- CONTENU DE CHAQUE PAGE --}}
    <main class="max-w-5xl mx-auto px-4 py-8">
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer class="bg-white text-center py-4 mt-10 border-t">
        <p class="text-gray-600 text-sm">© {{ date('Y') }} - Mon Blog</p>
    </footer>

</body>
</html>
