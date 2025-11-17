{{-- resources/views/posts/create.blade.php --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Créer un article
        </h2>
    </x-slot>

    <div class="py-6 max-w-md mx-auto">
        <form action="{{ route('posts.store') }}" method="POST"
              class="bg-white p-6 rounded-lg shadow-md">
            @csrf

            <div class="mb-4">
                <label for="title" class="block font-semibold mb-1">Titre</label>
                <input type="text" id="title" name="title"
                       class="w-full border rounded p-2"
                       required>
            </div>

            <div class="mb-4">
                <label for="content" class="block font-semibold mb-1">Contenu</label>
                <textarea id="content" name="content" rows="5"
                          class="w-full border rounded p-2"
                          required></textarea>
            </div>

            <div class="flex gap-2">
                <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                    Enregistrer
                </button>

                <a href="{{ route('posts.index') }}"
                   class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                    Annuler
                </a>
            </div>
        </form>
    </div>
</x-app-layout>
