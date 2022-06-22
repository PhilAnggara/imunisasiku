<?php

namespace App\Http\Livewire;

use App\Models\Anak;
use App\Models\JenisVaksin;
use Livewire\Component;

class AdminNotification extends Component
{
    public $newUser;
    public $jenisVaksin;

    protected $listeners = ['echo:my-channel,MyEvent' => 'mount'];

    public function mount()
    {
        $this->newUser = Anak::doesntHave('imunisasi')->get();
        $this->jenisVaksin = JenisVaksin::all();
    }

    public function render()
    {
        return view('livewire.admin-notification');
    }
}
