<div class="modal fade" id="buatArtikelModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Artikel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('buat-article') }}" method="POST">
        @csrf
        <div class="modal-body">
        
          <div class="form-group">
            <label class="form-control-label" for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" autocomplete="off"  required>
          </div>
          <div class="form-group">
            <label class="form-control-label" for="content">Content</label>
            <input type="text" name="content" class="form-control" id="content" required>
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