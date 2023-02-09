<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>{{__('Détails d\'une catégorie')}}</h2>
                    <div class="overflow-hidden
shadow-sm
rounded-lg
bg-indigo-500
hover:bg-cyan-600/50">

                        <div class="p-5
text-white
text-center
md:text-left">
                            Titre : {{$categories->titre}}
                        </div>
                    </div>
                    <a href="{{route('categories.show',$categories->id)}}"><x-supprimer_btn></x-supprimer_btn></a>
                    <a href="{{route('categories.edit',$categories->id)}}"><x-modifier_btn></x-modifier_btn></a>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>