@extends('layouts.auth')
@section('title', 'Imunisasiku | Masuk')

@section('content')
<div class="main-content">
  <div class="header bg-gradient-primary py-5 py-lg-6 pt-lg-7">
    <div class="container">
      <div class="header-body text-center mb-7">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-8 px-5">
            <h1 class="text-white">Puskesmas Bahu</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="separator separator-bottom separator-skew zindex-100">
      <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1"
        xmlns="http://www.w3.org/2000/svg">
        <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
      </svg>
    </div>
  </div>
  <!-- Page content -->
  <div class="container mt--8 pb-5">
    <div class="row justify-content-center">
      <div class="col-lg-5 col-md-7">
        <div class="card bg-secondary border-0 mb-0">
          <div class="card-body px-lg-5 py-lg-4">
            <div class="text-center text-muted mb-4">
              <small>Buat akun</small>
            </div>
            <form action="{{ route('register') }}" method="post">
              @csrf
              <div class="form-group mb-3 @error('name') has-danger @enderror">
                <div class="input-group input-group-merge input-group-alternative @error('name') border border-danger @enderror">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-circle-08"></i></span>
                  </div>
                  <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ old('name') }}" autofocus autocomplete="off" required>
                </div>
                @error('name')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group mb-3 @error('username') has-danger @enderror">
                <div class="input-group input-group-merge input-group-alternative @error('username') border border-danger @enderror">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-single-02"></i></span>
                  </div>
                  <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" autocomplete="off" required>
                </div>
                @error('username')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group mb-3 @error('email') has-danger @enderror">
                <div class="input-group input-group-merge input-group-alternative @error('email') border border-danger @enderror">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" autocomplete="off" required>
                </div>
                @error('email')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group mb-3">
                <div class="input-group input-group-merge input-group-alternative @error('password') border border-danger @enderror">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input type="password" name="password" class="form-control is-invalid" placeholder="Kata sandi" required>
                </div>
                @error('password')
                  <small class="text-danger">{{ $message }}</small>
                @enderror
              </div>
              <div class="form-group">
                <div class="input-group input-group-merge input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                  </div>
                  <input type="password" name="password_confirmation" class="form-control is-invalid" placeholder="Konfirmasi Kata sandi" required>
                </div>
              </div>
              <div class="text-center">
                <button type="submit" class="btn btn-primary my-2">Daftar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col text-center">
            <a href="{{ route('login') }}" class="text-dark"><small>Sudah punya akun?</small></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection