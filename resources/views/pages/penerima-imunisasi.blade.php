@extends('layouts.app')
@section('title', 'Imunisasiku | Penerima Imunisasi')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Penerima Imunisasi</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">

          <div id="imunisasi-harian"></div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('addon-script')
<script src="{{ url('frontend/vendors/apexcharts/apexcharts.js') }}"></script>
<script>
  var optionsImunisasiHarian = {
    chart: {
      type: 'donut',
      width: '100%',
      height:'400px',
    },
    // series: [44, 92, 15],
    series: [9,2],
    labels: ['Yang Harus Divaksinasi Hari Ini', 'Missdeadline'],
    // colors:['#008FFB', '#00E396', '#FF4560'],
    // colors:['#57CAEB', '#5DDAB4', '#FF7976'],
    colors:['#008FFB', '#FF7976'],
    legend: {
      position: 'bottom'
    },
    plotOptions: {
      pie: {
        donut: {
          size: '40%'
        }
      }
    }
  };

  var chartPesananHarian = new ApexCharts(document.querySelector("#imunisasi-harian"), optionsImunisasiHarian);
  chartPesananHarian.render();
</script>
@endpush