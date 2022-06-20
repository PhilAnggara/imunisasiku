<div class="modal fade" id="keluarModal" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
  <div class="modal-dialog modal-danger modal-dialog-centered" role="document">
    <div class="modal-content bg-gradient-danger">
      <div class="modal-header">
        <h6 class="modal-title" id="modal-title-notification"></h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="py-3 text-center">
          <i class="fad fa-right-from-bracket fa-7x"></i>
          <h4 class="heading mt-4">Keluar?</h4>
          <p>Tekan tombol <b><i>Keluar</i></b> di bawah ini untuk mengakhiri sesi anda!</p>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-link text-white" data-dismiss="modal">Batal</button>
        <form class="ml-auto" action="{{ route('logout') }}" method="POST">
          @csrf
          <button type="submit" class="btn btn-white">Keluar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="gantiPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ganti Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('ganti-password') }}" method="post">
        <div class="modal-body">
          @method('put')
          @csrf
          <div class="form-group">
            <label class="form-control-label" for="current_password">Kata Sandi Sekarang</label>
            <input type="password" class="form-control @error('current_password') is-invalid @enderror" id="current_password" name="current_password" required>
            @error('current_password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password">Kata Sandi Baru</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
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

<div class="modal fade" id="tambahDataPertumbuhanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Pertumbuhan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('tambah-data-pertumbuhan') }}" method="POST">
        @csrf
        <div class="modal-body">
        
          <div class="form-group">
            <label class="form-control-label" for="bb">Berat Badan (kg)</label>
            <input type="number" name="bb" class="form-control" id="bb" step="0.1" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="tb">Tinggi Badan (cm)</label>
            <input type="number" name="tb" class="form-control" id="tb" step="0.1" required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="lk">Lingkar Kepala (cm)</label>
            <input type="number" name="lk" class="form-control" id="lk" step="0.1" required>
          </div>

          {{-- <div class="form-group">
            <label class="form-control-label" for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ Carbon\Carbon::parse(Carbon\Carbon::today())->format('Y-m-d') }}" required>
          </div> --}}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>


@if ($errors->has('password') || $errors->has('current_password'))
  <script>
    var gantiPasswordModal = new bootstrap.Modal(document.getElementById('gantiPasswordModal'));
    gantiPasswordModal.show();
  </script>
@endif