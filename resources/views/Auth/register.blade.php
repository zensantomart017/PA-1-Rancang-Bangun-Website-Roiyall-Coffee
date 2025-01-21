<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register - Roiyall Coffee</title>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">

  {{-- <link rel="stylesheet" href="/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> --}}

  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">

</head>

<body class="hold-transition register-page">
  @include('sweetalert::alert')

  <div class="register-box">
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
      <a href="/" class="h1"> <img src="images/logo.png" alt="" width="100px"> <br>Roiyall Coffee </a>
      </div>
      <div class="card-body mb-3">
        <p class="login-box-msg"></p>
        <form class="needs-validation" novalidate action="/register" method="POST">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            @error('name')
            <span class="invalid-feedback text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
            @error('email')
            <span class="invalid-feedback text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-eye" id="togglePassword"></span>
              </div>
            </div>
            @error('password')
            <span class="invalid-feedback text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" name="passwordConfirm" id="passwordConfirm" class="form-control @error('passwordConfirm') is-invalid @enderror" placeholder="Confirm password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
            @error('passwordConfirm')
            <span class="invalid-feedback text-danger">{{ $message }}</span>
            @enderror
          </div>

          <div class="row">
            {{-- <div class="col-8">
        <div class="icheck-primary">
            <input type="checkbox" id="agreeTerms" name="terms" required>
            <label for="agreeTerms">
                I agree to the <a href="#">terms</a>
            </label>
        </div>
    </div> --}}

            <div class="col-4 mb-3">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
          </div>
          <a>Sudah Punya Akun?</a><a href="/login" class="text-center mb-3"> Login Disini</a>

      </div>

    </div>
  </div>


  <script src="/assets/plugins/jquery/jquery.min.js"></script>

  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

  {{-- <script src="/assets/dist/js/adminlte.min.js"></script> --}}

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function(e) {
      // Ganti jenis input menjadi 'text' atau 'password'
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      // Ubah ikon mata sesuai dengan jenis input
      this.classList.toggle('fa-eye-slash');
    });
  </script>

</body>

</html>