<div>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Testimonials</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Testimonials</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-transparent border-bottom py-3">
                            <h4 class="card-title">Update Testimonial</h4>
                            <p class="card-title-desc mb-0">Fill out the particulars in order to add or update.</p>
                        </div>
                        <div class="card-body">
                    
                            <!--form starts-->
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Name of Student or Alumni (Eng)</label>
                                        <input type="text" class="form-control" id=""  wire:model="name" placeholder="">
                                        @error('name') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Name of Position (Eng)</label>
                                        <input type="text" class="form-control" id=""  wire:model="position" placeholder="position">
                                        @error('position') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Name of Student or Alumni (Guj)</label>
                                        <input type="text" class="form-control" id=""  wire:model="name_guj" placeholder="Name of Student">
                                        @error('name_guj') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Name of Position (Guj)</label>
                                        <input type="text" class="form-control" id=""  wire:model="position_guj" placeholder="position">
                                        @error('position_guj') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                               
                            
                               
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="" class="form-label">Profile Photo</label>
                                        <input type="file" wire:model="editimage" id="" class="form-control">

                                     @if(isset($editimage))  
                                         <img  src="{{$editimage->temporaryUrl()}}" width="200" alt="---"  width="100" height="70">  
                                     @else
                                     @php 
$thumb = !empty($thumbnail) ?  getThumbnail($thumbnail) : url('admin_assets/images/no-img.jpg');
@endphp                                      
<img src="{{$thumb}}" alt="" class="border" width="100" height="70">

                                    @endif
                                        @error('editimage') <span class="error">{{ $message }}</span> @enderror
                                        
                                    </div>
                                </div>

                                  <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Rating</label>
                                        <select wire:model="rating" class="form-select">
                                            <option value="">Select</option>
                                            <option value="1">1</option>
                                           <option value="2">2</option>
                                           <option value="3">3</option>
                                           <option value="4">4</option>
                                           <option value="5">5</option>
                                        </select>
                                        @error('rating') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                  <div class="col-md-12">
                                    <div class="mb-3" >
                                        <label class="form-label">Message</label>
                                       <!--  <textarea wire:model="desc" class="form-control" name="" id="" cols="" rows="6"></textarea> -->

                                        <div wire:ignore>
        <textarea id="editor" wire:model="desc" placeholder="Description of Event" class="form-control xtra-cat"></textarea>
    </div>  
    <script>
                                    document.addEventListener('livewire:load', function () {
                                        CKEDITOR.replace('editor');
                                
                                        CKEDITOR.instances.editor.on('change', function () {
                                            @this.set('desc', CKEDITOR.instances.editor.getData());
                                        });
                                    });
                                </script>
    @error('desc') <span class="error">{{ $message }}</span> @enderror                                     
                                    </div>
                                </div>

                                 <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label">Link</label>
                                    <input type="text" class="form-control" id="" wire:model="link"  placeholder="Link">
                                    @error('link') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Sort Order#</label>
                                        <input type="number" class="form-control" id="" wire:model="sort_id">
                                        @error('sort_id') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-3">
                                        <label class="form-label">Status</label>
                                        <select wire:model="status" class="form-select">
                                            <option value="">Select</option>
                                            <option value="Active">Active</option>
                                            <option value="Inactive"> Inactive </option>
                                        </select>
                                        @error('status') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                              
                                <div wire:loading.remove>
                                    <button type="submit" wire:click="editTestimonials" class="btn btn-primary w-md">Submit</button>
                                </div>
                                 <div wire:loading wire:target="editTestimonials">
                                        <img src="{{asset('loading.gif')}}" width="30" height="30" class="m-auto mt-1/4">

                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            
            
            
        </div>
        <!-- container-fluid -->
    </div>
</div>
