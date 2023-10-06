<div>
          @php
$getRouteName =  Route::currentRouteName();
$pageHeading =  App\Models\PageHeading::where('status','Active')->where('pname',$getRouteName )->first(); 
@endphp
    <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">
                        @if($pageHeading)
                          @if(session()->get('language') == 'gujrati')
                          {{$pageHeading->pname_title_guj}}
                          @else
                          {{$pageHeading->pname_title}}
                          @endif
                        @endif
                    </span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">

@if(session()->get('language') == 'gujrati')
                        <span class="text-border text-border-width-2px">
                        @if($pageHeading)
                        {{$pageHeading->pname_heading_guj}}
                        @endif     
                        </span><br /> 
                        @if($pageHeading)
                        {{$pageHeading->pname_subheading_guj}}
                        @endif</h1>

@else
                        <span class="text-border text-border-width-2px">
                        @if($pageHeading)
                        {{$pageHeading->pname_heading}}
                        @endif     
                        </span><br /> 
                        @if($pageHeading)
                        {{$pageHeading->pname_subheading}}
                        @endif</h1>

@endif

                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

@php
$getRouteName =  Route::currentRouteName();
$pageTitle =  App\Models\PageHeading::where('status','Active')->where('pname',$getRouteName )->first(); 
@endphp
  <!-- start page title -->
      <section class="wow animate__fadeIn bg-seashell padding-30px-tb sm-padding-20px-tb page-title-small">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-8 col-lg-6 text-center text-lg-start">
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">
@if($pageTitle)
 @php
  $menuName =  App\Models\Menu::where('status','Active')->where('id',$pageTitle->menu_id )->first();
 @endphp     

         @if(session()->get('language') == 'gujrati')
              @if($menuName->id!=1)
                  {{ $menuName->name_guj}}
                @else
                  {{Str::title( $pageTitle->pname_guj) }}
                @endif
         @else
                @if($menuName->id!=1)
                  {{ $menuName->name}}
                @else
                  {{Str::title( $pageTitle->pname_eng) }}
                @endif
         @endif          
@endif
                    </h1>
                </div>
 
                <div
                    class="col-xl-4 col-lg-6 text-center text-lg-end breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-15px-top">
                    <ul>
                         @if(session()->get('language') == 'gujrati')
                           <li><a href="{{url('/')}}">ઘર</a></li>
                         @else
                         <li><a href="{{url('/')}}">Home</a></li>
                        @endif
           
                        @if($pageTitle) 
                            @if($pageTitle->menu_id!=1)    
                             <li><a href="javascript:void()">
                             @if(session()->get('language') == 'gujrati')
                              {{$pageTitle->Menu->name_guj}}
                             @else 
                                {{$pageTitle->Menu->name}}
                             @endif   
                             </a></li>
                            @endif
                        @endif

                         <li>
                            @if(session()->get('language') == 'gujrati')
                            {{Str::title( $pageTitle->pname_guj) }}
                            @else
                            {{Str::title( $pageTitle->pname_eng) }}
                            @endif
                        </li>
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
                            <h6 class="alt-font text-dark-purple font-weight-500 w-85 xl-w-100 text-uppercase mb-0">
                       @if(session()->get('language') == 'gujrati')
                          
                          આ વિભાગમાં
                        @else        
                            In this section
                        @endif </h6>
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
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">
                    @if(session()->get('language') == 'gujrati')
                        મીડિયામાં SNKKV
                    @else      
                        SNKKV in Media
                    @endif    
                      </span>
                        </div>
                    </div>

                   
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                  @if(session()->get('language') == 'gujrati')
                    ફોટો ગેલરી
                  @else     
                    Photo Gallery
                  @endif  
                  </h5>

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
                                    <a href="#" class="text-extra-dark-gray text-uppercase text-extra-dark-gray-hover text-medium alt-font font-weight-500 d-block line-height-26px">
                                      @if(session()->get('language') == 'gujrati')
                                      {{$category->name_guj}}  
                                      @else
                                      {{$category->name}}
                                      @endif

                                    </a>
                                    <div class="position-relative">
      @php
      $totalPhotos =App\Models\Gallery::where(['category_id'=> $category->id , 'status' => 'Active' ])->count();
      @endphp
                                        
                                        <span>{{$totalPhotos}} 
                                 @if(session()->get('language') == 'gujrati')
                                    ફોટોઝ
                                 @else
                                      Photos
                                 @endif       

                                      </span>
                                        <div class="interactive-banners-box-sub-title">
                                            <a href="{{url('/gallery-detail')}}/{{$category->id }}" class="btn btn-link thin btn-large text-tussock">
                                        @if(session()->get('language') == 'gujrati')
                                           ગેલરી જુઓ
                                        @else      
                                            View Gallery
                                        @endif    
                                          </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end interactive banner item -->
                     @endforeach
 
 @if(count($categories)!=count($total))
 <button type="button" class="btn btn-primary btn-lg btn-block" wire:click="loadMore">Load More</button>
 @endif


      @else
         @if(session()->get('language') == 'gujrati')
          <center><div class="alert alert-warning">
          <strong>માફ કરશો!</strong> કોઈ રેકોર્ડ મળ્યો નથી.
          </div>
          @else
          <center><div class="alert alert-warning">
          <strong>Sorry!</strong> No Record Found.
          </div>
           @endif                 
   @endif    
                    
       
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>
