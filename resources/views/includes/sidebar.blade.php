<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
  <div class="scrollbar-inner">
    <div class="sidenav-header d-flex align-items-center">
      <a class="navbar-brand" href="{{ route('beranda') }}">
        <img src="{{ url('frontend/images/logo.png') }}" class="navbar-brand-img" alt="...">
        <h1 class="d-inline align-middle text-primary">Imunisasiku</h1>
      </a>
      <div class="ml-auto">
        <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
          <div class="sidenav-toggler-inner">
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
            <i class="sidenav-toggler-line"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar-inner">
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('/') ? 'active bg-primary text-white' : ''}}" href="{{ route('beranda') }}" href="{{ route('beranda') }}">
              <i class="fad fa-objects-column {{ !Request::is('/') ? 'text-primary' : ''}}"></i>
              <span class="nav-link-text">Beranda</span>
            </a>
          </li>
        </ul>
        <hr class="my-3">
        <ul class="navbar-nav">
          @if (auth()->user()->ibu())
            @if (auth()->user()->anak)
              <li class="nav-item">
                <a class="nav-link {{ Request::is('anak') ? 'active bg-primary text-white' : ''}}" href="{{ route('anak.index') }}">
                  <i class="fad fa-baby {{ !Request::is('anak') ? 'text-primary' : ''}}"></i>
                  <span class="nav-link-text">Data Diri Anak</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('panduan-ibu*') ? 'active bg-primary text-white' : ''}}" href="{{ route('panduan-ibu') }}">
                  <i class="fad fa-baby-carriage {{ !Request::is('panduan-ibu*') ? 'text-primary' : ''}}"></i>
                  <span class="nav-link-text">Panduan Ibu</span>
                </a>
              </li>
            @endif
          @endif
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('jadwal-imunisasi') ? 'active bg-primary text-white' : ''}}" href="{{ route('jadwal-imunisasi.index') }}">
              <i class="fad fa-calendar-days {{ !Request::is('jadwal-imunisasi') ? 'text-primary' : ''}}"></i>
              <span class="nav-link-text">Jawdal Imunisasi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('data-anak') ? 'active bg-primary text-white' : ''}}" href="{{ route('data-anak.index') }}">
              <i class="fad fa-baby {{ !Request::is('data-anak') ? 'text-primary' : ''}}"></i>
              <span class="nav-link-text">Data Anak</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('penerima-imunisasi') ? 'active bg-primary text-white' : ''}}" href="{{ route('penerima-imunisasi') }}">
              <i class="fad fa-syringe {{ !Request::is('penerima-imunisasi') ? 'text-primary' : ''}}"></i>
              <span class="nav-link-text">Penerima Imunisasi</span>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </div>
</nav>