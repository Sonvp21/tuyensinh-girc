<?php

namespace App\Livewire\Website\Map\Info;

use App\Models\Admin\District;
use Livewire\Component;
use Livewire\Attributes\On;

class Districts extends Component
{
    public $district;
    public $openInfoBox = false;

    #[On('closeInfoBox')]
    public function closeInfoBox()
    {
        $this->openInfoBox = false;
        $this->district = null;
    }
    #[On('getDistrictInfo')]
    public function getDistrictInfo($id)
    {
        $this->district = District::find($id);

        $this->openInfoBox = true;
    }

    public function render()
    {
        return view('livewire.website.map.info.districts');
    }
}
