<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Liste des catégories') }}
                    </h2>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Action</th>
                            <th> <a href="{{route('categories.create')}}"><x-cree_btn></x-creer_btn></a></th>

                        </thead>

                        <ul>
                            @foreach($categories as $cate)
                            <tr>
                                <td>{{$cate->id}}</td>
                                <td>{{$cate->titre}}</td>
                                <td>

                                    <a href="#"><x-supprimer_btn></x-supprimer_btn></a>


                                    <a href="{{route('categories.edit',$cate->id)}}"><x-modifier_btn></x-modifier_btn></a>


                                    <a href="{{route('categories.show',$cate->id)}}"><x-voir_btn></x-voir_btn></a>

                                </td>
                            </tr>



                            @endforeach
                    </table>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>