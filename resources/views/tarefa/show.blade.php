@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card border-0 shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="mb-0 fw-bold">Detalhes da Tarefa</h3>
                </div>
                <div class="card-body p-4">
                    <div class="mb-4">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {!! session('success') !!} {{-- Converter em HTML --}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @elseif(session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {!! session('error') !!} {{-- Converter em HTML --}}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                    </div>
                    <table class="table table-bordered align-middle mb-0">
                        <tbody>
                            <tr>
                                <th style="width: 200px;">Título</th>
                                <td>{{ $tarefa->titulo }}</td>
                            </tr>
                            <tr>
                                <th>Descrição</th>
                                <td>{{ $tarefa->descricao ?: '-' }}</td>
                            </tr>
                            <tr>
                                <th>Data Limite</th>
                                <td>{{ $tarefa->data_limite ? \Carbon\Carbon::parse($tarefa->data_limite)->format('d/m/Y') : '-' }}</td>
                            </tr>
                            <tr>
                                <th>Criada em</th>
                                <td>{{ $tarefa->created_at ? $tarefa->created_at->format('d/m/Y H:i') : '-' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="mt-4 d-flex justify-content-end gap-2">
                        <a href="{{ route('tarefa.edit', Crypt::encrypt($tarefa->id)) }}" class="btn btn-warning fw-bold">
                            <i class="bi bi-pencil"></i> Editar
                        </a>
                        <form action="{{ route('tarefa.destroy', Crypt::encrypt($tarefa->id)) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta tarefa?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger fw-bold">
                                <i class="bi bi-trash"></i> Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ url()->previous() }}" class="text-decoration-none text-primary">
                    <i class="bi bi-arrow-left"></i> Voltar
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
