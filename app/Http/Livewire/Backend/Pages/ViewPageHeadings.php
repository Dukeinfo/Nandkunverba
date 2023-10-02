<?php

namespace App\Http\Livewire\Backend\Pages;

use Livewire\Component;
use App\Models\Menu;
use App\Models\PageHeading;
use Illuminate\Support\Facades\Auth;
class ViewPageHeadings extends Component
{

	public $menu_id,$pname,$pname_eng,$pname_guj,$pname_title,$pname_title_guj,$pname_heading,$pname_heading_guj,$pname_subheading,$pname_subheading_guj,$pname_subsecheading,$pname_subsecheading_guj,$sort_id,$status;

    protected $rules = [
    	'menu_id' => 'required',
        'pname' => 'required', 
        'pname_eng' => 'required', 
        'pname_guj' => 'required', 
        'pname_title' => 'required', 
        'pname_title_guj' => 'required', 
        'pname_heading' => 'required', 
        'pname_heading_guj' => 'required', 
        'pname_subheading' => 'required', 
        'pname_subheading_guj' => 'required', 
        'sort_id' => 'required| unique:page_headings,sort_id', 
        'status' => 'required', 
     
      ];
      protected $messages = [
      	  'menu_id.required' => 'Menu Required.',
          'pname.required' => 'Page Name Required.',
          'pname_eng.required' => 'Page Name Required.',
          'pname_guj.required' => 'Page Name Required.',
          'pname_title.required' => 'Page Title Required.',
          'pname_title_guj.required' => 'Page Title Required.',
          'pname_heading.required' => 'Page Heading Required.',
          'pname_heading_guj.required' => 'Page Heading Required.',
          'pname_subheading.required' => 'Page Sub Heading Required.',
          'pname_subheading_guj.required' => 'Page Sub Heading Required.',
          'sort_id.required' => 'Sort Required.',
          'status.required' => 'Status Required.',
      ];
    private function resetInputFields(){
    	$this->menu = '';
        $this->pname = '';
        $this->pname_eng = '';
        $this->pname_guj = '';
        $this->pname_title = '';
        $this->pname_title_guj = '';
        $this->pname_heading = '';
        $this->pname_heading_guj = '';
        $this->pname_subheading = '';
        $this->pname_subheading_guj = '';
        $this->sort_id = '';
        $this->status = '';
    }

    public function addPageHeading()
    {

      $pageHeading = $this->validate();

      $pageHeading = new PageHeading();
      $pageHeading->menu_id = $this->menu_id;
      $pageHeading->pname = $this->pname;
      $pageHeading->pname_eng = $this->pname_eng;
      $pageHeading->pname_guj = $this->pname_guj;
      $pageHeading->pname_title = $this->pname_title;
      $pageHeading->pname_title_guj = $this->pname_title_guj;
      $pageHeading->pname_heading = $this->pname_heading;
      $pageHeading->pname_heading_guj = $this->pname_heading_guj;
      $pageHeading->pname_subheading = $this->pname_subheading;
      $pageHeading->pname_subheading_guj = $this->pname_subheading_guj;
      $pageHeading->sort_id =$this->sort_id;
      $pageHeading->status = $this->status;
      $pageHeading->login =  Auth::user()->id;
      $pageHeading->ip_address =  Null;
      $pageHeading->save();

      $this->resetInputFields(); 

     $this->dispatchBrowserEvent('swal:modal', [
              'type' => 'success',  
              'message' => 'Successfully save!', 
          ]); 
    } 



     public function delete($id){
      $pageHeading = PageHeading::findOrFail($id);
      if(!is_null($pageHeading)){
      $pageHeading->status = 'Inactive';
      $pageHeading->save();
      }
     }


    public function render()
    {
     $this->getMenus = Menu::get();
     $this->records = PageHeading::orderBy('sort_id','asc')->get();
        return view('livewire.backend.pages.view-page-headings')->layout('layouts.backend');

    }
}
