<h2>Lista de Tarefas</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data Limite</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
            <tr>
                <td>{{ $tarefa->id }}</td>
                <td>{{ $tarefa->titulo }}</td>
                <td>{{ $tarefa->descricao }}</td>
                <td>{{ $tarefa->data_limite }}</td>
            </tr>
        @endforeach
    </tbody>
</table>