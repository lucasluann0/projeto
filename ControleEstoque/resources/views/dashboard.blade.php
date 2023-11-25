<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produtos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('produtos.create') }}"><button>Novo produto</button></a>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="border px-6 py-4">Operações</th>
                                <th class="border px-6 py-4">Descrição</th>
                                <th class="border px-6 py-4">Quantidade</th>
                                <th class="border px-6 py-4">Preço de compra</th>
                                <th class="border px-6 py-4">Preço de venda</th>
                                <th class="border px-6 py-4">Lucro</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produtos as $produto)
                            <tr>
                                <td class="border px-6 py-4">
                                    <form action="{{ route('produtos.destroy',$produto->id) }}" method="Post">
                                        <a href="{{ route('produtos.edit',$produto->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" >Delete</button>
                                    </form>
                                </td>
                                <td class="border px-6 py-4">{{ $produto->descricao }}</td>
                                <td class="border px-6 py-4">{{ $produto->quantidade }}</td>
                                <td class="border px-6 py-4">{{ $produto->preco_compra}}</td>
                                <td class="border px-6 py-4">{{ $produto->preco_venda }}</td>
                                <td class="border px-6 py-4">{{round($produto->lucro(), 1)}}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>