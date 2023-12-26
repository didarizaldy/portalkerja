@extends('layouts.app')

@section('title')
  List Perusahaan
@endsection

@section('stylesheet')
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet"
    href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}" />
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}" />
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" />
  <style>
    .select2 {
      text-transform: capitalize
    }

    .select2-selection {
      height: auto !important;
    }

    #datatable-job {
      white-space: nowrap !important;
      width: 100% !important;
      border-collapse: collapse !important;
    }
  </style>
@endsection

@section('javascript')
  <!-- InputMask -->
  <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
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
  <!-- Select2 -->
  <script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- date-range-picker -->
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
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

    function capitalizeWords(str) {
      return str.replace(/\b\w/g, function(match) {
        return match.toUpperCase();
      });
    }

    $("#filterdate").datetimepicker({
      icons: {
        time: "far fa-clock"
      },
      format: "MM-YYYY"
    });

    var $select = $('select.select2');

    // Initialize Select2
    $select.select2({
      data: {!! $companies !!}, // Use the $companies variable as the data source
      minimumInputLength: 5, // Minimum number of characters to trigger the search
      language: {
        inputTooShort: function(args) {
          var remainingChars = args.minimum - args.input.length;
          return "Masukkan Text Minimal " + remainingChars + " Atau Beberapa Karakter (Wajib Diisi).";
        }
      }
    });

    // Handle additional options when the user types
    $select.on('select2:open', function(e) {
      var $dropdown = $select.data('select2').$dropdown;

      // Listen for scroll event on the dropdown
      $dropdown.on('scroll', function() {
        var $dropdownContent = $(this).find('.select2-results__options');
        var $results = $dropdownContent.find('.select2-results__option');

        // Check if the user has scrolled to the bottom
        if (this.scrollHeight - this.scrollTop === this.clientHeight && $results.length >= 10) {
          // Fetch more results
          // You can implement additional logic here if needed
        }
      });
    });

    var table = $("#datatable-job")
      .DataTable({
        processing: true,
        serverSide: true,
        ajax: {
          url: "{{ route('admin.companies-show') }}",
          method: 'GET',
          data: function(d) {
            // Pass the filterdate value to the server-side script
            d.filterdate = $('#filterdate input').val();
          }
        },
        columns: [{
            "data": "companies",
          },
          {
            "data": "count",
            "searchable": false,
            "width": "50px"
          }
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
        columnDefs: [{
          "className": "dt-body-right",
          "targets": [1]
        }, ],
        dom: '<"row"<"col-md-9"B><"col-md-3"f>>rt<"row"<"col-md-6"i><"col-md-6"p>>',
        buttons: [{
          extend: 'excelHtml5',
          title: 'List Perusahaan - ' + getCurrentDateTime(),
          filename: 'List Perusahaan - ' + getCurrentDateTime(),
          className: "btn btn-md btn-success btn-track",
          text: "<i class=\"fas fa-file-excel\"></i> Download Excel",
          exportOptions: {
            modifier: {
              search: 'applied', // Include filtered rows if search is active
              pages: 'all' // Include all pages
            },
            columns: [0, 1] // Specify the column indices to include in the export
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

    $('form').submit(function(e) {
      e.preventDefault();
      table.ajax.reload();
    });
  </script>
@endsection

@section('content')
  <div class="card">
    <div class="card-body">
      <div id="filter-form">
        <form role="form" action="{{ route('admin.companies-show') }}" method="GET">
          <div class="row mt-4">
            <div class="col">
              <fieldset>
                <div class="form-group row">
                  <p class="col-lg-3 col-form-label">Perusahaan <span class="text-danger">*</span></p>
                  <div class="col-lg-9">
                    <select class="form-control select2" style="width: 100%" name="companies" required>
                      <option class="text-muted" disabled selected>-- Pilih Perusahaan --</option>
                      @foreach ($companies as $company)
                        <option value="{{ $company->companies }}">
                          {{ $company->companies }}
                        </option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <p class="col-lg-3 col-form-label">Filter Tanggal</p>
                  <div class="input-group date col-lg-9" id="filterdate" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" name="filterdate"
                      data-target="#filterdate" />
                    <div class="input-group-append" data-target="#filterdate" data-toggle="datetimepicker">
                      <div class="input-group-text">
                        <i class="fa fa-calendar"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </fieldset>
              <div class="text-right">
                <button type="submit" class="btn btn-info"><i class="far fa-save"></i> Cari Data</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <hr>
      <section>
        <div class="row">
          <div class="col-12">
            <table id="datatable-job" class="table table-bordered table-striped">
              <thead>
                <tr class="text-center">
                  <th>Nama Perusahaan</th>
                  <th>Jumlah Lamaran</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
      </section>
    </div>
  </div>
  <!-- /.card-body -->
@endsection
