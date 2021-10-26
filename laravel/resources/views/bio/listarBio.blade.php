<x-app-layout>
    <x-slot name="header">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        
        <div class="flex">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-2">
                    {{ __('Bio') }}
                </h2>
            </div>

        </div> 
    </x-slot>

    <x-guest-layout>
        <x-auth-card>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
            @endif
            
            <x-slot name="logo">
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{Request::url()}}/atualizar/salvar" enctype="multipart/form-data">
                @csrf
                
                <!-- ID -->
                <div class="mt-4">
                    <x-label for="id" :value="__('Id')" />

                    <x-input id="id" class="block mt-1 w-full" value="{{$bioDoUser->id}}" type="text" name="id" required readonly/>
                </div>
                
                <!-- ID -->
                <div class="mt-4">
                    <x-label for="id_user" :value="__('Id User')" />

                    <x-input id="id_user" class="block mt-1 w-full" value="{{$bioDoUser->id_user}}" type="text" name="id_user" required readonly/>
                </div>

                <!-- Descrição -->
                <div class="mt-4">
                    <x-label for="descricao" :value="__('Descreva-se')" />

                    <textarea id="descricao" style="border:solid 1px" class="block mt-1 w-full" type="text" rows="10" name="descricao" required> {{$bioDoUser->descricao}} </textarea>
                </div>
                
                <!-- Filme Favorito -->
                <div class="mt-4">
                    <x-label for="filme_favorito" :value="__('Qual o seu filme favorito?')" />

                    <x-input id="filme_favorito" class="block mt-1 w-full" value="{{$bioDoUser->filme_favorito}}" type="text" name="filme_favorito" required />
                </div>
                
                <!-- Série Favorita -->
                <div class="mt-4">
                    <x-label for="serie_favorita" :value="__('Qual a sua série favorita?')" />

                    <x-input id="serie_favorita" class="block mt-1 w-full" value="{{$bioDoUser->serie_favorita}}" type="text" name="serie_favorita" required />
                </div>
                
                <!-- Livro Favorito -->
                <div class="mt-4">
                    <x-label for="livro_favorito" :value="__('Qual a seu livro favorito?')" />

                    <x-input id="livro_favorito" class="block mt-1 w-full border-2" value="{{$bioDoUser->livro_favorito}}" type="text" name="livro_favorito" required></x-input>
                </div>

                <div class="flex items-center justify-center mt-4">
                    <button class="ml-3 button button1"> 
                        {{ __('Atualizar Bio') }}
                    </button>
                </div>
            </form>
        </x-auth-card>
    </x-guest-layout>
    
</x-app-layout>
