<?php

namespace App\Http\Livewire\Frontend;

use App\Models\Categories;
use App\Models\Gallery;
use Livewire\Component;
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
class GalleryDetail extends Component
{
 
    public $category_id,$category_name;
    public $seo_keywords;

    public function mount($category_id )
    {
     $category = Categories::findOrFail($category_id);
        $this->category_id = $category->id;
        $this->category_name = $category->name;

     $this->records = Gallery::where(['category_id'=> $category_id , 'status' => 'Active' ])->get();

    }
    public function render()
    {
        return view('livewire.frontend.gallery-detail')->layout('layouts.frontend');
    }
}
