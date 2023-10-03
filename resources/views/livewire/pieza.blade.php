<div>
<div class="text-center p-4">
        <h1 class="font-semibold text-3xl">Piezas</h1>
    </div>

    <div class="text-end">
        <button wire:click="$set('openModal', true)" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear Pieza</button>
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
                        Vehiculo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fecha Instalacion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado-Pieza
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado-Compra
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
                </thead>
                <tbody>

        @foreach($piezas as $pieza)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4">
                            {{$pieza->id}}
                        </td>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap dark:text-white">
                            {{$pieza->id_vehiculos}}
                        </th>
                        <td class="px-6 py-4">
                            {{$pieza->nombre}}
                        </td>
                        <td class="px-6 py-4">
                            {{$pieza->fechainstalacion}}
                        </td>
                        <td class="px-6 py-4">
                            {{$pieza->estadopieza}}
                        </td>
                        <td class="px-6 py-4">
                            {{$pieza->estadocompra}}
                        </td>
                        <td class="px-6 py-4">
                            {{$pieza->estado}}
                        </td>
                        <td class="px-6 py-4">
                            <x-button wire:click="mostrarPieza({{$pieza->id}})">Editar</x-button>
                            <x-danger-button wire:click="eliminarPieza({{$pieza->id}})">Eliminar</x-danger-button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>

    <!-- Main modal -->
    <x-dialog-modal wire:model="openModal">
        <x-slot name="title">
            Crear Pieza
        </x-slot>
        <x-slot name="content">
            <div class="py-4">
                <label>Vehiculo</label>
                <x-input wire:model="id_vehiculos"></x-input>
                @error('id_vehiculos') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Nombre-Pieza</label>
                <x-input wire:model="nombre"></x-input>
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label for="fechainstalacion">Fecha-Instalacion</label>
                <x-input type="date" id="fecha" wire:model="fechainstalacion"></x-input>
                @error('fechainstalacion') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Estado-Compra</label>
                <x-input wire:model="estadocompra"></x-input>
                @error('estadocompra') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Estado-Pieza</label>
                <x-input wire:model="estadopieza"></x-input>
                @error('estadopieza') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Estado</label>
                <x-input wire:model="estado"></x-input>
                @error('estado') <span class="error">{{ $message }}</span> @enderror
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('openModal', false)">Cancelar</x-secondary-button>
            <x-button wire:click="guardarPieza">Guardar</x-button>
        </x-slot>
    </x-dialog-modal>


    <x-dialog-modal wire:model="openModalEdit">
        <x-slot name="title">
            Editar Pieza
        </x-slot>
        <x-slot name="content">
            <div class="py-4">
                <label>Vehiculo</label>
                <x-input wire:model="id_vehiculos"></x-input>
                @error('id_vehiculos') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>nombre</label>
                <x-input wire:model="nombre"></x-input>
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>fecha-instalacion</label>
                <x-input wire:model="fechainstalacion"></x-input>
                @error('fechainstalacion') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Estado-compra</label>
                <x-input wire:model="estadocompra"></x-input>
                @error('estadocompra') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Estado-Pieza</label>
                <x-input wire:model="estadopieza"></x-input>
                @error('estadopieza') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="py-4">
                <label>Estado</label>
                <x-input wire:model="estado"></x-input>
                @error('estado') <span class="error">{{ $message }}</span> @enderror
            </div>

        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('openModalEdit', false)">Cancelar</x-secondary-button>
            <x-button wire:click="updatePieza">Guardar</x-button>
        </x-slot>

    </x-dialog-modal>
</div>

  




