<div>
         <!-- start section -->
    <section class="parallax bg-extra-dark-gray p-0" data-parallax-background-ratio="0.5"
        style="background-image:url('assets/images/parallaxbg_header.jpg');">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-lg-9 text-center full-screen d-flex flex-column justify-content-center padding-8-rem-tb md-landscape-h-600px">
                    <span
                        class="alt-font letter-spacing-5px text-white text-uppercase font-weight-500 margin-35px-bottom">Testimonials</span>
                    <h1
                        class="alt-font font-weight-700 title-large text-shadow-double-large text-white text-uppercase mb-0 letter-spacing-minus-4px margin-4-half-rem-bottom sm-no-text-shadow sm-letter-spacing-minus-1-half">
                        <span class="text-border text-border-width-2px">Students</span><br /> Speaks</h1>
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
                    <h1 class="alt-font text-extra-dark-gray font-weight-500 no-margin-bottom d-inline-block">Testimonials
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
                        <li>Testimonials</li>
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
                    <div class="">
                        <div class="alt-font font-weight-500 my-3 d-flex">
                            <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                            <div class="flex-grow-1"><span class="text-tussock text-uppercase">Our Former Student Speaks</span>
                            </div>
                        </div>
                        <h1 class="alt-font font-weight-600 text-extra-dark-gray letter-spacing-minus-2px margin-4-rem-bottom"><span class="text-border text-border-color-black text-border-width-2px opacity-3">Proud</span> Stories</h1>
                        <div class="row row-cols-1 row-cols-lg-1 row-cols-md-1 justify-content-center">
@php
$testimonials = App\Models\Testimonials::where('status', 'Active')->get();              
@endphp       

 @if(isset($testimonials) && count($testimonials)>0  )
                @foreach($testimonials as $key => $record)
                            <!-- start testimonial item -->
                            <div class="col margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn">
                                <div class="feature-box feature-box-left-icon-middle padding-3-rem-tb padding-3-half-rem-lr bg-white border-radius-8px box-shadow-large box-shadow-extra-large-hover last-paragraph-no-margin lg-padding-3-rem-lr">
                                    <div class="feature-box-icon margin-20px-right">
                       @if (isset($record->photo))
                        <img class="rounded-circle w-60px h-60px" src="{{ asset('storage/uploads/testimonia/' . $record->photo) }}"  >
                        @else  
                        <img class="rounded-circle w-60px h-60px" src="assets/images/noimg.jpg" alt=""/>
                       @endif                 
                                    </div>
                                    <div class="feature-box-content line-height-22px">
                                     @include('livewire.frontend.common.rating')
                                        <div class="text-extra-dark-gray text-large alt-font font-weight-500 line-height-20px mb-2">{{$record->name}}</div>
                                        <p>{{$record->position}}</p>
                                    </div>
                                    <p class="margin-25px-top">{{$record->description}} </p>
                                </div>
                            </div>
                            <!-- end testimonial item -->   
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
        </div>
    </section>
</div>
