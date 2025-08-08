@extends('layouts.app')
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
            <div class="card border-0 shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="mb-0 fw-bold">Criar Nova Tarefa</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('tarefa.store') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="mb-4">
                            <label for="titulo" class="form-label fw-semibold">Título <span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-lg @error('titulo') is-invalid @enderror" name="titulo" id="titulo" required placeholder="Digite o título da tarefa" value="{{ old('titulo') }}">
                        </div>
                        <div class="mb-4">
                            <label for="descricao" class="form-label fw-semibold">Descrição</label>
                            <textarea class="form-control form-control-lg @error('descricao') is-invalid @enderror" name="descricao" id="descricao" rows="3" placeholder="Descreva a tarefa">{{ old('descricao') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="data_limite" class="form-label fw-semibold">Data Limite</label>
                            <input type="date" class="form-control form-control-lg @error('data_limite') is-invalid @enderror" name="data_limite" id="data_limite" value="{{ old('data_limite') }}">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg fw-bold shadow-sm">
                                <i class="bi bi-plus-circle me-2"></i> Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('tarefa.index') }}" class="text-decoration-none text-primary">
                    <i class="bi bi-arrow-left"></i> Voltar para lista de tarefas
                </a>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger mt-4 text-start">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
