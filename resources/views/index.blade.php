<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
                    <table class="table-auto border-collapse">
                        <th>
                            <tr> 
                                <td>matricule</td>
                                <td>nom</td>
                                <td>prenom</td>
                                <td>sexe</td>
                                <td>date de naissance</td>
                                <td>lieu de naissance</td>
                                <td>actions</td>
                            </tr>
                        </th>
                        <tbody>
                                
                                @foreach ($agents as $agent) 
                                    <tr>
                                        <td>{{ $agent->matricule }}</td>
                                        <td>{{ $agent->nom }}</td>
                                        <td>{{$agent->prenom}}</td>
                                        <td>{{$agent->sexe == 0 ?"Feminin":"Masculin"}}</td>
                                        <td>{{$agent->dtn}}</td>
                                        <td>{{$agent->ln}}</td>
                                        <td><a href = "{{ route('evaluations.show', ['id'=> $agent->id]) }}" > voir </a></td>
                                    </tr>
                                @endforeach
                            
                        </tbody>
                    </table>
                
                </div>
            </div>
        
    </div>
</x-app-layout>