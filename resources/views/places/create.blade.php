<x-app-layout>

    <div class="text-center py-4">
        <h1 class="font-semibold text-3xl">Crear Lugar</h1>
    </div>

    <div class="text-end">
        <a href="{{route('lugares.index')}}" type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Cancelar</a>
    </div>

    <div class="p-4">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <form action="{{route('lugares.store')}}" method="post" class="p-4">
        @csrf
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label for="departamento" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Departamento</label>
                <input type="text" id="departamento" name="departamento" class="bg-gray-50 border border-white-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre del departamento">
            </div>
            <div>
                <label for="municipio" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Municipio</label>
                <input type="text" id="municipio" name="municipio" class="bg-gray-50 border border-white-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre del municipio">
            </div>
            <div>
                <label for="aldea" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Aldea</label>
                <input type="text" id="aldea" name="aldea" class="bg-gray-50 border border-white-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese el nombre de la aldea">
            </div>
            <div>
                <label for="ktm_aprox" class="block mb-2 text-sm font-medium text-white-900 dark:text-black">Kilometro</label>
                <input type="text" id="ktm_aprox" name="ktm_aprox" class="bg-gray-50 border border-white-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ingrese la distancia en kilomentro">
            </div>
        </div>
        <div class="text-end py-4">
            <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Crear Lugar</button>
        </div>
    </form>

</x-app-layout>
