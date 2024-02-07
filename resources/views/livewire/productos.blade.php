<div>
    <div class="max-w-7xl mx-auto sm:px6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">

            <x-button wire:click="create()" class="px-4 my-3"> Crear</x-button>

            <x-dialog-modal wire:model=productosCreate.open>
                <x-slot name='title'>
                    Crear Producto
                </x-slot>
                <x-slot name='content'>
                    <form  wire:submit="store">
                        <div class="w-full">
                            <x-label>name</x-label>
                            <x-input wire:model='productosCreate.name' />
                        </div>
                        <div class="w-full">
                            <x-label>Cantidad</x-label>
                            <x-input wire:model='productosCreate.cantidad' />
                        </div>
                        <div class="mt-4">
                            <x-danger-button  wire:click="$toggle('productosCreate.open')"> Cancelar</x-danger-button>

                            <x-button type="subtmit"> Enviar</x-button>
                        </div>
                    </form>
                </x-slot>
                <x-slot name='footer'>
                    Crear Producto
                </x-slot>


            </x-dialog-modal>
            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="">ID</th>
                        <th class="px-4 py-2"> DESCRIPCION</th>
                        <th>Cantidad</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td class="border px-4 py-2">{{ $producto->id }}</td>
                            <td class="border px-4 py-2">{{ $producto->name }}</td>
                            <th class="border px-4 py-2"> {{ $producto->cantidad }} </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
