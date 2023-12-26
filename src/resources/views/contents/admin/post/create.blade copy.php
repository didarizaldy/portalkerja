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

      $("select[name*='position'], select[name*='skills'], select[name*='worksite']").select2({
        tags: true,
        templateResult: function(option) {
          if (option.text) {
            return $('<span>' + capitalizeWords(option.text) + '</span>');
          }
          return option.text;
        }
      });

      $("select[name*='categories'], select[name*='graduate'], select[name*='experience'], select[name*='work_type']")
        .select2({
          templateResult: function(option) {
            if (option.text) {
              return $('<span>' + capitalizeWords(option.text) + '</span>');
            }
            return option.text;
          }
        });

      $("textarea[name*='jobdesk']").summernote({
        height: 300,
        toolbar: [
          ['font', ['bold', 'italic', 'underline']],
          ['para', ['ol', 'ul']],
        ]
      });

      $("#expireddate").datetimepicker({
        icons: {
          time: "far fa-clock"
        },
        format: "L",
      });
    });

    //convert title to slug
    var titlesubmit = document.querySelector(".title");
    var slug = document.querySelector(".slug");
    titlesubmit.addEventListener("keyup", function() {
      let preslug = titlesubmit.value;
      preslug = preslug.replace(/ /g, "-");
      slug.value = preslug.toLowerCase();
    });
    // end convert

    //convert ke rupiah
    var rupiah = document.getElementById("rupiah");

    rupiah.addEventListener("input", function() {
      rupiah.value = formatRupiah(this.value, "Rp. ");
    });

    function formatRupiah(angka) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] !== undefined ? rupiah + "," + split[1] : rupiah;
      return "Rp. " + rupiah;
    }
    //end convert rupiah
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
    <form action="{{ route('admin.job-store') }}" method="POST">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">Judul Lowongan</label>
          <input type="text" class="form-control title" name="title"
            placeholder="Contoh : Lowongan Digital Content Creator" minlength="6" maxlength="48" pattern=".{6,48}"
            required>
          <input type="hidden" class="form-control slug" name="slug">
        </div>

        <div class="form-group">
          <label>Kategori Pekerjaan</label>
          <select class="form-control select2" style="width: 100%" name="categories" id="categories" required>
            <option class="text-muted" disabled selected>Pilih Kategori Pekerjaan</option>
            @foreach ($categories as $category)
              <option value="{{ $category->categories }}">
                {{ $category->categories }}
              </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Perusahaan</label>
          <input type="text" class="form-control" name="companies" placeholder="Masukkan Nama Perusahaan"
            minlength="6" maxlength="31" pattern=".{6,31}" required>
        </div>

        <div class="form-group">
          <label>Kualifikasi Pendidikan</label>
          <select class="form-control select2" style="width: 100%" name="graduate" required>
            <option class="text-muted" disabled selected>Pilih Pendidikan</option>
            @foreach ($education as $edu)
              <option value="{{ htmlspecialchars($edu['value']) }}">{{ htmlspecialchars($edu['option']) }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Pengalaman Kerja</label>
          <select class="form-control select2" style="width: 100%" name="experience" required>
            <option class="text-muted" disabled selected>Standard Pengalaman Kerja</option>
            @foreach ($experience as $exp)
              <option value="{{ htmlspecialchars($exp['value']) }}">{{ htmlspecialchars($exp['option']) }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Posisi Lowongan</label>
          <select class="form-control select2" style="width: 100%" name="position" required>
            <option class="text-muted" disabled selected>Posisi Lowongan Yang Dibutuhkan</option>
            @foreach ($positions as $position)
              <option value="{{ $position->position }}">{{ $position->position }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Keterampilan</label>
          <select class="form-control select2" style="width: 100%" name="skills" required>
            <option class="text-muted" disabled selected>Pilih Ketarampilan Yang Harus Dikuasai</option>
            @foreach ($skills as $skill)
              <option value="{{ $skill->skills }}">{{ $skill->skills }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Tipe Pekerjaan</label>
          <select class="form-control select2" style="width: 100%" name="work_type" required>
            <option class="text-muted" disabled selected>Pilih Jenis Pekerjaan</option>
            @foreach ($work_types as $work_type)
              <option value="{{ $work_type->work_type }}">{{ $work_type->work_type }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Lokasi Kerja</label>
          <select class="form-control select2" style="width: 100%" name="worksite" required>
            <option class="text-muted" disabled selected>Pilih Lokasi Kerja</option>
            @foreach ($worksites as $worksite)
              <option value="{{ $worksite->id }}">{{ $worksite->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Gaji (Bulan)</label>
          <input type="tel" class="form-control" name="salary" placeholder="Masukkan Gaji" id="rupiah" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kuota Yang Tersedia</label>
          <input type="tel" class="form-control" name="quota" placeholder="Kuota Yang Dalam Posisi Ini"
            minlength="1" maxlength="3" pattern=".{1,3}" required>
        </div>

        <div class="form-group">
          <label>Tanggal Berlaku :</label>
          <div class="input-group date" id="expireddate" data-target-input="nearest">
            <input type="text" class="form-control datetimepicker-input" data-target="#expireddate" name="expireddate"
              required />
            <div class="input-group-append" data-target="#expireddate" data-toggle="datetimepicker">
              <div class="input-group-text">
                <i class="fa fa-calendar"></i>
              </div>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Jobdesk</label>
          <textarea name="jobdesk"></textarea>
        </div>
        <!-- /.card-body -->

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
