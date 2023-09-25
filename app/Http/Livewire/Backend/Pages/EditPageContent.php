<?php

namespace App\Http\Livewire\Backend\Pages;

use Livewire\Component;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\PageContent;
use App\Models\CreatePage as appCreatePage;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;

class EditPageContent extends Component
{

    use UploadTrait; 
    use WithFileUploads;

    /*dynamic dependant deropdown*/
    public $menu=NULL;
    public $getMenus;
    public $subMenus;

    public  $name,$pageContentId,$sort_id, $records , $submenu,$heading,$sub_heading,$desc,$heading_guj,$sub_heading_guj,$desc_guj,$image,$editimage,$link,$sort,$status;

  
     public function mount($id)
	     {
	        $page = PageContent::findOrFail($id);
	        $this->pageContentId = $page->id;
	        $this->menu = $page->menu_id;
	        $this->name = $page->name;
	        $this->heading = $page->heading;
	        $this->sub_heading = $page->sub_heading;
	        $this->desc = $page->description;
          $this->heading_guj = $page->heading_guj;
          $this->sub_heading_guj = $page->sub_heading_guj;
          $this->desc_guj = $page->description_guj;
            $this->image = $page->image;
            $this->thumbnail = $page->thumbnail;
            $this->link = $page->link;
	    	$this->sort = $page->sort_id;
	    	$this->status = $page->status;

	 }

   public function editContent(){
      
      if(!is_null($this->editimage)){
      $image =  $this->editimage;
      // Define folder path
      $folder = '/uploads/page';
      $uploadedData = $this->uploadOne($image, $folder);

      $createPage = PageContent::find($this->pageContentId);
      $createPage->menu_id = $this->menu ?? Null;
      $createPage->name = $this->name ?? Null;
      $createPage->heading = $this->heading ?? Null;
      $createPage->sub_heading = $this->sub_heading ?? Null;
      $createPage->slug =  strtolower(str_replace(' ', '-',$this->heading))?? Null;
      $createPage->description = $this->desc ?? Null;
       $createPage->heading_guj = $this->heading_guj ?? Null;
      $createPage->sub_heading_guj = $this->sub_heading_guj ?? Null;
      $createPage->slug_guj =  strtolower(str_replace(' ', '-',$this->heading_guj))?? Null;
      $createPage->description_guj = $this->desc_guj ?? Null;
      $createPage->image = $uploadedData['file_name'] ?? NULL;
      $createPage->thumbnail = $uploadedData['thumbnail_name'] ?? NULL;
      $createPage->link = $this->link ?? Null;
      $createPage->sort_id =$this->sort ?? Null;
      $createPage->status = $this->status ?? Null;
      $createPage->save();
      }else{
      $createPage = PageContent::find($this->pageContentId);
      $createPage->menu_id = $this->menu ?? Null;
      $createPage->name = $this->name ?? Null;
      $createPage->heading = $this->heading ?? Null;
      $createPage->sub_heading = $this->sub_heading ?? Null;
      $createPage->slug =  strtolower(str_replace(' ', '-',$this->heading))?? Null;
      $createPage->description = $this->desc ?? Null;
       $createPage->heading_guj = $this->heading_guj ?? Null;
      $createPage->sub_heading_guj = $this->sub_heading_guj ?? Null;
      $createPage->slug_guj =  strtolower(str_replace(' ', '-',$this->heading_guj))?? Null;
      $createPage->description_guj = $this->desc_guj ?? Null;
      $createPage->link = $this->link ?? Null;
      $createPage->sort_id =$this->sort ?? Null;
      $createPage->status = $this->status ?? Null;
      $createPage->save();
      }
     
   
      return redirect()->route('page_content');    

    }	 

    public function render()
    {
    	 $this->getMenus = Menu::orderBy('sort_id','asc')->get();
        return view('livewire.backend.pages.edit-page-content')->layout('layouts.backend');
    }
}
