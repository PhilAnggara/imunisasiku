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
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h6 class="surtitle">Overview</h6>
          <h5 class="h3 mb-0">Total sales</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-sales" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h6 class="surtitle">Performance</h6>
          <h5 class="h3 mb-0">Total orders</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-bars" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h6 class="surtitle">Growth</h6>
          <h5 class="h3 mb-0">Sales value</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-points" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h6 class="surtitle">Users</h6>
          <h5 class="h3 mb-0">Audience overview</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-doughnut" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h6 class="surtitle">Partners</h6>
          <h5 class="h3 mb-0">Affiliate traffic</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-pie" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-xl-6">
      <div class="card">
        <div class="card-header">
          <h6 class="surtitle">Overview</h6>
          <h5 class="h3 mb-0">Product comparison</h5>
        </div>
        <div class="card-body">
          <div class="chart">
            <canvas id="chart-bar-stacked" class="chart-canvas"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer pt-0">
    <div class="row align-items-center justify-content-lg-between">
      <div class="col-lg-6">
        <div class="copyright text-center text-lg-left text-muted">
          &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
        </div>
      </div>
      <div class="col-lg-6">
        <ul class="nav nav-footer justify-content-center justify-content-lg-end">
          <li class="nav-item">
            <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
          </li>
          <li class="nav-item">
            <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
          </li>
          <li class="nav-item">
            <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
          </li>
        </ul>
      </div>
    </div>
  </footer>
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
      name: "Anak yang diimunisasi",
      data: [14,14,15,17,18,16,17]
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