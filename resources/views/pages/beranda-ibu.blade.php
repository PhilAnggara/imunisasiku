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
  <div class="row">
    <div class="col-xl-12">
      <div class="card">
        <div class="card-header">
          <h5 class="h3 mb-0">Grafik pertumbuhan anak</h5>
        </div>
        <div class="card-body">
          <div id="chart-bb"></div>
          <div id="chart-tb"></div>
          <div id="chart-lk"></div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script src="{{ url('frontend/vendors/apexcharts/apexcharts.js') }}"></script>
<script>
  var labels = {!! json_encode($namaBulan) !!};
  var bb = {!! json_encode($data['bb']) !!};
  var tb = {!! json_encode($data['tb']) !!};
  var lk = {!! json_encode($data['lk']) !!};
</script>
<script src="{{ url('frontend/scripts/charts.js') }}"></script>
@endpush