<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Modificando Produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('produtos.update',$produto->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <strong>Descrição do produto:</strong>
                        <input type="text" name="descricao" value="{{ $produto->descricao }}" placeholder="Descrição do produto" class="dark:bg-gray-800">
                        @error('descricao')
                        {{ $message }}
                        @enderror

                        <strong>Quantidade atual:</strong>
                        <input type="number" name="quantidade" value="{{ $produto->quantidade }}" placeholder="Quantidade atual" class="dark:bg-gray-800">
                        @error('quantidade')
                        {{ $message }}
                        @enderror

                        <strong>Preço de compra:</strong>
                        <input type="number" name="preco_compra" value="{{ $produto->preco_compra }}" placeholder="Preço de compra" class="dark:bg-gray-800">
                        @error('preco_compra')
                        {{ $message }}
                        @enderror

                        <strong>Preço de venda:</strong>
                        <input type="number" name="preco_venda" value="{{ $produto->preco_venda }}" placeholder="Preço de venda" class="dark:bg-gray-800">
                        @error('preco_venda')
                        {{ $message }}
                        @enderror

                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>