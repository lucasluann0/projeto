<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nova Saida') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('saidas.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <strong>Produto:</strong>
                        <input type="number" name="idProduto" placeholder="Produto" class="dark:bg-gray-800">
                        @error('idProduto')
                        {{ $message }}
                        @enderror

                        <strong>Quantidade entrando:</strong>
                        <input type="number" name="quantidade" placeholder="Quantidade entrando" class="dark:bg-gray-800">
                        @error('quantidade')
                        {{ $message }}
                        @enderror

                        <input type="hidden" name="idUsuario" value="{{ Auth::user()->id }}">

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>