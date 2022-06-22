<div>

  <li class="nav-item dropdown">
    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
      aria-expanded="false">
      <i class="ni ni-bell-55"></i>
      @if ($newUser->count())
        <span class="badge badge-pill badge-danger">{{ $newUser->count() }}</span>
      @endif
    </a>
    @if ($newUser->count())
      <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
        <div class="px-3 py-3">
          <h6 class="text-sm text-muted m-0">Anda mempunyai <strong class="text-primary">{{ $newUser->count() }}</strong> pasian belum terjadwal.</h6>
        </div>
        <div class="list-group list-group-flush">
          @foreach ($newUser as $item)
            <div class="list-group-item">
              <div class="row align-items-center">
                <div class="col-auto">
                  <img alt="Image placeholder" src="https://ui-avatars.com/api/?background=2DCEBE&color=fff&bold=true&name={{ $item->nama }}" class="avatar rounded-circle">
                </div>
                <div class="col ml--2">
                  <div class="d-flex justify-content-between align-items-center">
                    <div>
                      <h4 class="mb-0 text-sm">{{ $item->nama }}</h4>
                    </div>
                  </div>
                  <p class="text-sm mb-0">{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>
                </div>
                <div class="col-auto">
                  <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#jadwalkan-{{ $item->id }}">
                    Jadwalkan
                  </button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    @else
      <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-5 overflow-hidden">
        <p class="text-center text-muted m-0">Belum ada notifikasi</p>
      </div>
    @endif
  </li>

  @foreach ($newUser as $item)
    <div class="modal fade" id="jadwalkan-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{ $item->nama }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{ route('imunisasi.store') }}" method="POST">
            @csrf
            <div class="modal-body">
            
              <input type="hidden" name="id_anak" value="{{ $item->id }}">
            
              <div class="form-group">
                <label class="form-control-label" for="id_jenis_vaksin">Jenis Vaksin</label>
                <select class="form-control" id="id_jenis_vaksin" name="id_jenis_vaksin" required>
                  <option value="" selected disabled>-- Pilih Jenis Vaksin --</option>
                  @foreach ($jenisVaksin as $vaksin)
                    <option value="{{ $vaksin->id }}">{{ $vaksin->nama_vaksin }}</option>
                  @endforeach
                </select>
              </div>
    
              <div class="form-group">
                <label class="form-control-label" for="tanggal_dijadwalkan">Tanggal</label>
                <input type="date" name="tanggal_dijadwalkan" class="form-control" id="tanggal_dijadwalkan" required>
              </div>
              
              <div class="form-group">
                <label class="form-control-label" for="tenaga_medis">Tenaga Medis</label>
                <input type="text" name="tenaga_medis" class="form-control" id="tenaga_medis" autocomplete="off" required>
              </div>
    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  @endforeach

</div>