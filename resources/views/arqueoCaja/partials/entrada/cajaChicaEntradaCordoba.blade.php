<div class="grid grid-cols-1  gap-5">
    <!-- Total -->
    <div class="w-full bg-black p-5 rounded-lg text-white">
        <p id="total" class="text-2xl font-semibold">Total: C$ 00.00</p>
    </div>

    <p class=" text-2xl font-semibold">BILLETES</p>

    <div class=" p-5 rounded-lg text-white space-y-4">
        <!-- Fila superior con 7 columnas -->
        <div class="grid grid-cols-7 gap-4">
            <input type="text" placeholder="Input 1" data-value="500" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="text" placeholder="Input 2" data-value="200" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="text" placeholder="Input 3" data-value="100" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="text" placeholder="Input 4" data-value="50" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="text" placeholder="Input 5" data-value="20" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="text" placeholder="Input 6" data-value="10" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            <input type="text" placeholder="Input 7" data-value="5" class="denomination px-4 py-2 text-black dark:bg-slate-800 dark:text-white placeholder-gray-400 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>


    </div>



    @include('arqueoCaja.partials.entrada.inputCordoba')


</div>
