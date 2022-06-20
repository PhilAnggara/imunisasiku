<div>
  <div class="form-group">
    <label class="form-control-label">Alamat</label>
    <div class="input-group mb-3">

      <select class="form-control" wire:model="selectedKecamatan" required>
        <option value="" selected disabled>-- Pilih kecamatan --</option>
        @foreach ($kecamatan as $kec)
          <option value="{{ $kec->id }}">{{ Str::title($kec->nama) }}</option>
        @endforeach
      </select>

      <select class="form-control" {{ !$selectedKecamatan ? 'disabled' : '' }} name="id_kelurahan" required>
        <option value="" selected disabled>-- Pilih kelurahan --</option>
        @if ($selectedKelurahan)
          @foreach ($kelurahan as $kel)
            <option value="{{ $kel->id }}" {{ $kel->id == $selectedKelurahan->id ? 'selected' : '' }}>{{ Str::title($kel->nama) }}</option>
          @endforeach
        @else
          @foreach ($kelurahan as $kel)
            <option value="{{ $kel->id }}">{{ Str::title($kel->nama) }}</option>
          @endforeach
        @endif
      </select>

    </div>
  </div>
</div>
