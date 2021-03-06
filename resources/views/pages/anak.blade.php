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
        {{-- <div class="col-lg-6 col-5 text-right">
          <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#tambahData">
            <i class="fas fa-plus"></i>
            Tambah Data
          </button>
        </div> --}}
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  @if ($anak)
    <div class="row justify-content-md-center">
      <div class="col-lg-4">
        <div class="card">
          @if ($anak->foto)
            <img class="card-img-top" src="{{ Storage::url($anak->foto) }}">
            <div class="d-inline text-center">
              <button type="button" class="btn btn-icon btn-sm btn-link text-dark px-0" onclick="hapusData({{ $anak->id }},' foto ini')">
                <i class="fas fa-trash"></i>
                Hapus Foto
              </button>
              <button type="button" class="btn btn-icon btn-sm btn-link px-0" data-toggle="modal" data-target="#uploadModal">
                <i class="fal fa-images"></i>
                Ganti Foto
              </button>
              <form action="{{ route('hapus-foto', $anak->id) }}" id="hapus-{{ $anak->id }}" method="POST">
                @method('delete')
                @csrf
              </form>
            </div>
          @else
            <img class="card-img-top" src="{{ url('frontend/images/baby-placeholder.jpg') }}">
            <button type="button" class="btn btn-icon btn-sm btn-link px-0" data-toggle="modal" data-target="#uploadModal">
              <i class="fal fa-images"></i>
              Upload Foto
            </button>
          @endif
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
                      <a href="https://wa.me/62{{ $anak->ibu->detail->no_hp }}" class="btn btn-icon btn-success btn-sm" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        +62{{ $anak->ibu->detail->no_hp }}
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <button type="button" class="btn btn-icon btn-outline-info btn-sm" data-toggle="modal" data-target="#editData">
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
              @forelse ($anak->imunisasi as $imunisasi)
                <div class="timeline-block">
                  @if ($imunisasi->cekStatus() == 1)
                    <span class="timeline-step badge-success" data-toggle="tooltip" title="{{ $imunisasi->tanggalImunisasi() }}">
                      <i class="fad fa-check"></i>
                    </span>
                  @elseif ($imunisasi->cekStatus() == 2)
                    <span class="timeline-step badge-warning" data-toggle="tooltip" title="{{ $imunisasi->tanggalImunisasi() }}">
                      <i class="fad fa-check"></i>
                    </span>
                  @elseif ($imunisasi->cekStatus() == 3)
                    <span class="timeline-step badge-danger" data-toggle="tooltip" title="{{ $imunisasi->tanggalImunisasi() }}">
                      <i class="fad fa-calendar-xmark"></i>
                    </span>
                  @else
                    <span class="timeline-step badge-secondary" data-toggle="tooltip" title="{{ $imunisasi->tanggalImunisasi() }}">
                      <i class="fad fa-loader"></i>
                    </span>
                  @endif
                  <div class="timeline-content">
                    <div class="d-flex justify-content-between pt-1">
                      <div>
                        <span class="text-muted text-sm font-weight-bold">{{ $imunisasi->vaksin->nama_vaksin }}</span>
                      </div>
                      <div class="text-right">
                        <small class="text-muted">
                          <i class="fad fa-calendar-days"></i>
                          {{ $imunisasi->tanggalDijadwalkan() }}
                        </small>
                      </div>
                    </div>
                    <h6 class="text-sm mt-1 mb-0">{{ $imunisasi->tenaga_medis }}</h6>
                  </div>
                </div>
              @empty
                <div class="py-5 text-center">
                  <h5 class="h3 title">
                    <small class="h4 font-weight-light text-muted">Belum pernah diimunisasi</small>
                  </h5>
                </div>
              @endforelse
            </div>
          </div>
        </div>
      </div>
    </div>
  @else
      
  @endif
</div>
@include('includes.modals.anak-modal')
@endsection

@push('addon-style')
<link rel="stylesheet" href="{{ url('frontend/vendors/myImgPreview/main.css') }}">
@endpush
@push('addon-script')
<script src="{{ url('frontend/vendors/myImgPreview/main.js') }}"></script>
@endpush