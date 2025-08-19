@extends('layouts.app')

@section('title', 'Reclo - Venta de Productos de Segunda Mano')

@section('content')
  <!-- Hero -->
  <header class="hero-section text-center py-5">
    <div class="container d-flex flex-column align-items-center">
      <h1 class="fw-bold display-4 mb-3">
        <i class="fas fa-recycle me-3"></i>Reclo
      </h1>
      <h2 class="fs-4 mb-4">Encuentra tesoros de segunda mano</h2>
      <div class="d-flex gap-3">
        <a href="{{ route('custom-users.create') }}" class="btn btn-custom btn-lg">
          <i class="fas fa-plus me-2"></i>Crear Usuario
        </a>
        <a href="{{ route('custom-users.list') }}" class="btn btn-outline-light btn-lg">
          <i class="fas fa-list me-2"></i>Ver Usuarios
        </a>
      </div>
    </div>
  </header>

  <!-- Contenido principal -->
  <main class="container my-5">

    <!-- Características del sistema -->
    <section class="section">
      <h2 class="text-center mb-5">Características del Sistema</h2>

      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-user-plus"></i>
            </div>
            <h4>Crear Usuarios</h4>
            <p class="text-muted">Formulario completo para registrar nuevos usuarios con validación de datos.</p>
            <a href="{{ route('custom-users.create') }}" class="btn btn-custom">Crear Usuario</a>
          </div>
        </div>

        <div class="col-md-6 mb-4">
          <div class="feature-card">
            <div class="feature-icon">
              <i class="fas fa-list"></i>
            </div>
            <h4>Listar Usuarios</h4>
            <p class="text-muted">Visualiza todos los usuarios registrados con navegación fácil y rápida.</p>
            <a href="{{ route('custom-users.list') }}" class="btn btn-custom">Ver Lista</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Usuarios recientes -->
    @if($recentUsers->count() > 0)
    <section class="section">
      <h2 class="text-center mb-4">Usuarios Recientes</h2>

      <div class="products-grid">
        @foreach($recentUsers as $user)
        <div class="card">
          <div class="card-body text-center">
            <div class="feature-icon">
              <i class="fas fa-user-circle"></i>
            </div>
            <h5 class="card-title">{{ $user->name }}</h5>
            <p class="card-text text-muted">{{ $user->email }}</p>
            <p class="fw-bold text-primary">{{ $user->payment_method }}</p>
            <a href="{{ route('custom-users.show', $user->id) }}" class="btn btn-custom w-100">
              <i class="fas fa-eye me-2"></i>Ver Detalles
            </a>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    @endif

  </main>
@endsection
