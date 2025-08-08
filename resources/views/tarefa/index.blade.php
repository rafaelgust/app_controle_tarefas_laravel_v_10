@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12">
            <div class="card border-0 shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="mb-0 fw-bold">Lista de Tarefas</h3>
                </div>
                <div class="card-body p-4">
                    <div class="mb-3 text-end">
                        <a href="{{ route('tarefa.create') }}" class="btn btn-success fw-bold">
                            <i class="bi bi-plus-circle me-2"></i> Nova Tarefa
                        </a>
                    </div>
                    <div class="table-responsive">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <table class="table table-hover align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" style="width: 5%;">#</th>
                                    <th class="text-start" style="width: 20%;">Título</th>
                                    <th class="text-start" style="width: 30%;">Descrição</th>
                                    <th class="text-center" style="width: 15%;">Data Limite</th>
                                    <th class="text-center" style="width: 15%;">Criada em</th>
                                    <th class="text-center" style="width: 15%;">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($tarefas as $index => $tarefa)
                                    <tr>
                                        <td class="text-center">{{ ($tarefas->perPage() * ($tarefas->currentPage() - 1)) + $index + 1 }}</td>
                                        <td class="text-start">{{ $tarefa->titulo }}</td>
                                        <td class="text-start">{{ $tarefa->descricao }}</td>
                                        <td class="text-center">{{ $tarefa->data_limite ? \Carbon\Carbon::parse($tarefa->data_limite)->format('d/m/Y') : '-' }}</td>
                                        <td class="text-center">{{ $tarefa->created_at ? $tarefa->created_at->format('d/m/Y H:i') : '-' }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('tarefa.show', Crypt::encrypt($tarefa->id)) }}" class="btn btn-sm btn-info me-1" title="Visualizar">
                                                <i class="bi bi-eye"></i>
                                            </a>
                                            <a href="{{ route('tarefa.edit', Crypt::encrypt($tarefa->id)) }}" class="btn btn-sm btn-warning me-1" title="Editar">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <form action="{{ route('tarefa.destroy', Crypt::encrypt($tarefa->id)) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" title="Excluir" onclick="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">Nenhuma tarefa encontrada.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        @if($tarefas->hasPages())
                         <div class="m-3">
                            <nav aria-label="Page navigation example" class="d-flex justify-content-center">
                                <ul class="pagination">
                                    <li class="page-item {{ $tarefas->onFirstPage() ? 'disabled' : '' }}">
                                        <a class="page-link" href="{{ $tarefas->previousPageUrl() }}">Voltar</a>
                                    </li>
                                    @foreach ($tarefas->getUrlRange(1, $tarefas->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $tarefas->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    <li class="page-item {{ $tarefas->hasMorePages() ? '' : 'disabled' }}">
                                        <a class="page-link" href="{{ $tarefas->nextPageUrl() }}">Próximo</a>
                                    </li>
                                </ul>
                            </nav>
                         </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
