<div>
      <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">Facilities at SNKKV</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Co-Curricular</span><br /> Facilities</h1>
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
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Facilities
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
                        <li>Co-Curricular Facilities</li>
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
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">Facilities</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Co-Curricular Facilities</h5>

                    <p>The Institution has various facilities that cater to both the curricular and co-curricular needs of the students.</p>

                                <div class="wow animate__fadeIn">

                <!-- start item -->
@php
$cocurricularfacilities = App\Models\CoCurricularFacilities::where('status', 'Active')->get();              
@endphp 
@if(isset($cocurricularfacilities) && count($cocurricularfacilities)>0  )
        @foreach($cocurricularfacilities as $key => $facility) 
                <div class="row align-items-center justify-content-center">
@php                    
$countImages= App\Models\CoCurricularImages::where(['co_curricular_facility_id' => $facility->id])->count(); //count record
@endphp
            @if($countImages>0)
                    <!-- start slider section -->
                    <div class="col-12 col-lg-12 p-0 md-margin-30px-bottom wow animate__fadeIn" >
                        <div class="position-relative">
                            <div class="swiper-container slider-one-slide black-move" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".swiper-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "autoplay": { "delay": 4500, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide", "breakpoints": { "1200": { "slidesPerView": 2 }, "992": { "slidesPerView": 2 }, "768": { "slidesPerView": 1 } } }'>
                                <div class="swiper-wrapper">
               @php
                $imageFirst = App\Models\CoCurricularImages::where('co_curricular_facility_id', $facility->id)->orderBy('id', 'desc')->where('status', 'Active')->first();
                @endphp

                         @if($imageFirst)
                            <!-- start slider item -->
                            <div class="swiper-slide padding-15px-all">
                                <div class="h-100 bg-white box-shadow position-relative">
                
                       @if(isset($imageFirst->multi_images))
                       <img src="{{ getmultiple_images($imageFirst->multi_images) }}" alt="Image" />
                       @else
                       <img src="assets/images/gallery/library/lib1.jpg" alt="">
                      @endif  
               
                                </div>
                            </div>
                            <!-- end slider item -->
                    @endif     
                    
                @php
                $imageSecond = App\Models\CoCurricularImages::where('co_curricular_facility_id', $facility->id)->orderBy('id', 'desc')->where('status', 'Active')->skip(1)->first();
                @endphp     

                   @if($imageSecond) 
                            <!-- start slider item -->
                            <div class="swiper-slide padding-15px-all">
                                <div class="h-100 bg-white box-shadow position-relative">
                      @if(isset($imageSecond->multi_images))
                       <img src="{{ getmultiple_images($imageSecond->multi_images) }}" alt="Image" />
                       @else
                                    <img src="assets/images/gallery/library/lib2.jpg" alt="">
                       @endif              
                                </div>
                            </div>
                            <!-- end slider item -->
                    @endif       

                @php
                $imageThird = App\Models\CoCurricularImages::where('co_curricular_facility_id', $facility->id)->orderBy('id', 'desc')->where('status', 'Active')->skip(2)->first();
                @endphp  
                     @if($imageThird)  
                            <!-- start slider item -->
                            <div class="swiper-slide padding-15px-all">
                                <div class="h-100 bg-white box-shadow position-relative">
                    @if(isset($imageThird->multi_images))
                       <img src="{{ getmultiple_images($imageThird->multi_images) }}" alt="Image" />
                       @else       
                                    <img src="assets/images/gallery/library/lib3.jpg" alt="">
                   @endif                 
                                </div>
                            </div>
                            <!-- end slider item -->
                 @endif


                                </div>
                            </div>
                            <!-- start slider pagination -->
                            <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-right text-extra-large"></i></div>
                            <div class="swiper-button-previous-nav swiper-button-prev slider-navigation-style-08 dark"><i class="feather icon-feather-arrow-left text-extra-large"></i></div>
                            <!-- end slider pagination -->
                        </div>
                    </div>
                <!-- close slider section -->
            @endif
                    <div class="col-12 col-lg-12 wow animate__fadeIn" >
                        <h5 class="alt-font font-weight-600 text-dark-purple">{{$facility->title}}
                        </h5>                            
                        {!!$facility->description!!}
                    </div>
                </div>
                <!-- close iem item -->
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
