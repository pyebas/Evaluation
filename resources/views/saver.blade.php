<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Enregistrements multiples') }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
                    <h2>Hierarchies</h2>
                    <table>

                        <thead>
                            <tr>
                                <td>numero :</td>
                                <td>nom de fonction :</td>
                                <td>actions :</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fonctions as $key => $fonction)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $fonction->name }}</td>
                                    <td><a href="{{ route('edit.essentiels', ['elets' => 'Hierarchies', 'value' => $fonction]) }}">modifier</a></td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    <div>
                        <h2>Statuts</h2>
                        <table>
    
                            <thead>
                                <tr>
                                    <td>numero :</td>
                                    <td>nom de statut :</td>
                                    <td>action :</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contrats as $key => $contrat)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $contrat->name }}</td>
                                        <td><a href="{{ route('edit.essentiels', ['elets' => 'Statuts', 'value' => $contrat]) }}">Modifier</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
    
                        </table>
                    </div>

                    <div>
                        <h2>Noteur : </h2>
                        <table>

                            <thead>
                                <tr>
                                    <td>numero :</td>
                                    <td>nom de noteurs :</td>
                                    <td>action :</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contrats as $key => $contrat)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $contrat->name }}</td>
                                    <td><a href="{{ route('edit.essentiels', ['elets' => 'Noteurs', 'value' => $contrat]) }}">Modifier</a></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div>
                        <h2>Critères de notation</h2>
                        <table>

                            <thead>
                                <tr>
                                    <td>numero :</td>
                                    <td>nom de critère :</td>
                                    <td>valeur du critère :</td>
                                    <td>actions :</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($criteres as $key => $critere)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $critere->name }}</td>
                                        <td>{{ $critere->value }}</td>
                                        <td><a href="{{ route('edit.essentiels', ['elets' => 'Critere de notation', 'value' => $critere]) }}">Modifier</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <div>
                        <h2>Catégories de critère</h2>
                        <table>

                            <thead>
                                <tr>
                                    <td>numero :</td>
                                    <td>nom de categorie :</td>
                                    <td>valeur de categorie :</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $key => $categorie)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $categorie->name }}</td>
                                        <td>{{ $categorie->value }}</td>
                                        <td><a href="{{ route('edit.essentiels', ['elets' => 'Categorie de critère', 'value' => $categorie]) }}">Modifier</a></td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        
    </div>
</x-app-layout>