@extends('layouts.app')

@section('title')
  List Kerja
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
          url: "{{ route('admin.job-show') }}",
          method: 'GET',
        },
        columns: [{
            "data": "title",
          },
          {
            "data": null,
            "render": function(data, type, row) {
              if (data.work_type == 'hybrid') {
                return '<span class="float-none badge bg-info">Hybrid</span>';
              } else if (data.work_type == 'onsite') {
                return '<span class="float-none badge bg-danger">On-Site</span>';
              } else if (data.work_type == 'remote') {
                return '<span class="float-none badge bg-success">Remote</span>';
              }
            },
            "searchable": false
          },
          {
            "data": "worksite",
          },
          {
            "data": null,
            "render": function(data, type, row) {
              var month = [
                'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
              ];
              var d = new Date(data.created_at);
              var tgl = d.getDate();
              var bln = month[d.getMonth()];
              var thn = d.getFullYear();
              return tgl + " - " + bln + " - " + thn;
            },
            "searchable": false,
          },
          {
            "data": "action",
            "searchable": false
          },
        ],
        ordering: false,
        deferRender: true,
        scrollCollapse: true,
        scrollX: true,
        sScrollX: "100%",
        sScrollXInner: "110%",
        bScrollCollapse: true,
        columnDefs: [{
            "className": "dt-body-center",
            "targets": [1, 2, 4]
          },
          {
            "className": "dt-body-right",
            "targets": [3]
          },
        ],
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
        <a href="{{ route('admin.job-create') }}" class="btn bg-success ml-sm-2 mb-sm-0">
          <i class="fas fa-plus"></i> Tambah Data </a>
      </div>
    </div>
    <div class="card-body">
      <table id="datatable-job" class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
            <th>Judul</th>
            <th>Tipe</th>
            <th>Lokasi</th>
            <th>Tanggal Publish</th>
            <th>Action</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
