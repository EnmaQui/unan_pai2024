<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class ConsiliacionController extends Controller
{
    
    public function index($empresa_id)
    {
        // Buscar la empresa usando el parámetro de la ruta
        $empresa = Empresa::findOrFail($empresa_id); // Usar findOrFail para manejar errores si no se encuentra

        // Retornar la vista con la empresa
        return view('arqueoCaja.consiliacion', compact('empresa'));
    }
}
