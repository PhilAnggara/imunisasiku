@extends('layouts.app')
@section('title', 'Imunisasiku | Beranda')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Beranda Ibu</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5 class="h3 mb-0">Masukan data diri bayi</h5>
        </div>
        <div class="card-body">
          <form action="{{ route('anak.store') }}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
              <label class="form-control-label" for="exampleFormControlInput1">Foto</label>
              <div class="my-image-preview" id="myImagePreview">
                <img src="" alt="Image Preview" class="mip-image">
                <span class="mip-default-text">Pilih Gambar</span>
                <input type="file" name="foto" class="mip-input" id="mipInput" accept="image/*">
              </div>
            </div>
            
            <div class="form-group">
              <label class="form-control-label" for="nama">Nama</label>
              <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}" autocomplete="off" required>
            </div>

            @livewire('select-kabupaten')
            
            <div class="form-group">
              <label class="form-control-label" for="tgl_lahir">Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ old('tgl_lahir') }}" required>
            </div>

            <div class="form-group">
              <label class="form-control-label" for="jenis_kelamin">Jenis-kelamin</label>
              <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
                <option {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Perempuan</option>
              </select>
            </div>

            @livewire('select-kelurahan')
            
            <div class="form-group">
              <label class="form-control-label" for="nama_suami">Nama Ayah</label>
              <input type="text" name="nama_suami" class="form-control" id="nama_suami" value="{{ old('nama_suami') }}" autocomplete="off" required>
            </div>
            
            <div class="form-group">
              <label class="form-control-label" for="no_hp">No WA</label>
              {{-- <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ old('no_hp') }}" autocomplete="off" required> --}}
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">+</span>
                </div>
                <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ old('no_hp') }}" autocomplete="off" placeholder="6281234567890" required>
              </div>
            </div>

            <div class="text-right">
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ url('frontend/vendors/myImgPreview/main.css') }}">
@endpush
@push('addon-script')
<script src="{{ url('frontend/vendors/myImgPreview/main.js') }}"></script>
@endpush