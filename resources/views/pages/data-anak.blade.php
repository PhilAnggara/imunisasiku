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
  <div class="row">
    <div class="col">
      <div class="card">

        <div class="table-responsive py-4">
          <table class="table table-flush text-center" id="datatable-basic">
            <thead class="thead-light">
              <tr>
                <th>No</th>
                <th>Nama Anak</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Jadwal</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama }}</td>
                  <td>{{ $item->umur() }}</td>
                  <td>{{ $item->alamat->nama }}</td>
                  <td>{{ $item->getJadwal() }}</td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm table-action" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-eye" data-toggle="tooltip" title="Detail"></i>
                      </button>
                      <button type="button" class="btn btn-sm table-action" data-toggle="modal" data-target="#exampleModal">
                        <i class="fas fa-user-edit" data-toggle="tooltip" title="Detail"></i>
                      </button>
                      <button type="button" class="btn btn-sm table-action table-action-delete" onclick="hapusData({{ $item->id }},'{{ $item->nama }}')">
                        <i class="fas fa-trash" data-toggle="tooltip" title="Hapus"></i>
                      </button>
                      <form action="{{ route('data-anak.destroy', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
                        @method('delete')
                        @csrf
                      </form>
                    </div>
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
@endsection