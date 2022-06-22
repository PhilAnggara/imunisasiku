<nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav align-items-center ml-md-auto">
        <li class="nav-item d-xl-none">
          <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
            data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </li>
        @if (auth()->user()->admin())
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <i class="ni ni-bell-55"></i>
              <span class="badge badge-pill badge-danger">2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
              <div class="px-3 py-3">
                <h6 class="text-sm text-muted m-0">Anda mempunyai <strong class="text-primary">2</strong> pasian belum terjadwal.</h6>
              </div>
              <div class="list-group list-group-flush">
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="https://ui-avatars.com/api/?background=2DCEBE&color=fff&bold=true&name=WA"
                        class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">Willy Angow</h4>
                        </div>
                      </div>
                      <p class="text-sm mb-0">2 jam yang lalu</p>
                    </div>
                    <div class="col-auto">
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#gantiPasswordModal">
                        Jadwalkan
                      </button>
                    </div>
                  </div>
                </div>
                <div class="list-group-item">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <img alt="Image placeholder" src="https://ui-avatars.com/api/?background=2DCEBE&color=fff&bold=true&name=WA"
                        class="avatar rounded-circle">
                    </div>
                    <div class="col ml--2">
                      <div class="d-flex justify-content-between align-items-center">
                        <div>
                          <h4 class="mb-0 text-sm">Willy Angow</h4>
                        </div>
                      </div>
                      <p class="text-sm mb-0">2 jam yang lalu</p>
                    </div>
                    <div class="col-auto">
                      <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#gantiPasswordModal">
                        Jadwalkan
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <a href="{{ route('beranda') }}" class="dropdown-item text-center text-primary font-weight-bold py-3">Lihat semua</a> --}}
            </div>
          </li>
        @endif
      </ul>
      <ul class="navbar-nav align-items-center ml-auto ml-md-0">
        <li class="nav-item dropdown">
          <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="https://ui-avatars.com/api/?background=FB9E40&color=fff&bold=true&name={{ auth()->user()->name }}">
              </span>
              <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
              </div>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header noti-title">
              <h6 class="text-overflow m-0">Halo, {{ Str::before(auth()->user()->name, ' ') }}!</h6>
            </div>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#gantiPasswordModal">
              <i class="ni ni-lock-circle-open"></i>
              <span>Ganti password</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#keluarModal">
              <i class="ni ni-user-run"></i>
              <span>Keluar</span>
            </a>
            {{-- <form action="{{ route('logout') }}" id="keluar" method="POST">
              @csrf
            </form> --}}
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>