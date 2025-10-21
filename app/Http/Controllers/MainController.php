<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo 'Apresentar Pagina inicial';
    }

    public function generateExercises(Request $request)
    {
        echo 'Gerar Exercícios';
    }

    public function printExercises()
    {
        echo 'Imprimir Exercícios';
    }

    public function exportExercises()
    {
        echo 'Exportar Exercícios';
    }
}
