<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($produto->descricao) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2>Entradas</h2>
                    <table class="w-full text-center table-auto border">
                        <thead>
                            <tr class="font-bold text-lg border">
                                <th>Operações</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                                <th>Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produto->entradas as $entrada)
                            <tr class="border">
                                <td class="flex">
                                    <form action="{{ route('entradas.destroy',$entrada->id) }}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg></button>
                                    </form>
                                </td>
                                <td>{{ $entrada->quantidade }}</td>
                                <td>{{ $entrada->created_at}}</td>
                                <td>{{ $entrada->usuario->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <h2>Saidas</h2>
                    <table class="w-full text-center table-auto border">
                        <thead>
                            <tr class="font-bold text-lg border">
                                <th>Operações</th>
                                <th>Quantidade</th>
                                <th>Data</th>
                                <th>Usuario</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produto->saidas as $saida)
                            <tr class="border">
                                <td class="flex">
                                    <form action="{{ route('saidas.destroy',$saida->id) }}" method="Post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg></button>
                                    </form>
                                </td>
                                <td>{{ $saida->quantidade }}</td>
                                <td>{{ $saida->created_at}}</td>
                                <td>{{ $saida->usuario->name }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>