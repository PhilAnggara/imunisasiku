@extends('layouts.app')
@section('title')
  Imunisasiku | {{ $item->title }}
@endsection

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Panduan Ibu</h1>
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="{{ route('beranda') }}"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="{{ route('panduan-ibu') }}">Panduan Ibu</a></li>
              <li class="breadcrumb-item active" aria-current="page">Artikel</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row justify-content-center">
    <div class="col-lg-10">

        <div class="card mb-4 p-4">
          <div class="card-header">
            <h1 class="mb-0">{{ $item->title }}</h1>
          </div>
          <div class="card-body">
            {!! $item->content !!}
          </div>
        </div>

    </div>
  </div>
</div>
@endsection