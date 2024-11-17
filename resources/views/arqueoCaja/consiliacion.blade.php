@extends('layouts.arqueo')

@section('contenido')

<div class="container mx-auto my-8 p-6 bg-white shadow rounded-lg">
  <!-- Encabezado -->
  <div class="mb-6">
    <h1 class="text-2xl font-bold text-gray-700">Conciliación Bancaria</h1>
    <p class="text-gray-500">Fecha: <span id="currentDate"></span></p>
  </div>


    <!-- Banco -->
    <div class="bg-gray-100 p-4 rounded-lg mb-6">
      <h2 class="text-xl font-semibold text-gray-600 mb-4">Banco</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 border">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">Descripción</th>
              <th class="px-4 py-2">Monto</th>
              <th class="px-4 py-2">Estado</th>
              <th class="px-4 py-2">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Ejemplo -->
            <tr class="bg-white border-b">
              <td class="px-4 py-2">2024-11-12</td>
              <td class="px-4 py-2">Depósito de cliente</td>
              <td class="px-4 py-2 text-green-500">+5,000.00</td>
              <td class="px-4 py-2">Pendiente</td>
              <td class="px-4 py-2">
                <button onclick="openModal('bank', this)" class="text-blue-500 hover:underline">Conciliar</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>





  <!-- Secciones -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">




    <!-- Caja General -->
    <div>
      <h2 class="text-xl font-semibold text-gray-600 mb-4">Caja General</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 border">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">Descripción</th>
              <th class="px-4 py-2">Monto</th>
              <th class="px-4 py-2">Estado</th>
              <th class="px-4 py-2">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Ejemplo -->
            <tr class="bg-white border-b">
              <td class="px-4 py-2">2024-11-10</td>
              <td class="px-4 py-2">Transferencia a Caja Chica</td>
              <td class="px-4 py-2 text-red-500">-1,000.00</td>
              <td class="px-4 py-2">Pendiente</td>
              <td class="px-4 py-2">
                <button onclick="openModal('general', this)" class="text-blue-500 hover:underline">Conciliar</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Caja Chica -->
    <div>
      <h2 class="text-xl font-semibold text-gray-600 mb-4">Caja Chica</h2>
      <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500 border">
          <thead class="text-xs text-gray-700 uppercase bg-gray-100">
            <tr>
              <th class="px-4 py-2">Fecha</th>
              <th class="px-4 py-2">Descripción</th>
              <th class="px-4 py-2">Monto</th>
              <th class="px-4 py-2">Estado</th>
              <th class="px-4 py-2">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Ejemplo -->
            <tr class="bg-white border-b">
              <td class="px-4 py-2">2024-11-11</td>
              <td class="px-4 py-2">Pago material de oficina</td>
              <td class="px-4 py-2 text-red-500">-200.00</td>
              <td class="px-4 py-2">Pendiente</td>
              <td class="px-4 py-2">
                <button onclick="openModal('pettyCash', this)" class="text-blue-500 hover:underline">Conciliar</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div id="conciliationModal" class="hidden fixed inset-0 z-50 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white rounded-lg shadow-lg w-1/3 p-6">
      <h2 id="modalTitle" class="text-xl font-bold text-gray-700 mb-4">Conciliar Transacción</h2>
      <form id="conciliationForm">
        <div class="mb-4">
          <label for="conciliationDate" class="block text-sm font-medium text-gray-700">Fecha</label>
          <input type="date" id="conciliationDate" name="date" class="w-full px-4 py-2 border rounded-lg" readonly>
        </div>
        <div class="mb-4">
          <label for="conciliationDescription" class="block text-sm font-medium text-gray-700">Descripción</label>
          <input type="text" id="conciliationDescription" name="description" class="w-full px-4 py-2 border rounded-lg" readonly>
        </div>
        <div class="mb-4">
          <label for="conciliationAmount" class="block text-sm font-medium text-gray-700">Monto</label>
          <input type="number" id="conciliationAmount" name="amount" class="w-full px-4 py-2 border rounded-lg" readonly>
        </div>
        <div class="mb-4">
          <label for="conciliationStatus" class="block text-sm font-medium text-gray-700">Estado</label>
          <select id="conciliationStatus" name="status" class="w-full px-4 py-2 border rounded-lg">
            <option value="Pendiente">Pendiente</option>
            <option value="Conciliado">Conciliado</option>
          </select>
        </div>
        <div class="flex justify-end space-x-4">
          <button type="button" onclick="closeModal()" class="px-4 py-2 bg-red-600 text-white rounded-lg">Cancelar</button>
          <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Sección de Resumen -->
<div class="mt-8 p-6 bg-gray-100 rounded-lg shadow-md">
  <h2 class="text-xl font-semibold text-gray-700 mb-4">Resumen de Conciliación</h2>
  
  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Banco -->
    <div class="bg-white p-4 rounded-lg border">
      <h3 class="text-lg font-semibold text-gray-600 mb-2">Saldo Banco</h3>
      <p class="text-xl font-bold text-green-600" id="bankBalance">C$ 10,000.00</p>
    </div>
    
    <!-- Empresa -->
    <div class="bg-white p-4 rounded-lg border">
      <h3 class="text-lg font-semibold text-gray-600 mb-2">Saldo Empresa</h3>
      <p class="text-xl font-bold text-green-600" id="companyBalance">C$ 10,000.00</p>
    </div>
  </div>

  <!-- Estado de la Conciliación -->
  <div class="mt-6 p-4 bg-white rounded-lg border">
    <h3 class="text-lg font-semibold text-gray-600 mb-2">Estado de Conciliación</h3>
    <p id="conciliationStatus" class="text-xl font-semibold text-red-600">Las cuentas no coinciden.</p>
    <p id="conciliationMessage" class="text-sm text-gray-500">Revise las transacciones pendientes y conciliadas para verificar que las cuentas sean correctas.</p>
  </div>
</div>

<script>
  // Abrir modal y cargar datos
  function openModal(type, button) {
    const row = button.closest('tr');
    const cells = row.querySelectorAll('td');
    document.getElementById('conciliationDate').value = cells[0].innerText;
    document.getElementById('conciliationDescription').value = cells[1].innerText;
    document.getElementById('conciliationAmount').value = cells[2].innerText.replace(/[^0-9.-]/g, '');
    document.getElementById('conciliationModal').classList.remove('hidden');
  }

  // Cerrar modal
  function closeModal() {
    document.getElementById('conciliationModal').classList.add('hidden');
    document.getElementById('conciliationForm').reset();
  }

  // Guardar cambios
  document.getElementById('conciliationForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const status = document.getElementById('conciliationStatus').value;

    // Aquí actualizarías los datos en la base de datos y la interfaz
    closeModal();
    alert('Transacción conciliada con éxito.');
  });
</script>
<script>
  // Lógica para actualizar el resumen de conciliación
  const bankBalance = 10000;  // Este valor debe ser obtenido de los datos
  const companyBalance = 10000;  // Este valor debe ser obtenido de los datos

  // Mostrar el saldo en la interfaz
  document.getElementById('bankBalance').innerText = `C$ ${bankBalance.toFixed(2)}`;
  document.getElementById('companyBalance').innerText = `C$ ${companyBalance.toFixed(2)}`;

  // Verificar si las cuentas coinciden
  if (bankBalance === companyBalance) {
    document.getElementById('conciliationStatus').innerText = 'Las cuentas coinciden.';
    document.getElementById('conciliationStatus').classList.remove('text-red-600');
    document.getElementById('conciliationStatus').classList.add('text-green-600');
    document.getElementById('conciliationMessage').innerText = 'Las cuentas bancarias y de la empresa están conciliadas correctamente.';
  }
</script>
@endsection
