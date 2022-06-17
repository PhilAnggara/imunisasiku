@extends('layouts.app')
@section('title', 'Imunisasiku | Beranda')

@section('content')
<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <h1 class="text-white d-inline-block mb-0">Beranda</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Jumlah Pengguna</h5>
                  <span class="h2 font-weight-bold mb-0">123</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                    <i class="fa-solid fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Sejak bulan lalu</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Imunisasi Hari Ini</h5>
                  <span class="h2 font-weight-bold mb-0">123</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                    <i class="fa-solid fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Sejak bulan lalu</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Imunisasi Dalam Antrian</h5>
                  <span class="h2 font-weight-bold mb-0">123</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                    <i class="fa-solid fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Sejak bulan lalu</span>
              </p>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-md-6">
          <div class="card card-stats">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h5 class="card-title text-uppercase text-muted mb-0">Imunisasi Yang Terlewat</h5>
                  <span class="h2 font-weight-bold mb-0">123</span>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                    <i class="fa-solid fa-users"></i>
                  </div>
                </div>
              </div>
              <p class="mt-3 mb-0 text-sm">
                <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Sejak bulan lalu</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="h3 mb-0">Imunisasi Hari ini</h5>
        </div>
        <div class="card-body">
          <div id="imunisasi-harian"></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card">
        <div class="card-header">
          <h5 class="h3 mb-0">Imunisasi 1 Minggu Terakhir</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <div id="imunisasi-mingguan" class="chart-canvas"></div>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h5 class="h3 mb-0">Imunisasi bulanan</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-bars" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div> --}}
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
    labels: ['Selesai', 'Belum Selesai'],
    // colors:['#008FFB', '#00E396', '#FF4560'],
    // colors:['#57CAEB', '#5DDAB4', '#FF7976'],
    colors:['#00E396', '#008FFB', '#00E396', '#FF7976'],
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

  var optionsImunisasiMingguan = {
    chart: {
      type: 'area',
      height:'350px',
      zoom: {
        enabled: false
      }
    },
    series: [{
      name: "Pesanan",
      data: [1,2,3,4,5,6,7]
    }],
    stroke: {
      curve: 'smooth'
    },
    grid: {
      row: {
        colors: ['#f3f3f3', 'transparent'],
        opacity: 0.5
      },
    },
    xaxis: {
      categories: ['Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'],
    }
  };

  var chartPesananHarian = new ApexCharts(document.querySelector("#imunisasi-harian"), optionsImunisasiHarian);
  var chartPesananMingguan = new ApexCharts(document.querySelector("#imunisasi-mingguan"), optionsImunisasiMingguan);
  chartPesananHarian.render();
  chartPesananMingguan.render();
</script>
@endpush