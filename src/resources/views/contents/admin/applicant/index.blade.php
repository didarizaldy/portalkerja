@extends('layouts.app')

@section('title')
  List Pelamar
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
    function newexportaction(e, dt, button, config) {
      var self = this;
      var oldStart = dt.settings()[0]._iDisplayStart;
      dt.one('preXhr', function(e, s, data) {
        data.start = 0;
        data.length = 2147483647;
        dt.one('preDraw', function(e, settings) {
          if (button[0].className.indexOf('buttons-excel') >= 0) {
            $.fn.dataTable.ext.buttons.excelHtml5.available(dt, config) ?
              $.fn.dataTable.ext.buttons.excelHtml5.action.call(self, e, dt, button, config) :
              $.fn.dataTable.ext.buttons.excelFlash.action.call(self, e, dt, button, config);
          }
          dt.one('preXhr', function(e, s, data) {
            settings._iDisplayStart = oldStart;
            data.start = oldStart;
          });
          setTimeout(dt.ajax.reload, 0);
          return false;
        });
      });
      dt.ajax.reload();
    };

    var table = $("#datatable-job")
      .DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('admin.applicant-show') }}",
          method: 'GET',
        },
        columns: [{
            "data": "applicant_name",
          },
          {
            "data": "applicant_npm",
          },
          {
            "data": "applicant_faculty",
            'visible': false,
          },
          {
            "data": "post_title",
          },
          {
            "data": "post_company",
          },
          {
            "data": "post_categories",
            'visible': false,
          },
          {
            "data": "post_worksite",
          },
          {
            "data": "post_worktype",
            'visible': false,
          },
          {
            "data": "post_position",
            'visible': false,
          },
          {
            "data": "post_experience",
            'visible': false,
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
              var d = new Date(data.applicant_submit);
              var tgl = d.getDate();
              var bln = month[d.getMonth()];
              var thn = d.getFullYear();
              return tgl + " - " + bln + " - " + thn;
            },
            "className": "text-right",
            "searchable": false,
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
        dom: '<"row"<"col-md-9"B><"col-md-3"f>>rt<"row"<"col-md-6"i><"col-md-6"p>>',
        buttons: [{
          extend: 'excelHtml5',
          title: 'List Pelamar - ' + getCurrentDateTime(),
          className: "btn btn-md btn-success btn-track",
          text: "<i class=\"fas fa-file-excel\"></i> Download Excel",
          exportOptions: {
            modifier: {
              search: 'applied', // Include filtered rows if search is active
              pages: 'all' // Include all pages
            },
            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10] // Specify the column indices to include in the export
          },
          action: newexportaction
        }]
      });

    // Append the custom button to the DataTables button container
    table.buttons().container().appendTo($('.dataTables_filter', table.table().container()));

    function getCurrentDateTime() {
      var currentDateTime = new Date();
      var dateOptions = {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric'
      };
      var formattedDate = currentDateTime.toLocaleDateString('id-ID', dateOptions);
      var formattedTime = getCurrentTimeFormatted(currentDateTime);
      var formattedDateTime = formattedDate + ' ~ ' + formattedTime;
      return formattedDateTime;
    }

    function getCurrentTimeFormatted(date) {
      var hours = padZero(date.getHours());
      var minutes = padZero(date.getMinutes());
      var seconds = padZero(date.getSeconds());
      return hours + ':' + minutes + ':' + seconds;
    }

    function padZero(value) {
      return value.toString().padStart(2, '0');
    }
  </script>
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      <table id="datatable-job" class="table table-bordered table-striped">
        <thead>
          <tr class="text-center">
            <th>Nama</th>
            <th>NPM</th>
            <th hidden>Prodi</th>
            <th>Judul Lowongan</th>
            <th>Nama Perusahaan</th>
            <th hidden>Kategori</th>
            <th>Lokasi</th>
            <th hidden>Tipe Pekerjaan</th>
            <th hidden>Posisi Pekerjaan</th>
            <th hidden>Pengalaman Kerja</th>
            <th>Tanggal Melamar</th>
          </tr>
        </thead>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
