<div class="modal fade" id="buatJadwal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Jadwal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('imunisasi.store') }}" method="POST">
        @csrf
        <div class="modal-body">
        
          <div class="form-group">
            <label class="form-control-label" for="id_anak">Anak</label>
            <select class="form-control" id="id_anak" name="id_anak" required>
              <option value="" selected disabled>-- Pilih Pasien --</option>
              @foreach ($anak as $ank)
                <option value="{{ $ank->id }}">{{ $ank->nama }}</option>
              @endforeach
            </select>
          </div>
        
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

@foreach ($items as $item)
<div class="modal fade" id="editModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $item->anak->nama }} - {{ $item->vaksin->nama_vaksin }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('imunisasi.update', $item->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label class="form-control-label" for="tanggal_imunisasi">Tanggal</label>
            <input type="date" name="tanggal_imunisasi" class="form-control" id="tanggal_imunisasi" value="{{ Carbon\Carbon::parse(Carbon\Carbon::today())->format('Y-m-d') }}" required>
          </div>
          
          <div class="form-group">
            <label class="form-control-label" for="tenaga_medis">Tenaga Medis</label>
            <input type="text" name="tenaga_medis" class="form-control" id="tenaga_medis" value="{{ $item->tenaga_medis }}" autocomplete="off" required>
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