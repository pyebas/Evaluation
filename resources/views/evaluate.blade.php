<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Evaluation de l'agent : {{ $agent->nom." ".$agent->prenom }}
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    {{-- <x-jet-welcome /> --}}
                    
                        @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}"> {{ Session::get('message') }} </p>
                        @endif
                        
                        <form action="{{ route('evaluations.evaluate') }}" method="post">
                            @csrf
                
                            @foreach ($data as $key => $value) 
                                {{ $data[$key]->name }} : <input type="text" name="{{ $data[$key]->name }}" id=""> <br>
                            @endforeach
                
                            <input type="submit" value="submit">
                        </form>
                    
                
                </div>
            </div>
        
    </div>
</x-app-layout>