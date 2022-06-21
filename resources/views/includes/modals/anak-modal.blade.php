<div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          {{ $anak->foto ? 'Ganti foto' : 'Upload foto' }}
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('upload-foto', $anak->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal-body">

          <div class="my-image-preview" id="myImagePreview">
            <img src="" alt="Image Preview" class="mip-image">
            <span class="mip-default-text">Pilih Gambar</span>
            <input type="file" name="foto" class="mip-input" id="mipInput" accept="image/*">
          </div>
          
        </div>
        <div class="modal-footer">
          {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> --}}
          <button type="submit" class="btn btn-primary">Upload</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('anak.update', $anak->id) }}" method="post">
        @method('put')
        @csrf
        <div class="modal-body">
          
          <div class="form-group">
            <label class="form-control-label" for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ $anak->nama }}" autocomplete="off" required>
          </div>

          @livewire('select-kabupaten', ['selectedKabupaten' => $anak->tempatLahir])
          
          <div class="form-group">
            <label class="form-control-label" for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="{{ $anak->tgl_lahir }}" required>
          </div>

          <div class="form-group">
            <label class="form-control-label" for="jenis_kelamin">Jenis-kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
              <option value="" selected disabled>-- Pilih Jenis Kelamin --</option>
              <option {{ $anak->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
              <option {{ $anak->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
          </div>

          @livewire('select-kelurahan', ['selectedKelurahan' => $anak->ibu->detail->alamat])
          
          <div class="form-group">
            <label class="form-control-label" for="nama_suami">Nama Ayah</label>
            <input type="text" name="nama_suami" class="form-control" id="nama_suami" value="{{ $anak->ibu->detail->nama_suami }}" autocomplete="off" required>
          </div>
          
          <div class="form-group">
            <label class="form-control-label" for="no_hp">No WA</label>
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">+62</span>
              </div>
              <input type="text" name="no_hp" class="form-control" id="no_hp" value="{{ $anak->ibu->detail->no_hp }}" autocomplete="off" placeholder="81234567890" required>
            </div>
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
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