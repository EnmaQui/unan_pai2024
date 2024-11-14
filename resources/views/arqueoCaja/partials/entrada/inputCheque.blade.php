  <!-- Contenedor del cheque -->
  <div class="w-full max-w-lg p-6 bg-white border rounded-lg shadow-lg">
    <h2 class="text-lg font-bold text-gray-700 mb-4 text-center">Cheque Bancario</h2>

    <!-- Número de cheque -->
    <div class="flex justify-between mb-3">
      <label class="font-semibold text-gray-600">Número de Cheque:</label>
      <input type="text" placeholder="000123456" class="w-1/2 px-2 py-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <!-- Monto del cheque -->
    <div class="flex justify-between items-center mb-3">
      <label class="font-semibold text-gray-600">Monto:</label>
      <input type="text" placeholder="$0.00" class="w-1/2 px-2 py-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <!-- Nombre del portador -->
    <div class="flex flex-col mb-6">
      <label class="font-semibold text-gray-600">Nombre del Portador:</label>
      <input type="text" placeholder="Nombre completo" class="mt-1 px-2 py-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
    </div>

    <!-- Fecha y Firma -->
    <div class="flex justify-between mt-4">
      <div>
        <span class="text-gray-600 font-semibold">Fecha:</span>
        <input type="date" class="ml-2 px-2 py-1 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
      </div>
      <div>
        <span class="text-gray-600 font-semibold">Firma:</span>
        <div class="mt-1 w-32 h-10 border-b-2 border-gray-400"></div>
      </div>
    </div>
  </div>
