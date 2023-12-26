@extends('layouts.app')

@section('title')
  Tambah Data
@endsection

@section('stylesheet')
  <!-- select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" />

  {{-- customcss --}}
  <style>
    .select2 {
      text-transform: capitalize
    }

    .select2-selection {
      height: auto !important;
    }
  </style>
@endsection

@section('javascript')
  <!-- Select2 -->
  <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
@endsection

@section('init')
  <script>
    $(document).ready(function() {
      function capitalizeWords(str) {
        return str.replace(/\b\w/g, function(match) {
          return match.toUpperCase();
        });
      }

      $("select[name*='faculty'], select[name*='roles']").select2({
        templateResult: function(option) {
          if (option.text) {
            return $('<span>' + capitalizeWords(option.text) + '</span>');
          }
          return option.text;
        }
      });
    });
  </script>
@endsection

@section('content')
  <div class="card card-primary">
    @if (count($errors) > 0)
      @foreach ($errors->all() as $error)
        {{ Session::flash('warning', $error) }}
      @endforeach
    @endif
    <!-- form start -->
    <form action="{{ route('admin.user-store') }}" method="POST">
      {{ csrf_field() }}
      <div class="card-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama User</label>
          <input type="text" class="form-control" name="name" placeholder="Contoh : Muhammad Hatta" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" minlength="6" maxlength="12" pattern=".{6,12}"
            title="Minimal 6 Karakter dan Maksimal 12 Karakter !" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">NPM</label>
          <input type="tel" class="form-control title" name="npm" placeholder="Contoh : 20158501" minlength="8"
            maxlength="8" pattern=".{8,8}" title="NPM Harus 8 Karakter !"required>
        </div>

        <div class="form-group">
          <label>Prodi</label>
          <select class="form-control select2" style="width: 100%" name="faculty" required>
            <option class="text-muted" disabled selected>Pilih Prodi</option>
            @foreach ($faculties as $faculty)
              <option value="{{ $faculty->faculty }}">
                {{ $faculty->faculty }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>User Akses</label>
          <select class="form-control select2" style="width: 100%" name="roles" required>
            <option class="text-muted" disabled selected>Pilih User Akses</option>
            @foreach ($roles as $role)
              <option value="{{ $role->roles }}">
                {{ $role->roles }}
              </option>
            @endforeach
          </select>
        </div>

        <!-- /.card-body -->

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
