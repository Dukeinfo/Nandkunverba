<?php

namespace App\Http\Livewire\Backend\Facilities;

use Livewire\Component;
use App\Models\ExpertService;
class ViewExpertServices extends Component
{

   
    public $detail,$detailguj,$link,$sort,$status;

    protected $rules = [
        'detail' => 'required',
        'detailguj' => 'required',
        'sort' => 'required| unique:expert_services,sort_id', 
        'status' => 'required', 
     
      ];
      protected $messages = [
          'detail.required' => 'Detail Required.',
          'detailguj.required' => 'Detail Required.',
          'sort.required' => 'Sort Required.',
          'status.required' => 'Status Required.',
      ];
    private function resetInputFields(){
        $this->detail = '';
        $this->detailguj = '';
        $this->link = '';
        $this->sort = '';
        $this->status = '';
    }

     public function addExpertServices()
    {

      $validatedData = $this->validate();

      $facilities = new ExpertService();
      $facilities->detail = $this->detail;
      $facilities->detailguj = $this->detailguj;
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

      $facilities = ExpertService::findOrFail($id);
      if(!is_null($facilities)){
        $facilities->delete();
      }

     }


    public function render()
    {
    	$this->records = ExpertService::orderBy('sort_id','asc')->get();	
        return view('livewire.backend.facilities.view-expert-services')->layout('layouts.backend');
    }
}
