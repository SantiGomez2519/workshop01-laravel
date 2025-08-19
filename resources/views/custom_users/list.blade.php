@extends('layouts.app')

@section('title', 'Listar CustomUsers')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center mb-0">
                        <i class="fas fa-list me-2"></i>Lista de Usuarios
                    </h2>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
                        </div>
                    @endif

                    @if($customUsers->count() > 0)
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th><i class="fas fa-hashtag me-2"></i>ID</th>
                                        <th><i class="fas fa-user me-2"></i>Nombre</th>
                                        <th><i class="fas fa-cog me-2"></i>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($customUsers as $user)
                                        <tr>
                                            <td>
                                                <a href="{{ route('custom-users.show', $user->id) }}" 
                                                   class="text-decoration-none fw-bold text-primary">
                                                    <i class="fas fa-link me-1"></i>{{ $user->id }}
                                                </a>
                                            </td>
                                            <td>
                                                <i class="fas fa-user-circle me-2 text-muted"></i>{{ $user->name }}
                                            </td>
                                            <td>
                                                <a href="{{ route('custom-users.show', $user->id) }}" 
                                                   class="btn btn-custom btn-sm">
                                                    <i class="fas fa-eye me-1"></i>Ver Detalles
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-users fa-3x text-muted mb-3"></i>
                            <h4 class="text-muted">No hay usuarios registrados</h4>
                            <p class="text-muted">Crea el primer usuario para comenzar</p>
                            <a href="{{ route('custom-users.create') }}" class="btn btn-custom">
                                <i class="fas fa-plus me-2"></i>Crear Primer Usuario
                            </a>
                        </div>
                    @endif

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                        <a href="{{ route('custom-users.create') }}" class="btn btn-custom">
                            <i class="fas fa-plus me-2"></i>Crear Nuevo Usuario
                        </a>
                        <a href="{{ route('home.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left me-2"></i>Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
