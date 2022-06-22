<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserNotification extends Component
{
    public $jadwal;

    protected $listeners = ['echo:my-channel,MyEvent' => 'mount'];

    public function mount()
    {
        // $this->jadwal = auth()->user()->anak->imunisasi->where('tanggal_imunisasi',null);
        if (auth()->user()->anak) {
            $this->jadwal = auth()->user()->anak->imunisasi->where('tanggal_imunisasi',null);
        }
        
    }

    public function render()
    {
        return view('livewire.user-notification');
    }
}
