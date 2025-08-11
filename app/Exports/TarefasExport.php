<?php

namespace App\Exports;

use App\Models\Tarefa;
use Maatwebsite\Excel\Concerns\FromCollection;

class TarefasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //return Tarefa::all(); aqui pega todas as tarefas

        //filtrar pelo usuario autenticado
        return auth()->user()->tarefas;
    }
}
