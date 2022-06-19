@extends('layouts.app')
@section('title', 'Imunisasiku | Data Anak')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Data Anak</h1>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#tambahData">
            <i class="fas fa-plus"></i>
            Tambah Data
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  @if ($anak)
    <div class="row justify-content-md-center">
      <div class="col-lg-4">
        <div class="card">
          <img class="card-img-top" src="{{ url('frontend/images/baby-placeholder.jpg') }}">
          <button type="button" class="btn btn-icon btn-sm btn-link px-0">
            <i class="fal fa-images"></i>
            Upload Foto
          </button>
          <div class="card-body">
            <h5 class="h2 card-title mb-0">
              {{ $anak->nama }}
              <small class="text-muted">
                @if ($anak->jenis_kelamin == 'Laki-laki')
                  <i class="fas fa-mars text-info" data-toggle="tooltip" data-original-title="Laki-laki"></i>
                @else
                  <i class="fas fa-venus text-danger" data-toggle="tooltip" data-original-title="Perempuan"></i>
                @endif
              </small>
            </h5>
            <small class="text-muted">{{ Str::title($anak->tempatLahir->nama) }}, {{ $anak->tanggalLahir() }}</small>
            <div class="table-responsive">
              <table class="table table-borderless table-sm table-hover my-4">
                <tbody>
                  {{-- <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>{{ Str::title($anak->tempatLahir->nama) }}</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td>{{ $anak->tanggalLahir() }}</td>
                  </tr> --}}
                  <tr>
                    <td>Usia</td>
                    <td>:</td>
                    <td>{{ $anak->umur() }}</td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>{{ $anak->ibu->detail->alamat->nama }}, {{ Str::title($anak->ibu->detail->alamat->kec->kab->nama) }}</td>
                  </tr>
                  <tr>
                    <td>Nama Ibu</td>
                    <td>:</td>
                    <td>{{ $anak->ibu->name }}</td>
                  </tr>
                  <tr>
                    <td>Nama Ayah</td>
                    <td>:</td>
                    <td>{{ $anak->ibu->detail->nama_suami }}</td>
                  </tr>
                  <tr>
                    <td>WhatsApp</td>
                    <td>:</td>
                    <td>
                      <a href="https://wa.me/{{ $anak->ibu->detail->no_hp }}" class="btn btn-icon btn-success btn-sm" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        +{{ $anak->ibu->detail->no_hp }}
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="button" class="btn btn-icon btn-info btn-sm">
              <i class="fas fa-user-pen"></i>
              Edit Data
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header">
            <h5 class="h3 mb-0">Riwayat Imunisasi</h5>
          </div>
          <div class="card-body">
            <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
              @foreach ($anak->imunisasi as $imunisasi)
                <div class="timeline-block">
                  <span class="timeline-step badge-success">
                    <i class="fad fa-check"></i>
                  </span>
                  <div class="timeline-content">
                    <div class="d-flex justify-content-between pt-1">
                      <div>
                        <span class="text-muted text-sm font-weight-bold">{{ $imunisasi->vaksin->nama_vaksin }}</span>
                      </div>
                      <div class="text-right">
                        <small class="text-muted">
                          <i class="fad fa-calendar-days"></i>
                          {{ $imunisasi->tanggal() }}
                        </small>
                      </div>
                    </div>
                    <h6 class="text-sm mt-1 mb-0">{{ $imunisasi->tenaga_medis }}</h6>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  @else
      
  @endif
</div>
@endsection