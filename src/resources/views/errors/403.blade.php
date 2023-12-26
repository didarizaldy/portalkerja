@extends('layouts.app')

@section('content')
  <div class="error-page">
    <h2 class="headline text-danger">403</h2>
    <div class="error-content">
      <h3><i class="fas fa-exclamation-triangle text-danger"></i> Oops! Kamu Tidak Memiliki Akses Kesini !</h3>
      <p>
        Silakan <a href="{{ route('home') }}">kembali ke dashboard</a>.
      </p>
    </div>
  </div>
@endsection
