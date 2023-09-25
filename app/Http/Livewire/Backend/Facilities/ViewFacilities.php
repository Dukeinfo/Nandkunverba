<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;
use App\Models\Facilities;
use Illuminate\Support\Facades\File;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use App\Traits\UploadTrait;
class ViewFacilities extends Component
{
    use UploadTrait;	
	  use WithFileUploads;

    public $title,$desc,$title_guj,$desc_guj,$link,$sort,$status;

    protected $rules = [
        'title' => 'required',
        'desc' => 'required', 
        'title_guj' => 'required',
        'desc_guj' => 'required', 
        'sort' => 'required| unique:facilities,sort_id', 
        'status' => 'required', 
     
      ];
      protected $messages = [
          'title.required' => 'Title Required.',
          'desc.required' => 'Message Required.',
          'title_guj.required' => 'Title Required.',
          'desc_guj.required' => 'Message Required.',
          'sort.required' => 'Sort Required.',
          'status.required' => 'Status Required.',
      ];
    private function resetInputFields(){
        $this->title = '';
        $this->desc = '';
        $this->title_guj = '';
        $this->desc_guj = '';
        $this->link = '';
        $this->sort = '';
        $this->status = '';
    }

   public function addFacilities()
    {

    $validatedData = $this->validate();

      $facilities = new Facilities();
      $facilities->title = $this->title;
      $facilities->description = $this->desc;
      $facilities->title_guj = $this->title_guj;
      $facilities->description_guj = $this->desc_guj;
      $facilities->link = $this->link;
      $facilities->sort_id =$this->sort;
      $facilities->status = $this->status;
      $facilities->save();

      $this->resetInputFields(); 

     $this->dispatchBrowserEvent('swal:modal', [
              'type' => 'success',  
              'message' => 'Successfully save!', 
          ]); 
          $this->emit('formSubmitted');
    } 

    public function delete($id){

      $facilities = Facilities::findOrFail($id);
      if(!is_null($facilities)){
        $facilities->delete();
      }

     }

    public function render()
    {
       $this->records = Facilities::orderBy('sort_id','asc')->get();	
       return view('livewire.backend.facilities.view-facilities')->layout('layouts.backend');
    }
}
