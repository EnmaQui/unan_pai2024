<div class="grid grid-cols-1 gap-5">
    <!-- Contenedor total -->
    <div class="w-full bg-slate-600 p-5 rounded-lg text-white dark:bg-slate-800 dark:text-gray-200">
        <p class="text-2xl font-semibold">Total: $ 00.00</p>
    </div>

    <!-- Etiqueta Billetes -->
    <p class="text-2xl font-semibold text-gray-900 dark:text-gray-200">BILLETES</p>

    <!-- Contenedor de entradas -->
    <div class="p-5 rounded-lg text-white space-y-4 dark:bg-slate-700">
        <!-- Fila superior con 7 columnas -->
        <div class="grid grid-cols-7 gap-4">
            <input type="text" placeholder="Input 1" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
            <input type="text" placeholder="Input 2" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
            <input type="text" placeholder="Input 3" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
            <input type="text" placeholder="Input 4" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
            <input type="text" placeholder="Input 5" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
            <input type="text" placeholder="Input 6" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
            <input type="text" placeholder="Input 7" class="px-4 py-2 text-white bg-gray-600 placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-gray-200 dark:placeholder-gray-500 dark:focus:ring-blue-400" />
        </div>
    </div>

    <!-- Inclusión parcial -->
    @include('arqueoCaja.partials.entrada.inputDolares')
</div>
