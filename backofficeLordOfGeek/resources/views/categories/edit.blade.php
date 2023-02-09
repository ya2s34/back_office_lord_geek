<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form>
                        <label for="txt">Titre</label>
                        <input id="txt" type="text" value="{{$categories->titre}}">
                     
                        <a href="#"><x-save_btn></x-save_btn></a>
                        <a href="#"><x-annule_btn></x-annule_btn></a>



                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>