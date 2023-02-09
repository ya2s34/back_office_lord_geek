<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                        {{ __('Liste des tags') }}
                    </h2>
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>Titre</th>
                            <th>Action</th>
                            <th> <a href="{{route('tags.create')}}"><x-cree_btn></x-creer_btn></a></th>

                        </thead>

                        <ul>
                            @foreach($tags as $tag)
                            <tr>
                                <td>{{$tag->id}}</td>
                                <td>{{$tag->titre}}</td>
                                <td>

                                    <a href="#"><x-supprimer_btn></x-supprimer_btn></a>


                                    <a href="{{route('tags.edit',$tag->id)}}"><x-modifier_btn></x-modifier_btn></a>


                                    <a href="{{route('tags.show',$tag->id)}}"><x-voir_btn></x-voir_btn></a>

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