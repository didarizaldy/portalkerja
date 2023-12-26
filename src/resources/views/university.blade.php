@extends('layouts.app')

@section('title')
  Profile Perguruan Tinggi
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
        <p style="text-align: center">Stats <strong style="color: purple">Data Mahasiswa</strong></p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box shadow-sm">
        <span class="info-box-icon" style="background: purple"><i class="fas fa-laptop-code"
            style="color: white"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Informatika</span>
          <span class="info-box-number">{{ $informatika }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box shadow-sm">
        <span class="info-box-icon" style="background: purple"><i class="fas fa-cogs" style="color: white"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Mesin</span>
          <span class="info-box-number">{{ $mesin }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box shadow-sm">
        <span class="info-box-icon" style="background: purple"><i class="fas fa-bolt" style="color: white"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Elektro</span>
          <span class="info-box-number">{{ $elektro }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <div class="col-12 col-sm-3 col-md-3">
      <div class="info-box shadow-sm">
        <span class="info-box-icon" style="background: purple"><i class="fas fa-graduation-cap"
            style="color: white"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Total Mahasiswa</span>
          <span class="info-box-number">{{ $usertotal }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="p-3">
        <h2 style="font-size: 32px; font-weight: bold; text-align: center">Selayang Pandang</h2>
        <p style="text-align: center">Sekolah Tinggi Teknologi Duta Bangsa</p>
      </div>
    </div>
    <div class="container">
      <div class="card-body pb-0">
        <div class="row">
          Sekolah Tinggi Teknologi Duta Bangsa
          Sekolah Tinggi Teknologi Duta Bangsa (STTDB) adalah suatu institusi pendidikan yang diprakarsai dengan tujuan
          untuk turut serta mencerdaskan sumber daya manusia Indonesia melalui wanaha pendidikan tinggi yang terjangkau
          bagi masyarakat Indonesia. Karena komitmen dan profesionalisme yang dimiliki maka STTDB telah berhasil mendapat
          kepercayaan dari pemerintah untuk turut serta membangun dunia pendidikan Indonesia melalui Surat Keputusan
          Menteri Pendidikan Nasional R.I No.34/D/O/2007 tanggal 6 Maret 2007
          <br>
          <br>
          Dengan dukungan dari staff pengajar, pengurus serta Sumber daya manusia terkait lainnya yang berkompeten
          dibidangnya, maka diharapkan STTDB dapat menjadi sebuah lembaga pendidikan tinggi yang mampu bersaing menghadapi
          persaingan global. Karena tuntutan tersebut maka seluruh komponen STTDB berusaha untuk dapat memaksimalkan diri
          guna tercapainya Visi, Misi dan tujuan STTDB.
        </div>
        <!-- /.card-footer -->
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 d-flex justify-content-center">
      <div class="p-3">
        <h2 style="font-size: 32px; font-weight: bold; text-align: center">Visi & Misi</h2>
        <p style="text-align: center">Sekolah Tinggi Teknologi Duta Bangsa</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-map-pin"></i>
                Visi
              </h3>
            </div>

            <div class="card-body">
              STT Duta Bangsa menjadi lembaga pendidikan tinggi yang mampu menghasilkan lulusan jenjang Diploma dan
              Sarjana
              yang profesional serta memiliki kesadaran yang tinggi, sehingga mampu memberikan konstribusi maksimal dalam
              bidang sains dan teknologi kepada masyarakat Indonesia.
            </div>

          </div>
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-book-open"></i>
                Tujuan
              </h3>
            </div>

            <div class="card-body">
              <div class="callout callout-dark">
                <h5><strong>Pembangunan Nasional</strong></h5>
                <p>Menunjang pembangunan nasional dibidang pendidikan tinggi dalam rangka terciptanya sumberdaya manusia
                  yang cakap, profesional, beriman dan bertaqwa kepada Tuhan Yang Maha Esa, memiliki disiplin, tanggung
                  jawab dan pengabdian yang tinggi serta rasa kepedulian terhadap kesejahteraan masyarakat.</p>
              </div>
              <div class="callout callout-dark">
                <h5><strong>Taraf Hidup</strong></h5>
                <p>Mengembangkan dan menyebarluaskan ilmu pengetahuan, teknologi dan mengupayakan penggunaannya untuk
                  meningkatkan taraf hidup masyarakat.</p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card card-default">
        <div class="card-header">
          <h3 class="card-title">
            <i class="fas fa-book-reader"></i>
            Misi
          </h3>
        </div>

        <div class="card-body">
          <div class="callout callout-dark">
            <h5><strong>Pendidikan Berkualitas</strong></h5>
            <p>Menyelenggarakan pendidikan tinggi yang berkualitas dibidang sains dan teknologi sehingga dapat
              mengembangkan sumberdaya manusia yang profesional,intelek, bertanggung jawab dan dapat dipercaya serta
              unggul dibidangnya.</p>
          </div>
          <div class="callout callout-dark">
            <h5><strong>Pengembangan Iptek</strong></h5>
            <p>Melaksanakan penelitian dasar, terapan dan pengembangan iptek.</p>
          </div>
          <div class="callout callout-dark">
            <h5><strong>Tri Dharma</strong></h5>
            <p>Menjalin kerjasama dengan lembaga pendidikan tinggi dan lembaga penelitian, dalam rangka melaksanakan Tri
              Dharma Perguruan Tinggi.</p>
          </div>
          <div class="callout callout-dark">
            <h5><strong>Mitra Industri</strong></h5>
            <p>Menjadi mitra terpercaya bagi industri dalam hal penguasaan dan penerapan teknologi.</p>
          </div>
        </div>

      </div>

    </div>

  </div>

  <div class="container">
    <div class="row mb-2">
      <div class="col-12">
        <div class="row">
          <div class="col-12 d-flex justify-content-center">
            <div class="p-3">
              <h2 style="font-size: 32px; font-weight: bold; text-align: center">Lokasi Kampus</h2>
              <p style="text-align: center">Sekolah Tinggi Teknologi Duta Bangsa (Kampus B Cikarang)</p>
            </div>
          </div>
        </div>
        <div class="card">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.729967941315!2d107.14585311476947!3d-6.299170495440988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e699ad805e4e6fd%3A0x7645abee5d3d741b!2sSekolah%20Tinggi%20Teknologi%20Duta%20Bangsa%20(Kampus%20B%20Cikarang)!5e0!3m2!1sid!2sid!4v1685603580992!5m2!1sid!2sid"
            style="border:0;" allowfullscreen="" loading="lazy" height="500px"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </div>
@endsection
