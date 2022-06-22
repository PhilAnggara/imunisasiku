@extends('layouts.app')
@section('title', 'Imunisasiku | Panduan Ibu')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Panduan Ibu</h1>
        </div>
        @if (auth()->user()->admin())
          <div class="col-lg-6 col-5 text-right">
            <button type="button" class="btn btn-sm btn-neutral" data-toggle="modal" data-target="#buatArtikelModal">
              <i class="fas fa-plus"></i>
              Buat Artikel
            </button>
          </div>
        @endif
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-10">

      @foreach ($items as $item)
        <div class="card mb-4">
          <div class="card-header">
            <div class="row align-items-center">
              <div class="col-8">
                <a href="{{ route('article', $item->slug) }}">
                  <h2 class="mb-0">{{ $item->title }}</h2>
                </a>
              </div>
              @if (auth()->user()->admin())
                <div class="col-4 text-right">
                  <button type="button" class="btn btn-sm table-action table-action-delete" onclick="hapusData({{ $item->id }},'{{ $item->title }}')">
                    <i class="fas fa-trash" data-toggle="tooltip" title="Hapus Artikel"></i>
                  </button>
                  <form action="{{ route('hapus-article', $item->id) }}" id="hapus-{{ $item->id }}" method="POST">
                    @method('delete')
                    @csrf
                  </form>
                </div>
              @endif
            </div>
          </div>
          <div class="card-body">
            {!! Str::limit($item->content, 500, '....') !!}
            <a href="{{ route('article', $item->slug) }}" class="card-link text-muted font-weight-bold">Baca Selengkapnya</a>
          </div>
        </div>
      @endforeach

    </div>
  </div>
</div>
@include('includes.modals.panduan-ibu-modal')
@endsection