<div>
  <div class="form-group">
    <label class="form-control-label">Tempat Lahir</label>
    <div class="input-group mb-3">

      <select class="form-control" wire:model="selectedProvinsi" required>
        <option value="" selected disabled>-- Pilih provinsi --</option>
        @foreach ($provinsi as $prov)
          <option value="{{ $prov->id }}">{{ Str::title($prov->nama) }}</option>
        @endforeach
      </select>

      <select class="form-control" {{ !$selectedProvinsi ? 'disabled' : '' }} name="id_kabupaten" required>
        <option value="" selected disabled>-- Pilih kabupaten --</option>
        @if ($selectedKabupaten)
          @foreach ($kabupaten as $kab)
            <option value="{{ $kab->id }}" {{ $kab->id == $selectedKabupaten->id ? 'selected' : '' }}>{{ Str::title($kab->nama) }}</option>
          @endforeach
        @else
          @foreach ($kabupaten as $kab)
            <option value="{{ $kab->id }}">{{ Str::title($kab->nama) }}</option>
          @endforeach
        @endif
      </select>

    </div>
  </div>
</div>
