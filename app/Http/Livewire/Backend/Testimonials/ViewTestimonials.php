<?php

namespace App\Http\Livewire\Backend\Testimonials;

use Livewire\Component;
use App\Models\Testimonials;
use App\Traits\UploadTrait;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;



class ViewTestimonials extends Component
{
  
    use WithFileUploads;
    use UploadTrait;

    public $name,$name_guj,$image,$rating,$sort_id,$status,$desc,$desc_guj ,$position,$position_guj, $link, $records;
    
    public function render()
    {
    
        $this->records =  Testimonials::orderBy('sort_id' ,'asc')->get();
        
        return view('livewire.backend.testimonials.view-testimonials')->layout('layouts.backend');
    }

    protected $rules = [ 
        'name' => 'required', 
        //'image' => 'required', 
        'position' => 'required', 
        'rating' => 'required', 
        'sort_id' => 'required| unique:testimonials,sort_id',
        'status' => 'required', 
        'desc' => 'required', 
        'name_guj' => 'required',
        'position_guj' => 'required',
        'desc_guj' => 'required', 
     
      ];
      protected $messages = [
          'name.required' => 'Name Required.',
          //'image.required' => 'Image Required.',
          'rating.required' => 'Rating Required.',
          'sort_id.required' => 'Sort Required.',
          'status.required' => 'Status Required.',
          'desc.required' => 'Description Required.',
          'name_guj.required' => 'Name Required.',
          'desc_guj.required' => 'Name Required.', 
      ];
    private function resetInputFields(){
        $this->name = '';
        //$this->image = '';
        $this->position = '';
        $this->rating = '';
        $this->sort_id = '';
        $this->status = '';
        $this->desc = '';
        $this->name_guj = '';
        $this->position_guj = '';
        $this->desc_guj = '';
        $this->link = '';
    }


    public function addTestimonials(){

     $validatedData = $this->validate();
     if(!is_null($this->image)){
      $image =  $this->image;
      // Define folder path
      $folder = '/uploads/testimonia';
      $uploadedData = $this->uploadOne($image, $folder);

    }   




      $testimonials = new Testimonials();
      $testimonials->name = $this->name;
      $testimonials->slug =  strtolower(str_replace(' ', '-',$this->name));
      $testimonials->photo = $uploadedData['file_name'] ?? Null;
      $testimonials->thumbnail = $uploadedData['thumbnail_name']?? Null;
      $testimonials->raqting =$this->rating;
      $testimonials->sort_id =$this->sort_id;
      $testimonials->status = $this->status;
      $testimonials->position = $this->position;
      $testimonials->description = $this->desc;
      $testimonials->name_guj = $this->name_guj;
      $testimonials->position_guj = $this->position_guj;
      $testimonials->description_guj = $this->desc_guj;
      $testimonials->slug_guj =  strtolower(str_replace(' ', '-',$this->name_guj));
      $testimonials->link = $this->link;
      $testimonials->save();
      $this->resetInputFields();
        $this->dispatchBrowserEvent('swal:modal', [
                'type' => 'success',  
                'message' => 'Successfully save!', 
            ]); 
            $this->emit('formSubmitted');
    }

     public function delete($id){
      $testimonial = Testimonials::findOrFail($id);
      if(!is_null($testimonial)){
        $testimonial->delete();
      }

     }

}
