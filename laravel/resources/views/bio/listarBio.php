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

                <!-- Descrição -->
                <div>
                    <x-label for="descricao" :value="__('Descreva-se')" />

                    <textarea id="descricao" class="block mt-1 w-full" type="text" name="descricao" required autofocus/> </textarea>
                </div>
                
                <!-- Filme Favorito -->
                <div class="mt-4">
                    <x-label for="filme_favorito" :value="__('Qual o seu filme favorito?')" />

                    <x-input id="filme_favorito" class="block mt-1 w-full" type="text" name="filme_favorito" required />
                </div>
                
                <!-- Série Favorita -->
                <div class="mt-4">
                    <x-label for="serie_favorita" :value="__('Qual a sua série favorita?')" />

                    <x-input id="serie_favorita" class="block mt-1 w-full" type="text" name="serie_favorita" required />
                </div>
                
                <!-- Livro Favorito -->
                <div class="mt-4">
                    <x-label for="livro_favorito" :value="__('Qual a seu livro favorito?')" />

                    <textarea id="livro_favorito" class="block mt-1 w-full border-2" rows="10" type="text" name="livro_favorito" required></textarea>
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
