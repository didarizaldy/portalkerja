<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ config('app.name', 'Portal Kerja') }} - Login</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}" />
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
  <link href="{{ asset('assets/dist/img/logo128.png') }}" rel="shortcut icon" type="image/x-icon">
  <style>
    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }
  </style>
</head>

<body>
  <main>
    <div class="box">
      <div class="inner-box">
        <div class="forms-wrap">
          <form autocomplete="off" class="sign-in-form" action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}

            <div class="logo">
              <img src="{{ asset('assets/dist/img/logo128.png') }}" alt="easyclass" />
              <h6>Sekolah Tinggi Teknologi Duta Bangsa</h6>
            </div>

            <div class="heading">
              <h2>Portal Kerja</h2>
              <h6>Not registred yet?</h6>
              <a href="https://sttdb.ac.id/" class="toggle">Sign up</a>
            </div>

            @if (session('error'))
              <div class="alert" style="margin-bottom: 20px">
                <h6 class="closebtn" onclick="this.parentElement.style.display='none';">&times;</h6>
                <h6 style="font-weight: lighter">{{ session('error') }}</h6>
              </div>
            @endif

            <div class="actual-form">
              <div class="input-wrap">
                <input id="npm" name="npm" autofocus type="text" minlength="8" class="input-field"
                  autocomplete="off" required />
                <label>NIM</label>
              </div>

              <div class="input-wrap">
                <input id="password" name="password" type="password" minlength="6" class="input-field"
                  autocomplete="off" required />
                <label>Password</label>
              </div>

              <button type="submit" class="sign-btn" />
              Sign-In
              </button>

              <p class="text">
                Powered By : Sekolah Tinggi Teknologi Duta Bangsa
                <a href="#">Registrasi</a> mahasiswa
              </p>
            </div>
          </form>
        </div>

        <div class="carousel" id="myElement">
          <div class="images-wrapper">
            <img src="{{ asset('assets/login/img/1.png') }}" class="image img-1 show" alt="" />
            <img src="{{ asset('assets/login/img/2.png') }}" class="image img-2" alt="" />
          </div>

          <div class="text-slider">
            <div class="text-wrap">
              <div class="text-group">
                <h2>Daftar Lowongan Kerja</h2>
                <h2>Informasi Lowongan Kerja</h2>
              </div>
            </div>

            <div class="bullets">
              <span class="active" data-value="1"></span>
              <span data-value="2"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Javascript file -->

  <script src="{{ asset('assets/login/js/app.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
