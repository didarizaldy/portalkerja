@extends('layouts.app')

@section('title')
  Home
@endsection

@section('stylesheet')
  <style>
    .carousel-item img {
      width: 80%;
      /* Adjust this value to change the zoom level */
      margin: 0 auto;
    }

    .carousel {
      border-radius: 25px 25px 25px 25px;
      overflow: hidden;
    }

    .carousel-control-prev {
      margin-left: -50px;
    }

    .carousel-control-next {
      margin-right: -50px;
    }

    @media (max-width: 767px) {
      .card-container {
        display: flex;
        flex-wrap: wrap;
        margin: -10px;
      }

      .card {
        flex: 0 0 calc(50% - 20px);
        margin: 10px;
      }
    }
  </style>
@endsection

@section('init')
  <script>
    $('.carousel').carousel({
      interval: 10000
    })
  </script>
@endsection

@section('content')
  <div id="carouselExampleIndicators" class="carousel slide shadow mb-4" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/dist/img/bannersttdb.png') }}" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('assets/dist/img/bannersttdb2.png') }}">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="row">
    <div class="col d-flex justify-content-center">
      <div class="p-3">
        <h2 style="font-size: 32px; font-weight: bold; text-align: center">Sekolah Tinggi Teknologi Duta Bangsa</h2>
        <p style="text-align: center">Informasi <strong style="color: purple">Pusat Karir</strong> & Alumni</p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 mb-4">
      <div class="card border border-light bg-warning shadow h-100">
        <div class="card-header">
          <h3 class="card-title">
            <strong><i class="fas fa-pen-alt"></i> Lowongan Kerja</strong>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          Bagi anda alumni maupun mahasiswa Sekolah Tinggi Teknologi Duta Bangsa yang sedang mencari lowongan pekerjaan.
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <hr>
    <!-- ./col -->
    <div class="col-md-4 mb-4">
      <div class="card border border-light bg-warning shadow h-100">
        <div class="card-header">
          <h3 class="card-title">
            <strong><i class="fas fa-graduation-cap"></i> Konseling Karir</strong>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          Bagi seluruh mahasiswa yang membutuhkan konseling terkait karir maupun wirausaha.
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <hr>
    <!-- ./col -->
    <div class="col-md-4 mb-4">
      <div class="card border border-light bg-warning shadow h-100">
        <div class="card-header">
          <h3 class="card-title">
            <strong><i class="fas fa-book"></i> Tracer Study</strong>
          </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          Survey bagi seluruh alumni Sekolah Tinggi Teknologi Duta Bangsa yang di adakan setiap tahun.
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- ./col -->
  </div>

  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <div class="p-3">
          <h2 style="font-size: 32px; font-weight: bold; text-align: center">Feature Job List</h2>
          <p style="text-align: center">Info Lowongan Kerja Yang Tersedia Saat Ini</p>
        </div>
      </div>
      <div class="card-body pb-0">
        <div class="row">
          @foreach ($posts as $post)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <a href="{{ route('job-details', $post->slug) }}">
                <div class="card bg-light d-flex flex-fill">
                  <div class="card-header text-muted border-bottom-0">
                    {{ $post->title }}
                  </div>
                  <div class="card-body pt-0">
                    <div class="row">
                      <div class="col-7">
                        <h6 class="lead" style="font-size: 18px"><b>{{ $post->companies }}</b></h6>
                        <p class="text-muted text-sm"><b>Skills: </b> {{ $post->skills }} </p>
                        <p class="text-muted text-sm mt-0 mb-0" style="text-transform: capitalize;"><i
                            class="fas fa-user-graduate mr-2" style="color: #800080"></i>{{ $post->graduate }}
                        </p>
                        <p class="text-muted text-sm mt-0 mb-0" style="text-transform: capitalize;"><i
                            class="fas fa-map-marker-alt mr-2" style="color: #800080"></i>{{ $post->worksite }}
                        </p>
                        <p class="text-muted text-sm mt-0 mb-0" style="text-transform: capitalize;"><i
                            class="far fa-clock mr-2"
                            style="color: #800080"></i>{{ date('d F Y', strtotime($post->expireddate)) }}
                        </p>
                      </div>
                      <div class="col-5 text-center">
                        @if ($post->categories == 'informatika')
                          <img src="{{ asset('assets/dist/img/developer.png') }}" alt="image"
                            class="img-circle img-fluid">
                        @elseif($post->categories == 'mesin')
                          <img src="{{ asset('assets/dist/img/engineering.png') }}" alt="image"
                            class="img-circle img-fluid">
                        @elseif($post->categories == 'elektro')
                          <img src="{{ asset('assets/dist/img/circuit.png') }}" alt="image"
                            class="img-circle img-fluid">
                        @endif
                      </div>
                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">
                      @if ($post->work_type == 'onsite')
                        <a href="#" class="btn btn-sm btn-danger">
                          <i class="fas fa-building"></i> On-Site
                        </a>
                      @elseif($post->work_type == 'remote')
                        <a href="#" class="btn btn-sm btn-warning">
                          <i class="fas fa-laptop-house"></i> Remote
                        </a>
                      @elseif($post->work_type == 'hybrid')
                        <a href="#" class="btn btn-sm btn-success">
                          <i class="fas fa-globe"></i> Hybrid
                        </a>
                      @endif
                    </div>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
        <!-- /.card-body -->
        <div class="">
          <nav aria-label="Contacts Page Navigation">
            {{ $posts->links('vendor.pagination.bootstrap-4') }}
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
    </div>
  </div>
@endsection
