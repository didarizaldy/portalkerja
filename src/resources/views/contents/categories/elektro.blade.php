@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col d-flex justify-content-center">
        <div class="p-3">
          <h2 style="font-size: 32px; font-weight: bold; text-align: center">Feature Job List</h2>
          <p style="text-align: center">Info Lowongan Kerja Yang Tersedia Saat Ini</p>
          <p style="text-align: center">Kategori : <b style="text-transform: capitalize">{{ $cat }}</b></p>
        </div>
      </div>
      <div class="">
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
