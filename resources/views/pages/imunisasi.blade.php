@extends('layouts.app')
@section('title', 'Imunisasiku | Example')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Imunisasi</h1>
        </div>
        <div class="col-lg-6 col-5 text-right">
          <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#buatJadwal">
            <i class="fas fa-plus"></i>
            Buat Jadwal
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">

        <div class="table-responsive py-4">
          <table class="table table-flush text-center" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Nama Anak</th>
                <th>Jenis Vaksin</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Tenaga Medis</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->anak->nama }}</td>
                  <td>{{ $item->vaksin->nama_vaksin }}</td>
                  <td>{{ $item->tanggalDijadwalkan() }}</td>
                  <td>
                    @if ($item->cekStatus() == 1)
                      <span class="badge badge-pill badge-success" data-toggle="tooltip" title="{{ $item->tanggalImunisasi() }}">Selesai</span>
                    @elseif ($item->cekStatus() == 2)
                      <span class="badge badge-pill badge-warning" data-toggle="tooltip" title="{{ $item->tanggalImunisasi() }}">Terlambat imunisasi</span>
                    @elseif ($item->cekStatus() == 3)
                      <span class="badge badge-pill badge-danger">Belum diimunisasi</span>
                    @else
                      <span class="badge badge-pill badge-secondary">Menunggu</span>
                    @endif
                  </td>
                  <td>{{ $item->tenaga_medis }}</td>
                  <td>
                    @if ($item->tanggal_imunisasi)
                      <button type="button" class="btn btn-sm btn-secondary" disabled>
                        <i class="fas fa-check"></i>
                      </button>
                    @else
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{ $item->id }}">
                        <i class="fas fa-check" data-toggle="tooltip" title="Telah Diimunisasi"></i>
                      </button>
                    @endif
                    {{-- <div class="btn-group" role="group" aria-label="Basic example">
                      @if ($item->tanggal_imunisasi)
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{ $item->id }}" disabled>
                          <i class="fas fa-check"></i>
                        </button>
                      @else
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editModal-{{ $item->id }}">
                          <i class="fas fa-check" data-toggle="tooltip" title="Sudah Diimunisasi"></i>
                        </button>
                      @endif
                      <button type="button" class="btn btn-sm table-action table-action-delete btn-secondary" onclick="hapusData({{ $item->id }},'Jadwal untuk {{ $item->anak->nama }}')">
                        <i class="fas fa-trash" data-toggle="tooltip" title="Hapus"></i>
                      </button>
                      <form action="{{ route('imunisasi.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
                        @method('delete')
                        @csrf
                      </form>
                    </div> --}}
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>
@include('includes.modals.imunisasi-modal')
@endsection