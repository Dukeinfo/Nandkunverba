<?php

namespace App\Http\Livewire\Frontend;
use App\Models\PageContent;
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
class FoundersPhilosophy extends Component
{

    public $seo_keywords ,$pageData;

    public function mount(){

    $getRouteName =  Route::currentRouteName(); 
    if($getRouteName){
        $seoMetaData =  Metadetails::where('name',$getRouteName )->first();
          if($seoMetaData){
            SEOTools::setTitle($seoMetaData->title ?? 'Founders Philosophy');
            SEOTools::setDescription($seoMetaData->description ?? '');
            SEOTools::opengraph()->setUrl(url()->current());
            SEOTools::setCanonical(url()->current());
            SEOTools::opengraph()->addProperty('type', 'website');
            SEOTools::twitter()->setSite($seoMetaData->title ?? '');
            $keywords = $seoMetaData->keywords ?? '';
            SEOMeta::addKeyword( $keywords);
            
     }
     $this->pageData =  PageContent::where('status','Active')->where('name',$getRouteName )->first();   
    }

   }


    public function render()
    {
        return view('livewire.frontend.founders-philosophy')->layout('layouts.frontend');
    }
}
