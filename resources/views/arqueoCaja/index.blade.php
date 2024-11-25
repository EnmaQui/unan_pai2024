@extends('layouts.arqueo')

@section('contenido')
<div class="grid grid-cols-2 gap-6 p-4 bg-gray-100 dark:bg-gray-800 rounded-lg shadow-lg w-full">
    <!-- Sección Banco -->
    <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-700">
        <p class="text-3xl font-semibold text-blue-600 dark:text-blue-400 mb-4">Banco</p>
        
        <div class="grid grid-cols-2 gap-4">
            <div class="bg-blue-50 dark:bg-blue-900 p-4 rounded-lg shadow-sm border border-blue-200 dark:border-blue-700">
                <p class="text-xl font-semibold text-blue-700 dark:text-blue-300">Cuenta 1</p>
                <p class="text-gray-700 dark:text-gray-300">
                    Saldo: <span class="font-semibold">C$ 0.00</span>
                </p>
            </div>
            
            <div class="bg-blue-50 dark:bg-blue-900 p-4 rounded-lg shadow-sm border border-blue-200 dark:border-blue-700">
                <p class="text-xl font-semibold text-blue-700 dark:text-blue-300">Cuenta 2</p>
                <p class="text-gray-700 dark:text-gray-300">
                    Saldo: <span class="font-semibold">C$ 0.00</span>
                </p>
            </div>
        </div>
    </div>

    <!-- Sección Caja General -->
    <div class="bg-white dark:bg-gray-900 p-6 rounded-lg shadow-md border border-gray-200 dark:border-gray-700">
        <p class="text-3xl font-semibold text-green-600 dark:text-green-400 mb-4">Caja General</p>
        <p class="text-gray-700 dark:text-gray-300 text-xl">
            Saldo: <span class="font-semibold">C$ 0.00</span>
        </p>
    </div>
</div>



@include('arqueoCaja.partials.mostrar.tabs')


<script>
    // Variables para manejar inputs y total
    const inputs = document.querySelectorAll('.denomination');
    const totalDisplay = document.getElementById('total');

    // Función para actualizar el total
    const updateTotal = () => {
        let total = 0;
        inputs.forEach(input => {
            const value = parseInt(input.value) || 0;
            const denomination = parseInt(input.dataset.value);
            console.log(denomination);
            total += value * denomination;
        });
        totalDisplay.textContent = `Total: C$ ${total.toFixed(2)}`;
    };

    // Eventos en inputs para recalcular el total
    inputs.forEach(input => {
        input.addEventListener('input', updateTotal);
    });

    // Eventos para incrementar y decrementar
    document.querySelectorAll('.increment').forEach((button, index) => {
        button.addEventListener('click', () => {
            const targetInput = inputs[index];
            targetInput.value = parseInt(targetInput.value || 0) + 1;
            updateTotal();
        });
    });

    document.querySelectorAll('.decrement').forEach((button, index) => {
        button.addEventListener('click', () => {
            const targetInput = inputs[index];
            targetInput.value = Math.max(0, parseInt(targetInput.value || 0) - 1);
            updateTotal();
        });
    });
</script>

@endsection