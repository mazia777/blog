{{-- resources/views/posts/index.blade.php --}}
<x-app-layout>
    {{-- Header Breeze --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Liste des Posts
        </h2>
    </x-slot>

    <div class="py-6 max-w-5xl mx-auto">

        {{-- TITRE + BOUTON DE CRÉATION --}}
        <div class="flex items-center justify-between mb-6">

            <h2 class="text-3xl font-bold">Articles du blog</h2>

            <a href="{{ route('posts.create') }}"
                class="px-5 py-2.5 bg-blue-600 text-white font-semibold text-sm rounded-full">
            + Nouvel article
            </a>


        </div>

        {{-- LISTE DES POSTS --}}
        @forelse ($posts as $post)
            <div class="bg-white rounded-lg shadow-md p-5 mb-4 hover:shadow-lg transition-shadow">
                <h3 class="text-xl font-semibold text-blue-700">{{ $post->title }}</h3>
                <p class="text-gray-700 mt-2">{{ $post->content }}</p>
            </div>
        @empty
            <p class="text-red-600">Aucun article pour le moment.</p>
        @endforelse

    </div>
</x-app-layout>
