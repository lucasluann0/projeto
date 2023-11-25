<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Entradas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <a href="{{ route('entradas.create') }}"><button>Nova entrada</button></a>
                    <table class="w-full whitespace-no-wrapw-full whitespace-no-wrap">
                        <thead>
                            <tr class="text-center font-bold">
                                <th class="border px-6 py-4">Operações</th>
                                <th class="border px-6 py-4">Produto</th>
                                <th class="border px-6 py-4">Quantidade</th>
                                <th class="border px-6 py-4">Data</th>
                                <th class="border px-6 py-4">Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($entradas as $entrada)
                            <tr>
                                <td class="border px-6 py-4">
                                    <form action="{{ route('entradas.destroy',$entrada->id) }}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" >Delete</button>
                                    </form>
                                </td>
                                <td class="border px-6 py-4">{{ $entrada->idProduto }}</td>
                                <td class="border px-6 py-4">{{ $entrada->quantidade }}</td>
                                <td class="border px-6 py-4">{{ $entrada->created_at }}</td>
                                <td class="border px-6 py-4">{{ $entrada->idUsuario}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>