@extends('layouts.app')
@section('title', 'Imunisasiku | Panduan Anak')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Panduan Ibu</h1>
        </div>
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
            <a href="{{ route('article', $item->slug) }}">
              <h2 class="mb-0">{{ $item->title }}</h2>
            </a>
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
@endsection