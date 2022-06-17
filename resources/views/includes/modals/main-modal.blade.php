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
      <div class="modal-body">
        <form action="">
          <div class="form-group">
            <label class="form-control-label" for="current_password">Kata Sandi Sekarang</label>
            <input type="password" class="form-control" id="current_password" name="current_password">
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password">Kata Sandi Baru</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <div class="form-group">
            <label class="form-control-label" for="password_confirmation">Konfirmasi Kata Sandi Baru</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>