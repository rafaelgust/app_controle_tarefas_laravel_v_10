<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TarefasExport implements FromCollection, WithHeadings
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

    public function headings(): array
    {
        return [
            'ID',
            'Título',
            'Descrição',
            'Data Limite',
            'Status',
            'Criado em',
            'Atualizado em',
        ];
    }
}
