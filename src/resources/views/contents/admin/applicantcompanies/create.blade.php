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

      $("select[name*='worksite']").select2({
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
    <form action="{{ route('admin.applicant-companies-store') }}" method="POST">
      {{ csrf_field() }}
      <div class="card-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Perusahaan</label>
          <input type="text" class="form-control" name="name" placeholder="Contoh : PT Equitylife Indonesia" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat Perusahaan</label>
          <input type="tel" class="form-control title" name="address"
            placeholder="Contoh : Jl. Jend. Sudirman No. 86, Sahid Sudirman Center, 43rd Floor - Jakarta 10220" required>
        </div>

        <div class="form-group">
          <label>Lokasi Perusahaan</label>
          <select class="form-control select2" style="width: 100%" name="worksite" required>
            <option class="text-muted" disabled selected>Pilih Kota</option>
            @foreach ($worksites as $worksite)
              <option value="{{ $worksite->id }}">
                {{ $worksite->name }}
              </option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
@endsection
