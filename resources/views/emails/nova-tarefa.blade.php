<x-mail::message>
# Nova Tarefa Criada

A tarefa **{{ $tarefa->titulo }}** foi criada com sucesso.

{{ $tarefa->descricao ? "Descrição: {$tarefa->descricao}" : '' }}

<?php 
echo $tarefa->data_limite 
        ? 'Data Limite: ' . date('d/m/Y', strtotime($tarefa->data_limite)) 
        : ''; 
?>

<x-mail::button :url="route('tarefa.show', $tarefa->id)">
Ver Tarefa
</x-mail::button>

Horário da criação da Tarefa: {{ $tarefa->created_at->format('d/m/Y H:i') }}

Obrigado,<br>
{{ config('app.name') }}
</x-mail::message>
