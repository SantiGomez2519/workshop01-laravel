@extends('layouts.app')

@section('title', 'Detalles del Usuario')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h2 class="text-center mb-0">
                        <i class="fas fa-user-circle me-2"></i>Detalles del Usuario
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-hashtag me-2"></i>ID:
                            </h5>
                            <p class="fw-bold">{{ $customUser->id }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-user me-2"></i>Nombre:
                            </h5>
                            <p class="fw-bold">{{ $customUser->name }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-phone me-2"></i>Teléfono:
                            </h5>
                            <p class="fw-bold">{{ $customUser->phone }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-envelope me-2"></i>Email:
                            </h5>
                            <p class="fw-bold">{{ $customUser->email }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-credit-card me-2"></i>Método de Pago:
                            </h5>
                            <p class="fw-bold">{{ $customUser->payment_method }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-calendar-plus me-2"></i>Fecha de Creación:
                            </h5>
                            <p class="fw-bold">{{ $customUser->created_at->format('d/m/Y H:i:s') }}</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-calendar-check me-2"></i>Última Actualización:
                            </h5>
                            <p class="fw-bold">{{ $customUser->updated_at->format('d/m/Y H:i:s') }}</p>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-muted">
                                <i class="fas fa-lock me-2"></i>Contraseña:
                            </h5>
                            <p class="fw-bold text-muted">
                                <i class="fas fa-shield-alt me-1"></i>•••••••• (Encriptada)
                            </p>
                        </div>
                    </div>

                    <hr>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <form action="{{ route('custom-users.destroy', $customUser->id) }}" 
                              method="POST" 
                              onsubmit="return confirm('¿Estás seguro de que quieres eliminar este usuario?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fas fa-trash me-2"></i>Eliminar Usuario
                            </button>
                        </form>
                        <a href="{{ route('custom-users.list') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-list me-2"></i>Volver a la Lista
                        </a>
                        <a href="{{ route('home.index') }}" class="btn btn-custom">
                            <i class="fas fa-home me-2"></i>Volver al Inicio
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
