<?php

namespace App\Http\Livewire;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Livewire\Component;

class SelectKelurahan extends Component
{
    public $kecamatan, $kelurahan;
    public $selectedKecamatan = '';
    public $selectedKelurahan;

    public function mount()
    {
        $this->kecamatan = Kecamatan::where('id_kabupaten', 7171)->get();
        $this->kelurahan = collect();

        if ($this->selectedKelurahan) {
            $this->selectedKecamatan = $this->selectedKelurahan->id_kecamatan;
            $this->updatedSelectedKecamatan();
        }
    }
    public function render()
    {
        return view('livewire.select-kelurahan');
    }

    public function updatedSelectedKecamatan()
    {
        $this->kelurahan = Kelurahan::where('id_kecamatan', $this->selectedKecamatan)->get();
    }
}
