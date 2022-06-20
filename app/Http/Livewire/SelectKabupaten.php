<?php

namespace App\Http\Livewire;

use App\Models\Kabupaten;
use App\Models\Provinsi;
use Livewire\Component;

class SelectKabupaten extends Component
{
    public $provinsi, $kabupaten;
    public $selectedProvinsi = '';
    public $selectedKabupaten;

    public function mount()
    {
        $this->provinsi = Provinsi::all();
        $this->kabupaten = collect();

        if ($this->selectedKabupaten) {
            $this->selectedProvinsi = $this->selectedKabupaten->id_provinsi;
            $this->updatedSelectedProvinsi();
        }
    }

    public function render()
    {
        return view('livewire.select-kabupaten');
    }

    public function updatedSelectedProvinsi()
    {
        $this->kabupaten = Kabupaten::where('id_provinsi', $this->selectedProvinsi)->get();
    }
}
