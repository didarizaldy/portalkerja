@extends('layouts.app')

@section('title')
  Daftar Perusahaan
@endsection

@section('stylesheet')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" />
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" />
  <style>
    table {
      white-space: nowrap !important;
      width: 100% !important;
      border-collapse: collapse !important;
    }
  </style>
@endsection

@section('javascript')
  <!-- DataTables  & Plugins -->
  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
@endsection

@section('init')
  <script>
    $("#datatable-job")
      .DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('admin.applicant-companies-show') }}",
          method: 'GET',
        },
        columns: [{
            "data": "name",
          },
          {
            "data": "address",
          },
          {
            "data": "worksite"
          },
          {
            "data": "action"
          },
        ],
        ordering: false,
        deferRender: true,
        scrollCollapse: true,
        scrollX: true,
        sScrollX: "100%",
        sScrollXInner: "110%",
        bScrollCollapse: true,
        language: {
          "url": "{{ route('api.datatables-lang') }}",
        },
      })
      .buttons()
      .container()
      .appendTo("#datatable-job_wrapper .col-md-6:eq(0)");

    $(document).on('click', '#delete-button', function(e) {
      e.preventDefault();
      swal({
        title: 'Apakah anda yakin ?',
        text: "Anda tidak akan dapat mengembalikan data ini !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, hapus !',
        cancelButtonText: 'Batal',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false
      }, function() {
        $('#delete-form').submit();
      });
    });
  </script>
@endsection

@section('content')
  <div class="card">
    <div class="card-header bg-transparent header-elements-inline">
      <div class="card-title">
        <a href="{{ route('admin.applicant-companies-create') }}" class="btn bg-success ml-sm-2 mb-sm-0">
          <i class="fas fa-plus"></i> Tambah Data </a>
      </div>
    </div>
    <div class="card-body">
      <table id="datatable-job" class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
            <th>Nama Perusahaan</th>
            <th>Alamat</th>
            <th>Lokasi Perusahaan</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
