@extends('layouts.principal')

@section('contenido')
<div class="min-h-screen bg-gray-50 dark:bg-slate-950 dark:text-white flex flex-col justify-center py-12 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900 dark:text-white">
            Editar Empresa
        </h2>
    </div>

    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="bg-white dark:bg-slate-900 dark:text-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
            <!-- Muestra los errores de validación, si los hay -->
            @if ($errors->any())
                <div class="alert alert-danger mb-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulario para editar la empresa -->
            <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-6">
                    <label for="nombre" class="block text-sm font-medium leading-5 dark:text-white text-gray-700">Nombre</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="nombre" name="nombre" placeholder="Nombre de la Empresa" type="text" value="{{ old('nombre', $empresa->nombre) }}" required
                            class="appearance-none dark:bg-slate-800 dark:text-white block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="logo" class="block text-sm font-medium leading-5 dark:text-white text-gray-700">Logo</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <button type="button" id="select-logo-button" class="inline-flex items-center dark:bg-slate-800 dark:text-white dark:hover:bg-slate-700 px-3 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 transition duration-150 ease-in-out">
                            Seleccionar Logo
                        </button>
                        <input type="hidden" id="selected-logo" name="logo" value="{{ old('logo', $empresa->logo) }}">
                        <div id="logo-preview" class="mt-2">
                            @if (old('logo', $empresa->logo))
                                <img src="{{ asset('storage/' . old('logo', $empresa->logo)) }}" alt="Logo Seleccionado" class="w-20 h-20 object-contain rounded-md border border-gray-300">
                            @else
                                <p class="text-gray-500">No se ha seleccionado un logo</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="mb-6">
                    <label for="rubro" class="block text-sm font-medium leading-5 dark:text-white text-gray-700">Rubro</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="rubro" name="rubro" placeholder="Rubro de la Empresa" type="text" value="{{ old('rubro', $empresa->rubro) }}" required
                            class=" dark:bg-slate-800 dark:text-white appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="direccion" class="block text-sm font-medium leading-5 dark:text-white text-gray-700">Dirección</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="direccion" name="direccion" placeholder="Dirección de la Empresa" type="text" value="{{ old('direccion', $empresa->direccion) }}" required
                            class=" dark:bg-slate-800 dark:text-white appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="telefono" class="block text-sm font-medium leading-5 dark:text-white -- text-gray-700">Teléfono</label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input id="telefono" name="telefono" placeholder="Teléfono de la Empresa" type="text" value="{{ old('telefono', $empresa->telefono) }}" required
                            class=" dark:bg-slate-800 dark:text-white appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>

                <div class="mb-6">
                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                        Actualizar Empresa
                    </button>
                </div>
            </form>
        </div>
    </div>

<!-- Modal para selección de logos -->
<div id="logo-modal" class="fixed inset-0 bg-black bg-opacity-50 transition-opacity hidden">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white dark:bg-slate-800 dark:text-white rounded-lg shadow-lg p-4 max-w-sm w-full max-h-96 overflow-y-auto relative">
            <!-- Botón de cerrado arriba -->
            <button type="button" id="close-modal-top" class="absolute top-2 right-2 text-gray-400 hover:text-gray-600 dark:hover:text-gray-300 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Selecciona un Logo</h3>
            <div class="mt-3 grid grid-cols-3 gap-3">
                <!-- Aquí se muestran las imágenes predefinidas -->
                @foreach ($logos as $logo)
                    <button type="button" data-logo="{{ $logo['path'] }}" class="logo-option">
                        <img src="{{ $logo['url'] }}" alt="Logo" class="w-full h-24 object-contain rounded-md border p-3 border-gray-300">
                    </button>
                @endforeach
            </div>
            <div class="mt-3 flex justify-end">
                <button type="button" id="close-modal" class="px-3 py-1 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>


</div>

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const openModalButton = document.getElementById('select-logo-button');
        const closeModalButton = document.getElementById('close-modal');
        const closeTopButton = document.getElementById('close-modal-top'); // Botón de cierre superior
        const logoModal = document.getElementById('logo-modal');
        const selectedLogoInput = document.getElementById('selected-logo');
        const logoPreview = document.getElementById('logo-preview');
        const logoOptions = document.querySelectorAll('.logo-option');

        // Abre el modal
        openModalButton.addEventListener('click', function() {
            logoModal.classList.remove('hidden');
        });

        // Cierra el modal con el botón inferior
        closeModalButton.addEventListener('click', function() {
            logoModal.classList.add('hidden');
        });

        // Cierra el modal con el botón superior
        closeTopButton.addEventListener('click', function() {
            logoModal.classList.add('hidden');
        });

        // Selecciona un logo y actualiza la vista previa
        logoOptions.forEach(function(button) {
            button.addEventListener('click', function() {
                const logoPath = this.getAttribute('data-logo');
                selectedLogoInput.value = logoPath;
                
                // Actualiza la vista previa del logo
                const logoImage = document.createElement('img');
                logoImage.src = '{{ asset('storage') }}/' + logoPath;
                logoImage.alt = 'Logo Seleccionado';
                logoImage.className = 'w-20 h-20 object-cover rounded-md border border-gray-300';
                
                // Reemplaza el contenido de la vista previa del logo
                logoPreview.innerHTML = '';
                logoPreview.appendChild(logoImage);

                logoModal.classList.add('hidden');
            });
        });
    });
</script>

@endsection
@endsection
