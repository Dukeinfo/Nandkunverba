<div>
     <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">In the Media</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Photo</span><br /> Gallery</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start page title -->
    <section class="wow animate__fadeIn bg-seashell padding-30px-tb sm-padding-20px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Photo Gallery
                    </h1>
                </div>
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        @php
           $getRouteName =  Route::currentRouteName();
           $widget =  App\Models\Widget::where('status','Active')->where('pname',$getRouteName )->first();
           @endphp 
                                @if($widget) 
                            @if($widget->menu_id!=1)    
                           <li><a href="javascript:void()"> {{$widget->Menu->name}}</a></li>
                            @endif
                        @endif
                        <li>Photo Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->

    <section class="half-section">
        <div class="container position-relative">
            <div class="row">
                <div class="col-lg-3 d-lg-block d-md-block d-sm-none d-none">
                    <div id="sidebarWrap">
                        <div id="sidebar">
                            <h6 class="alt-font text-dark-purple font-weight-500 w-85 xl-w-100 text-uppercase mb-0">In this section</h6>
                            <div class="alt-font font-weight-500 d-flex">
                                <span class="flex-shrink-0 w-30px h-1px bg-dark-purple opacity-7 align-self-center margin-20px-right"></span>
                                <div class="flex-grow-1"><span class="text-dark text-uppercase">&nbsp;</span>
                                </div>
                            </div>
                            
                           @livewire('frontend.common.quick-links')
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">SNKKV in Media</span>
                        </div>
                    </div>

@php
$categories = App\Models\Categories::where('status', 'Active')->get();              
 @endphp                    
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Photo Gallery</h5>

                    <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-2">
                    
  @if(isset($categories) && count($categories)>0  )
                @foreach($categories as $key => $category)                                         
                        <!-- start interactive banner item -->
                        <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                            <div class="interactive-banners-style-08 box-shadow-large bg-white h-100 border-radius-6px overflow-hidden">
                                <div class="interactive-banners-box-image">
                                    <a href="javascript:void()">
                                        <img src="{{ isset($category->image) ? getGalleryImage($category->image) : asset('no_image.jpg') }}" alt="">
                                        
                                    </a>
                                </div>
                                <div class="interactive-banners-box-content padding-35px-all text-center xs-padding-25px-all">
                                    <a href="#" class="text-extra-dark-gray text-uppercase text-extra-dark-gray-hover text-medium alt-font font-weight-500 d-block line-height-26px">{{$category->name}}</a>
                                    <div class="position-relative">
      @php
      $totalPhotos =App\Models\Gallery::where(['category_id'=> $category->id , 'status' => 'Active' ])->count();
      @endphp
                                        
                                        <span>{{$totalPhotos}} Photos</span>
                                        <div class="interactive-banners-box-sub-title">
                                            <a href="{{url('/gallery-detail')}}/{{$category->id }}" class="btn btn-link thin btn-large text-tussock">View Gallery</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                     @endforeach
                      @else
         <center><div class="alert alert-warning">
        <strong>Sorry!</strong> No Record Found.
        </div>                  
               @endif    
                    
       
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>
