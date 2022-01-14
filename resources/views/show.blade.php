<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Details de l'agent
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
    
                <table class="table-auto border-collapse">
                    <tr>
                        <td>Matricule : </td>
                        <td>{{ $data->matricule }}</td>
                    </tr>
                    <tr>
                        <td>Nom : </td>
                        <td>{{ $data->nom }}</td>
                    </tr>
                    <tr>
                        <td>Prenom : </td>
                        <td>{{ $data->prenom }}</td>
                    </tr>
                    <tr>
                        <td> Sexe : </td>
                        <td>{{ $data->sexe == 0 ? "Feminin":"Masculin" }}</td>
                    </tr>
                    <tr>
                        <td>Date de naissance : </td>
                        <td>{{ $data->dtn }}</td>
                    </tr>
                    <tr>
                        <td>Lieu : </td>
                        <td>{{ $data->ln }}</td>
                    </tr>
                    <tr>
                        <td>Action : </td>
                        <td><a href="{{ route('evaluations.evalue', ['id' => $data->id]) }}">Evaluer</a></td>
                    </tr>
                    
                </table>
                
                </div>
            </div>
        
    </div>
</x-app-layout>

<div>
    
    

</div>
