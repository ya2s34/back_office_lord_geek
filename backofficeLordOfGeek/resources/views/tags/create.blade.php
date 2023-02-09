<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form>
                        <h1>Crée un tag</h1>

                        <input type="text">
                        <a href="{{route('tags.create')}}"><x-cree_btn></x-cree_btn></a>
                        <button>annuler</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>