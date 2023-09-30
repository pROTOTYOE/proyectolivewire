<x-app-layout>

    <div class="text-center py-4">
        <h1 class="font-semibold text-3xl">Lugares</h1>
    </div>

    <div class="text-end px-4">
        <a href="{{route('lugares.create')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Agregar</a>
    </div>

    <div class="p-4">
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Departamento
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Municipio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Aldea
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Distancia
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">

                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($lugares as $lugar)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$lugar->id}}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$lugar->departamento}}
                        </th>
                        <td class="px-6 py-4">
                            {{$lugar->municipio}}
                        </td>
                        <td class="px-6 py-4">
                            {{$lugar->aldea}}
                        </td>
                        <td class="px-6 py-4">
                            {{$lugar->ktm_aprox}}
                        </td>
                        <td class="px-6 py-4">
                            @if($lugar->estado == 1)
                                Activo
                            @else
                                Inactivo
                            @endif
                        </td>
                        <td class="px-6 py-4">
                            <a type="button" href="{{route('lugares.edit', ['id'=> $lugar->id])}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Editar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

{{--        {{$lugares}}--}}
    </div>

</x-app-layout>
