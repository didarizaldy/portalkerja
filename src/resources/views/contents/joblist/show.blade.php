@extends('layouts.app')

@section('init')
  <script>
    var id = $(this).attr('id');

    $(document).on('click', '#cancel-submit', function(e) {
      e.preventDefault();
      swal({
        title: 'Apakah anda yakin membatalkan ?',
        text: "Batalkan Untuk Mendaftar Pada Lowongan Ini !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Ya, Batalkan !',
        cancelButtonText: 'Batal',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false
      }, function() {
        $('#cancelForm').submit();
        // console.log(postid);
      });
    });

    var postid = "{{ $posts->id }}";

    $(document).on('click', '#apply-submit', function(e) {
      e.preventDefault();
      swal({
        title: 'Apakah anda yakin mendaftar ?',
        text: "Mendaftar Pada Lowongan Ini !",
        type: 'success',
        showCancelButton: true,
        confirmButtonText: 'Ya, daftar !',
        cancelButtonText: 'Batal',
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        buttonsStyling: false
      }, function() {
        $('#submitForm').submit();
        // console.log(postid);
      });
    });
  </script>
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">

        <!-- Profile Image -->
        <div class="card card-dark card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              @if ($posts->categories == 'informatika')
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/developer.png') }}"
                  alt="User profile picture">
              @elseif($posts->categories == 'elektro')
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/circuit.png') }}"
                  alt="User profile picture">
              @elseif($posts->categories == 'mesin')
                <img class="profile-user-img img-fluid img-circle" src="{{ asset('assets/dist/img/engineering.png') }}"
                  alt="User profile picture">
              @endif
            </div>

            <h3 class="profile-username text-center" style="text-transform: capitalize;">{{ $posts->companies_name }}</h3>

            <p class="text-muted text-center" style="text-transform: capitalize;">{{ $posts->skills }}</p>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b>Diposting</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ date('d F Y', strtotime($posts->created_at)) }}</a>
              </li>
              <li class="list-group-item">
                <b>Tanggal Berlaku</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ date('d F Y', strtotime($posts->expireddate)) }}</a>
              </li>
              <li class="list-group-item">
                <b>Type</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ $posts->work_type }}</a>
              </li>
              <li class="list-group-item">
                <b>Lokasi</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ $posts->worksite_location }}</a>
              </li>
              <li class="list-group-item">
                <b>Jabatan</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ $posts->position }}</a>
              </li>
              <li class="list-group-item">
                <b>Pengalaman</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ $experience }}</a>
              </li>
              <li class="list-group-item">
                <b>Pendidikan</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ $education }}</a>
              </li>
              @if (!$posts->salary)
                <li class="list-group-item">
                  <b>Gaji</b> <a class="float-right" style="color: black; text-transform: capitalize;">Negosiasi</a>
                </li>
              @else
                <li class="list-group-item">
                  <b>Gaji</b> <a class="float-right"
                    style="color: black; text-transform: capitalize;">{{ $salary }}</a>
                </li>
              @endif
              <li class="list-group-item">
                <b>Kuota</b> <a class="float-right"
                  style="color: black; text-transform: capitalize;">{{ $posts->quota }}</a>
              </li>
            </ul>
            @if (Auth::check())
              @if ($checkapply)
                <a href="#" class="btn btn-danger btn-block" id="cancel-submit"><b>Batalkan</b></a>
              @endif
              @unless ($checkapply)
                <a href="#" class="btn btn-success btn-block" id="apply-submit"><b>Daftar</b></a>
              @endunless
            @else
            @endif
          </div>
          <form id="cancelForm" action="{{ route('job-cancel', $posts->slug) }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            {{ method_field('delete') }}
          </form>
          <form id="submitForm" action="{{ route('job-submit', $posts->slug) }}" method="POST" style="display: none;">
            {{ csrf_field() }}
            {{ method_field('post') }}
          </form>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      {{-- <div class="col-12 col-sm-6"> --}}
      <div class="col-md-8">
        <div class="card card-light card-outline card-outline-tabs">
          <div class="card-header p-0 border-bottom-0">
            <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home"
                  role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">Detail</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-four-tabContent">
              <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel"
                aria-labelledby="custom-tabs-four-home-tab">
                <h4><strong>Jobdesk</strong></h4>
                <br>
                {!! htmlspecialchars_decode($posts->jobdesk) !!}
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
      </div>
      {{-- <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#detail" data-toggle="tab">Detail</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="detail">
                <form class="form-horizontal">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName2" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div> --}}
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection
