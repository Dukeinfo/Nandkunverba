<?php

namespace App\Http\Livewire\Backend\Gallery;

use Livewire\Component;
use App\Models\Categories;
use App\Models\Gallery;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class EditGallery extends Component
{
    use WithFileUploads;
    use UploadTrait;
    public $galleryId,$category_id, $name, $image,$editimage,$sort,$status ,$thumbnail;
    public  $categories,$title,$title_guj, $year;
     public function mount($id){
        $gallery = Gallery::findOrFail($id);
        $this->galleryId = $gallery->id;
        $this->category_id = $gallery->category_id;
        $this->title = $gallery->title;
        $this->title_guj = $gallery->title_guj;
        $this->year = $gallery->year;
        $this->image = $gallery->image;
        $this->thumbnail = $gallery->thumbnail;
        $this->sort = $gallery->sort_id;
    	$this->status = $gallery->status;
     }


     public function editGallery(){
        if(!is_null($this->editimage)){
            $image =  $this->editimage;
            // Define folder path
            $folder = '/uploads/gallery';
            $uploadedData = $this->uploadOne($image, $folder);

            $gallery = Gallery::find($this->galleryId);
            $gallery->category_id =$this->category_id ?? NULL;
            $gallery->title = $this->title;
            $gallery->title_guj = $this->year_guj;
            $gallery->image =$uploadedData['file_name'] ?? NULL;
            $gallery->thumbnail = $uploadedData['thumbnail_name']?? NULL;
            $gallery->sort_id =$this->sort;
            $gallery->status = $this->status;
            $gallery->save();
 
        }
        else{
            $gallery = Gallery::find($this->galleryId);
            $gallery->category_id =$this->category_id ?? NULL;
            $gallery->title = $this->title;
            $gallery->title_guj = $this->title_guj;
            $gallery->year = $this->year;
            $gallery->sort_id =$this->sort;
            $gallery->status = $this->status;
            $gallery->save();
        }
        return redirect()->route('manage_gallery'); 
        
     }


     private function resetInputFields(){
        $this->category_id = '';
        $this->image = '';
        $this->title = '';
        $this->year = '';
        $this->sort = '';
 

        $this->status = '';
    }
    public function render()
    {
        $this->categories = Categories::get();
        return view('livewire.backend.gallery.edit-gallery')->layout('layouts.backend');
    }
}
