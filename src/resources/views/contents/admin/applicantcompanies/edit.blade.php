@extends('layouts.app')

@section('title')
  Tambah Data
@endsection

@section('stylesheet')
  <!-- select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" />
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" />

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
  <!-- InputMask -->
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
  <!-- Select2 -->
  <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- date-range-picker -->
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
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
    <form action="{{ route('admin.applicant-companies-update', $data->id) }}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      <div class="card-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Perusahaan</label>
          <input type="text" class="form-control title" name="name" value="{{ $data->name }}" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">NPM</label>
          <input type="text" class="form-control title" name="address" value="{{ $data->address }}" required>
        </div>

        <div class="form-group">
          <label>Prodi</label>
          <select class="form-control select2" style="width: 100%" name="worksite" required>
            @foreach ($worksites as $worksite)
              <option value="{{ $worksite->id }}" {{ $worksite->id == $data->worksite ? 'selected' : '' }}>
                {{ $worksite->name }}
              </option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
