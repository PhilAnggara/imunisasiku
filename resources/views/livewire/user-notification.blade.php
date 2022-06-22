<div>

  <li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      <i class="ni ni-bell-55"></i>
      @if ($jadwal && $jadwal->count())
        <span class="badge badge-pill badge-danger">{{ $jadwal->count() }}</span>
      @endif
    </a>
    @if ($jadwal && $jadwal->count())
      <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
        <div class="px-3 py-3">
          <h6 class="text-sm text-muted m-0">Anda mempunyai <strong class="text-primary">{{ $jadwal->count() }}</strong> jadwal imunisasi.</h6>
        </div>
        <div class="list-group list-group-flush">
          @foreach ($jadwal as $item)
            <a href="{{ route('anak.index') }}" class="list-group-item list-group-item-action" data-toggle="tooltip" title="{{ $item->toolTip() }}">
              <div class="row align-items-center">
                <div class="col-auto">
                  @if ($item->notificationStatus() == 1)
                    <div class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                      <i class="fa-solid fa-bell"></i>
                    </div>
                  @elseif ($item->notificationStatus() == 2)
                    <div class="icon icon-shape bg-gradient-success text-white rounded-circle shadow">
                      <i class="fa-solid fa-syringe"></i>
                    </div>
                  @elseif ($item->notificationStatus() == 3)
                    <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                      <i class="fa-solid fa-calendar-star"></i>
                    </div>
                  @else
                    <div class="icon icon-shape bg-gradient-danger text-white rounded-circle shadow">
                      <i class="fa-solid fa-calendar-xmark"></i>
                    </div>
                  @endif
                </div>
                <div class="col ml--2">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="mb-0 text-sm">{{ $item->tenaga_medis }}</h4>
                    </div>
                    <div class="text-right">
                      <small class="text-muted">
                        <i class="fad fa-calendar-days"></i>
                        {{ $item->tanggalDijadwalkan() }}
                      </small>
                    </div>
                  </div>
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <p class="text-sm mb-0">{{ $item->vaksin->nama_vaksin }}</p>
                    </div>
                    <div class="text-right text-muted">
                      <small>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          @endforeach
        </div>
      </div>
    @else
      <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-5 overflow-hidden">
        <p class="text-center text-muted m-0">Belum ada notifikasi</p>
      </div>
    @endif
  </li>

</div>