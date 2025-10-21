<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Show the home view.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function home()
    {
        return view('home');
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
