<?php

namespace App\Livewire\Website\Map\Info;

use App\Models\Admin\VungTrong;
use Livewire\Component;
use Livewire\Attributes\On;

class VungTrongs extends Component
{
    public $vungtrong;
    public $openInfoBox = false;

    #[On('closeInfoBox')]
    public function closeInfoBox()
    {
        $this->openInfoBox = false;
        $this->vungtrong = null;
    }
    #[On('getVungtrongInfo')]
    public function getVungtrongInfo($id)
    {
        $this->vungtrong = VungTrong::find($id);

        $this->openInfoBox = true;
    }

    public function render()
    {
        return view('livewire.website.map.info.vung-trongs');
    }
}
