<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;
use App\Models\CoCurricularFacilities;
use App\Models\CoCurricularImages;
class CoCurricularFacility extends Component
{
   
    public $title,$desc,$title_guj,$desc_guj;
    public $multi_images =[];

    public function render()
    {
        return view('livewire.backend.facilities.co-curricular-facility')->layout('layouts.backend');
    }
}
