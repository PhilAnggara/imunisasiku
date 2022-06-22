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
                <th>Nama Anak</th>
                <th>Tempat/Tanggal Lahir</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Nama Ibu</th>
                <th>No WA</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($items as $item)
                <tr>
                  <td>{{ $item->nama }}</td>
                  <td>{{ Str::title($item->tempatLahir->nama) }}, {{ $item->tanggalLahir() }}</td>
                  <td>{{ $item->umur() }}</td>
                  <td>
                    <i class="fas fa-location-dot text-danger"></i>
                    {{ $item->ibu->detail->alamat->nama }}
                  </td>
                  <td>{{ $item->ibu->name }}</td>
                  <td>
                    <a href="https://wa.me/62{{ $item->ibu->detail->no_hp }}" class="btn btn-icon btn-success btn-sm" target="_blank">
                      <i class="fab fa-whatsapp"></i>
                      +62{{ $item->ibu->detail->no_hp }}
                    </a>
                  </td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                      <button type="button" class="btn btn-sm table-action" data-toggle="modal" data-target="#detailModal-{{ $item->id }}">
                        <i class="fas fa-eye" data-toggle="tooltip" title="Detail"></i>
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
@include('includes.modals.data-anak-modal')
@endsection