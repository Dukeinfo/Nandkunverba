<?php

namespace App\Http\Livewire\Frontend;

use Livewire\Component;
use App\Models\Categories;
use App\Models\Gallery as ModelsGallery;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
// OR with multi
use Artesaos\SEOTools\Facades\JsonLdMulti;
use App\Models\Metadetails;
use Illuminate\Support\Facades\Route;
// OR use only single facades 

use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;

use Livewire\WithPagination;
class PhotoGallery extends Component
{

use WithPagination;

  // protected $paginationTheme = 'bootstrap';
   public $selectedRecords = 1;

    public function render()
    {
        return view('livewire.frontend.photo-gallery',[ 'categories' => Categories::where('status', 'Active')->get()])->layout('layouts.frontend');
    }
}
