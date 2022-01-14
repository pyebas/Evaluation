<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Modification de : {{ $elets }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
    
                    <table>
                        <thead>
                            <tr>
                                <td>nom </td>
                                <td>valeur </td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$value->name}}</td>
                                <td>{{ $value->value? $value->value:'Non définie' }}</td>
                            </tr>
                        </tbody>
                    </table>
                
                </div>
            </div>
        
    </div>
</x-app-layout>

<div>
    
    

</div>
