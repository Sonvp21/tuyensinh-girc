<?php

namespace App\Livewire\Website\Map\Info;

use App\Models\Admin\Commune;
use Livewire\Component;
use Livewire\Attributes\On;

class Communes extends Component
{
    public $commune;
    public $openInfoBox = false;

    #[On('closeInfoBox')]
    public function closeInfoBox()
    {
        $this->openInfoBox = false;
        $this->commune = null;
    }
    #[On('getCommuneInfo')]
    public function getcommuneInfo($id)
    {
        $this->commune = Commune::find($id);

        $this->openInfoBox = true;
    }

    public function render()
    {
        return view('livewire.website.map.info.communes');
    }
}
