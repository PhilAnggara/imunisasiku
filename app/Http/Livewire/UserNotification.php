<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserNotification extends Component
{
    public $jadwal;

    public function mount()
    {
        $this->jadwal = auth()->user()->anak->imunisasi->where('tanggal_imunisasi',null);
    }

    public function render()
    {
        return view('livewire.user-notification');
    }
}
