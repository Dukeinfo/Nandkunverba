
<div>
    @push('keywords')
    <meta name="keywords" content="{{$seo_keywords ?? ''}}">
    @endpush
     <!-- start slider section -->
    <section class="home-vertical-portfolio p-0 full-screen w-100 position-relative">
        <div class="swiper-container vertical-white-move slider-vertical swiper-container-vertical"
            data-slider-options='{ "slidesPerView": 1, "spaceBetween": 0, "direction": "vertical", "autoplay": { "delay": 5000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-vertical-pagination", "clickable": true }, "allowTouchMove": true, "mousewheel": false, "loop": true, "iOSEdgeSwipeThreshold": 200, "keyboard": { "enabled": true, "onlyInViewport": true } }'
            data-slider-md-direction="horizontal" data-slider-number-pagination="1">
            <div class="swiper-wrapper">
         <!-- start swiper slide -->
         @if(isset($sliders) )
            @foreach($sliders as $slider)
              @if(isset($slider->image))   
                <div class="swiper-slide cover-background mb-0"
                    style="background-image: url({{ getsliderImages($slider->image ) ?? '' }})">
                    <div
                        class="container-fluid padding-7-half-rem-lr lg-padding-5-half-rem-lr xs-padding-15px-lr h-100">
                        <div class="row h-100">
                            <div
                                class="col-12 swiper-bottom-content d-flex flex-column justify-content-center text-start padding-9-rem-tb md-padding-5-rem-tb position-relative">
                   <!-- for eng  -->
                    <a href="javascript:void();" class="w-30 xl-w-40 md-w-50 xs-w-80">
                    <h1 class="altr-font font-weight-300 text-white mb-0">
                    <span class="font-weight-700 d-block">{{Str::limit($slider->heading, 13) ?? 'Discover'}}</span> {{Str::limit($slider->subheading, 17) ?? 'Brilliance'}}    </h1></a> 

 
 
                                <div
                                    class="swiper-right-content position-absolute right-15px bottom-50px w-45 padding-5-half-rem-bottom md-w-60 xs-w-70 md-no-padding-bottom sm-bottom-30px">
                                    <div class="d-flex align-items-center align-self-end justify-content-end w-100">
                                        <span class="col bg-white h-1px opacity-3 d-none d-sm-inline-block"></span>
                                <!-- for eng -->        
                                <span
                                class="alt-font text-large text-white padding-3-rem-left xs-padding-2-rem-left">
                                 {{Str::limit($slider->detail, 40) ?? 'Education fosters growth, inside and out.'}}        </span>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           @endif
            @endforeach
            @endif     
                <!-- end swiper slide -->
                
            </div>
            <!-- start slider pagination -->
            <div
                class="swiper-pagination swiper-vertical-pagination swiper-pagination-medium swiper-light-pagination d-flex flex-column align-items-center margin-3-half-rem-right lg-margin-1-rem-right">
            </div>
            <!-- end slider pagination -->
            <!-- start slider number pagination -->
            <div class="swiper-number-pagination">
                <div class="swiper-pagination-current"></div>
                <div class="swiper-pagination-total"></div>
            </div>
            <!-- end slider number pagination -->
        </div>
    </section>
    <!-- end slider section -->



@php
$categoryFirst = App\Models\Whyus::where('category', '1')->where('status', 'Active')->first();              
 @endphp

    <!-- start section common section1-->
    <section class="big-section overlap-height wow animate__fadeIn">
        <div class="container">
            <div class="row align-items-center overlap-gap-section">
                <div class="col-12 col-lg-5 col-md-8 order-md-2 order-lg-1 sm-margin-5-rem-bottom wow animate__fadeIn"
                    data-wow-delay="0.1s">
                    <div class="alt-font font-weight-500 margin-30px-bottom d-flex"><span
                            class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">{{$categoryFirst->title ?? 'Historical Foundation'}}</span></div>
                    </div>
                    
                    <h4
                        class="alt-font font-weight-600 text-dark-purple letter-spacing-minus-1px margin-30px-bottom sm-margin-20px-bottom">
                        {{$categoryFirst->title ?? 'Shri Nandkunverba Kshatriya Kanya Vidyalaya'}}</h4>
                     @if(isset($categoryFirst->description) )
                        
                            {!! isset($categoryFirst->description) 
                             ? 
                             str_limit($categoryFirst->description, $limit=276 )
                              : ''!!}

                        
                        @else 
                    <p class="w-80 lg-w-100">The School was founded in the year 1917 by
                        the late <strong>HH Maharani Saheba Shri Nandkunverba Saheb</strong> of Bhavnagar. In an era of "purdah system"
                        for all Rajput women, this foresighted Maharani abolished it for the women of Bhavnagar and
                        decided to educate the girls of the community.</p>
                     @endif    
                    <a href="{{$categoryFirst->link ?? 'javascript:void()'}}" class="btn btn-fancy btn-medium btn-dark-purple">Explore More<i
                            class="fas fa-arrow-right right-icon"></i></a>
                </div>
                <div class="col-12 col-lg-4 order-md-1 order-lg-2 md-margin-5-rem-bottom wow animate__fadeIn"
                    data-wow-delay="0.3s">
                    @if (isset($categoryFirst->image))
                        <img src="{{ asset('storage/uploads/whyus/' . $categoryFirst->image) }}"  alt="Pinegrove">
                        @else
                       <img src="assets/images/maharaja.jpg" alt="" class="border-radius-6px" />
                    @endif 
                </div>
                <div class="col-12 col-lg-2 offset-md-1 col-md-3 order-md-3 wow animate__fadeIn" data-wow-delay="0.5s">
                    <div class="row align-items-center justify-content-center">
                        <!-- start counter item -->
                        <div class="col-12 text-center text-sm-start">
                            <div
                                class="d-flex flex-row align-item-start margin-15px-bottom xs-margin-10px-bottom justify-content-center justify-content-sm-start">
                                <h4 class="vertical-counter d-inline-flex text-dark-purple alt-font appear font-weight-600 letter-spacing-minus-2px mb-0 sm-letter-spacing-minus-1-half"
                                    data-to="{{$categoryFirst->yearexcellence ?? '105'}}"></h4><span
                                    class="text-dark-purple title-extra-small font-weight-500 margin-5px-left">+</span>

                            </div>
                            <span class="alt-font text-medium text-uppercase d-block">Years of<br>Excellence</span>
                            <div class="w-100 h-1px bg-medium-gray margin-2-rem-tb xs-margin-3-rem-tb"></div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col-12 text-center text-sm-start">
                            <div
                                class="d-flex flex-row align-item-start margin-15px-bottom xs-margin-10px-bottom justify-content-center justify-content-sm-start">
                                <h4 class="vertical-counter d-inline-flex text-dark-purple alt-font appear font-weight-600 letter-spacing-minus-2px mb-0 sm-letter-spacing-minus-1-half"
                                    data-to="{{$categoryFirst->expteachers ?? '50'}}"></h4><span
                                    class="text-dark-purple title-extra-small font-weight-500 margin-5px-left">+</span>
                            </div>
                            <span class="alt-font text-medium text-uppercase d-block">Experienced<br>Teachers</span>
                            <div class="w-100 h-1px bg-medium-gray margin-2-rem-tb xs-margin-3-rem-tb"></div>
                        </div>
                        <!-- end counter item -->
                        <!-- start counter item -->
                        <div class="col-12 text-center text-sm-start">
                            <div
                                class="d-flex flex-row align-item-start margin-15px-bottom xs-margin-10px-bottom justify-content-center justify-content-sm-start">
                                <h4 class="vertical-counter d-inline-flex text-dark-purple alt-font appear font-weight-600 letter-spacing-minus-2px mb-0 sm-letter-spacing-minus-1-half"
                                    data-to="{{$categoryFirst->notalumna ?? '25'}}"></h4><span
                                    class="text-dark-purple title-extra-small font-weight-500 margin-5px-left">+</span>
                            </div>
                            <span class="alt-font text-medium text-uppercase d-block">Notable<br>Alumna</span>
                        </div>
                        <!-- end counter item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end common section1 section -->


@php
$facilities = App\Models\Facilities::where('status', 'Active')->get();              
@endphp

    <!--  section start facility -->
    <section class="bg-seashell position-relative padding-thirteen-top lg-padding-nine-top">
        <div class="container">
            <div class="row justify-content-lg-center">
                <div class="col-12 overflow-hidden alt-font font-weight-600 text-white text-overlap-style-02 d-none d-xl-block wow animate__fadeInDown"
                    data-wow-delay="0.2s">Infrastructure</div>
                <div
                    class="col-12 col-lg-6 col-sm-8 text-lg-center margin-6-rem-bottom lg-margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-5-rem-bottom wow animate__fadeIn">
                    <div
                        class="d-flex flex-row align-items-center justify-content-center text-center margin-10px-bottom">
                        <span class="w-25px h-1px bg-tussock opacity-7"></span>
                        <div class="alt-font text-uppercase font-weight-500 text-tussock padding-10px-lr">Facilities We Provide</div>
                        <span class="w-25px h-1px bg-tussock opacity-7"></span>
                    </div>
                    <h5 class="alt-font font-weight-600 text-dark-purple letter-spacing-minus-1px m-0">Facility Spotlight: Unveiling Excellence in Infrastructure</h5>
                </div>
            </div>
 @php
$expertservices = App\Models\ExpertService::where('status', 'Active')->first();              
 @endphp           
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-xl-3 col-lg-4 position-relative padding-2-rem-top md-no-padding-top md-margin-5-rem-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <span class="alt-font margin-20px-bottom d-block text-uppercase font-weight-500 text-tussock">Expert
                        services</span>

                     @if(isset($expertservices->detail) )
                        
                     {!! isset($expertservices->detail) 
                             ? 
                             str_limit($expertservices->detail, $limit=115 )
                              : ''!!}
                    @else     
                    <p class="margin-40px-bottom md-margin-20px-bottom">The Institution has various facilities that cater to both the curricular and co-curricular needs of the students.</p>
                    @endif


                    <a href="{{$expertservices->link ?? 'javascript:void()'}}" class="btn btn-small btn-tussock">View more</a>
                    <!-- <div class="swiper-button-next-nav-2 swiper-button-next slider-navigation-style-06"><i
                            class="line-icon-Arrow-OutRight"></i></div>
                    <div class="swiper-button-previous-nav-2 swiper-button-prev slider-navigation-style-06"><i
                            class="line-icon-Arrow-OutLeft"></i></div> -->
                </div>
                <div class="col-12 col-lg-8 offset-xl-1 wow animate__fadeInRight" data-wow-delay="0.4s">
                    <div class="testimonials-carousel-style-02 swiper-simple-arrow-style-2">
                        <div class="swiper-container black-move"
                            data-slider-options='{ "loop": true, "slidesPerView": 1, "spaceBetween": 0, "observer": true, "observeParents": true, "autoplay": { "delay": 3000, "disableOnInteraction": false },  "navigation": { "nextEl": ".swiper-button-next-nav-2", "prevEl": ".swiper-button-previous-nav-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
              @if(isset($facilities) && count($facilities)>0  )
                @foreach($facilities as $key => $facility)                
                 <!-- start fancy text box slider item -->
                <div class="swiper-slide text-center padding-15px-all">
                                    <div
                                        class="feature-box text-start feature-box-show-hover box-shadow-small-hover feature-box-bg-white-hover border-all border-color-black-transparent overflow-hidden">
                                        <div
                                            class="feature-box-move-bottom-top padding-3-rem-tb padding-4-rem-lr md-padding-2-rem-tb md-padding-2-half-rem-lr sm-padding-3-rem-tb sm-padding-4-half-rem-lr">
                                            <h4
                                                class="feature-box-icon alt-font font-weight-500 text-tussock margin-20px-bottom letter-spacing-minus-2px">
                                                {{$key+1}}</h4>
                                            <div class="feature-box-content last-paragraph-no-margin">
                                                <span
                                                    class="text-dark-purple text-extra-medium font-weight-600 text-uppercase d-block margin-10px-bottom alt-font">
                                                {{$facility->title ?? ''}}      
                                                </span>
                                                <p>{!!$facility->description ?? ''!!}
                                                </p>
                                            </div>
                                            <div class="move-bottom-top margin-15px-top">
                                                <a href="#"
                                                    class="btn btn-link p-0 btn-extra-large text-tussock text-tussock-hover md-margin-auto-lr">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                     </div>
                                <!-- end fancy text box slider item
                                 -->
                                
                  @endforeach                  
               @endif                 
                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!--  end facility section  -->

@php
$categorySecond = App\Models\Whyus::where('category', '2')->where('status', 'Active')->first();              
 @endphp
    <!-- start section common section2-->
    <section class="overflow-visible cover-background wow animate__fadeIn"
        style="background-image:url('assets/images/home-interior-design-about-bg.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-lg-6 col-md-10 position-relative margin-twenty-five-top lg-margin-30px-top md-margin-9-rem-bottom sm-margin-9-rem-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="position-absolute right-15px bottom-0px w-65 lg-bottom-minus-50px xs-bottom-minus-25px"
                        data-parallax-layout-ratio="1.1">
               @if(isset($categorySecond->id))
                @php
                $imageFirst = App\Models\MultipleImages::where('whyus_id', $categorySecond->id)->where('status', 'Active')->first();
                @endphp
                       @if(isset($imageFirst->multi_images))
                       <img src="{{ getmultiple_images($imageFirst->multi_images) }}" alt="Image" />
                       @else
                        
                      @endif 
               @else
                <img src="assets/images/maharani-saheb.jpg" alt="" /> 

               @endif            
                    </div>
                    <div class="w-50 overflow-hidden position-relative md-w-70">
              @if(isset($categorySecond->id))
                @php
                $imageSecond = App\Models\MultipleImages::where('whyus_id', $categorySecond->id)->where('status', 'Active')->skip(1)->first();
                @endphp
                       @if(isset($imageSecond->multi_images) )
                       <img src="{{ getmultiple_images($imageSecond->multi_images) }}" alt="Image" />
                       @else
                       
                 @endif  
              @else
              <img src="assets/images/about-img2.jpg" alt="" />


               @endif          
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1 col-md-10 wow animate__fadeIn" data-wow-delay="0.4s">
                    <div class="alt-font font-weight-500 margin-30px-bottom d-flex"><span
                            class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">{{$categorySecond->title ?? "Founder's Philosophy"}} </span>

                        </div>
                    </div>

                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">{{$categorySecond->sub_title ?? 'HH Maharani Saheba Shri Nandkunverba Saheb'}}</h5>

                    @if(isset($categorySecond->description) )
                        
                        {!!Str::limit($categorySecond->description, 488) ?? ''!!}    
                        
                    @else 
                    <p class="w-75 xl-w-100">Shri Nandkunverba Kshatriya Kanya Vidyalaya was founded in the year 1917 by the late HH Maharani Saheba Shri Nandkunverba Saheb of Bhavnagar who believed in the emancipation of women. </p>
                    <p class="w-75 xl-w-100">At a time when women were confined to the four walls of their home, Maharani Saheba, took a bold decision to abolish the purdah system and provide girls with a holistic education. A feminist before the term began to trend, the institute strives for all round development and equal opportunities for girls.</p>

                    @endif
                    <a href="{{$categorySecond->link ?? 'javascript:void()'}}" class="btn btn-fancy btn-medium btn-dark-purple margin-20px-top" target="_blank">Know More</a>

                </div>
            </div>
        </div>
    </section>
    <!-- end common section2 section -->

@php
$lifeat = App\Models\Coachings::where('status', 'Active')->get();
@endphp
    <!-- start section life at snkkv-->
    <section id="specialization" class="bg-seashell wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-md-6 text-center margin-4-half-rem-bottom md-margin-3-rem-bottom wow animate__fadeIn">
                    <div
                        class="d-flex flex-row align-items-center justify-content-center text-center margin-10px-bottom">
                        <span class="w-25px h-1px bg-tussock opacity-7"></span>
                        <div class="alt-font text-uppercase font-weight-500 text-tussock padding-10px-lr">Life at SNKKV </div>
                        <span class="w-25px h-1px bg-tussock opacity-7"></span>
                    </div>
                    <h5 class="alt-font font-weight-600 text-dark-purple letter-spacing-minus-1px">Nurturing Minds, Enriching Souls</h5>
                    <p class="w-80 mx-auto md-w-100 mb-0">Fostering Academic Achievement, Emotional Well-being, and Lifelong Success with Growth in Mind, Body and Spirit</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
        @if(isset($lifeat) && count($lifeat) >0 )
            @foreach($lifeat as $life)
                <div class="col-12 col-lg-4 col-md-6 col-sm-8 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="interactive-banners-style-05">
                        <div class="interactive-banners-image">
                            <img src="{{isset($life->image) ? getCoaching($life->image) : asset('no_image.jpg')}}" alt="" />
                      
                            <div class="overlay-bg bg-gradient-midium-gray-transparent opacity-medium"></div>
                            <a href="#"
                                class="section-link icon-box-circled w-35px h-35px line-height-32px text-center text-white border-all border-width-2px border-color-white position-absolute bottom-50px right-45px z-index-1 lg-right-30px xs-bottom-25px">
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                        <div
                            class="interactive-banners-content padding-3-half-rem-all lg-padding-2-half-rem-lr xs-padding-4-rem-all ">
                            <div class="overlayer-box bottom-0px top-auto opacity-9 bg-extra-dark-gray"></div>
                            <div class="d-table h-100 w-100">
                                <div class="d-table-cell align-bottom padding-35px-right">
                                    <span
                                        class="text-white d-block text-extra-large margin-15px-bottom alt-font font-weight-500">{{$life->title ?? ''}}</span>
                                    <p class="interactive-banners-content-text">{!!Str::limit($life->description, 220) ?? ''!!}</p>
                                    <a href="{{$life->link ?? 'javascript:void()'}}" class="btn btn-small btn-tussock" target="_blank">View more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         @endforeach
         @else
         <center><div class="alert alert-warning">
        <strong>Sorry!</strong> No Record Found.
        </div>
       @endif       
            
            </div>
        </div>
    </section>
    <!-- end section life at snkkv-->

@php
$testimonials = App\Models\Testimonials::where('status', 'Active')->get();
@endphp
    <!-- start section studentspeaks-->
    <section class="pt-lg-0 overflow-visible wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center overlap-section">
                    <div class="overlap-section-inner">
                        <h3
                            class="alt-font text-salmon-rose title-large letter-spacing-minus-3px font-weight-700 mb-0">
                            studentspeaks</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- end section studentspeaks-->
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
             @if(isset($testimonials) && count($testimonials) >0 )
                <div
                    class="col-12 col-lg-10 position-relative padding-10-rem-lr sm-padding-7-rem-lr xs-padding-6-rem-lr wow animate__fadeIn">
                    <div class="swiper-container slider-custom-text black-move"
                        data-slider-options='{ "loop": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav" }, "effect": "slide" }'>
                        <div class="swiper-wrapper">
                             @foreach($testimonials as $testim)     
                            <!-- start testimonial item -->
                            <div class="swiper-slide">
                                <div class="d-flex flex-column">
                                    <div class="align-self-center text-center w-100">
                                        <img alt="" src="assets/images/home-yoga-meditation-icon-quote.jpg"
                                            class="w-70px margin-50px-bottom xs-w-50px xs-margin-25px-bottom">
                                        <p
                                            class="margin-40px-bottom md-line-height-30px w-90 d-inline-block xs-margin-25px-bottom">
                                           {!!Str::limit($testim->description, 481) ?? ''!!} </p>
                                        <span
                                            class="alt-font font-weight-600 text-tussock text-uppercase d-block">{{$testim->name ?? ''}}</span>
                                        <span class="alt-font text-small text-uppercase d-block">{{$testim->position ?? ''}} </span>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            @endforeach 
                          
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <div
                        class="swiper-button-next-nav slider-custom-text-next swiper-button-next font-weight-600 alt-font text-small text-dark-purple">
                        NEXT</div>
                    <div
                        class="swiper-button-previous-nav slider-custom-text-prev swiper-button-prev font-weight-600 alt-font text-small text-dark-purple">
                        PREV</div>
                    <!-- end slider pagination -->
                </div>
                 @else
         <center><div class="alert alert-warning">
        <strong>Sorry!</strong> No Record Found.
        </div>
                 @endif 
            </div>
        </div>
    </section>

@php
$knowledge = App\Models\KnowledgeHome::where('status', 'Active')->get();
@endphp
   <!-- start section activity-->
    <section class="bg-extra-dark-gray fancy-box-background big-section cover-background p-0 wow animate__fadeIn"
        style="background-image: url('assets/images/widget_bg.jpg');">
        <div class="opacity-very-light opacity-3 bg-extra-dark-gray"></div>
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-xl-4 row-cols-sm-2 align-items-center justify-content-center">
                @if(isset($knowledge) && count($knowledge) >0 )  
                 @foreach($knowledge as $know)    
                <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent lg-border-bottom xs-no-border-right wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="bg-banner-image cover-background"
                        style="background-image: url({{ getKnowledgeHome($know->image) }})">
                        
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div
                            class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6
                                class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">
                                {{$know->title ?? ''}}</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                             @if(isset($know->description) )       
                             <p class="m-0 align-self-center w-75 text-white opacity-6">    {{ Str::of(strip_tags($know->description))->limit(77)}}</p>
                            @endif          
                                    <span class="align-self-center text-center ms-auto"><a href="#"
                                            class="d-inline-block line-height-40px rounded-circle bg-extra-dark-gray h-40px w-40px"><i
                                                class="feather icon-feather-arrow-right text-white"></i></a></span>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-tussock"></div>
                        </div>
                    </div>
                </div>
                  @endforeach 
              @else
              <!-- for display default data  -->
              <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent lg-border-bottom xs-no-border-right wow animate__fadeIn"
                    data-wow-delay="0.2s">
                    <div class="bg-banner-image cover-background"
                        style="background-image: url(assets/images/safe_learning.jpg)">
                        
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div
                            class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6
                                class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">
                                Safe learning environment</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-75 text-white opacity-6">Building a secure foundation for lifelong learning, where dreams take flight.</p>
                                    <span class="align-self-center text-center ms-auto"><a href="#"
                                            class="d-inline-block line-height-40px rounded-circle bg-extra-dark-gray h-40px w-40px"><i
                                                class="feather icon-feather-arrow-right text-white"></i></a></span>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-tussock"></div>
                        </div>
                    </div>
                </div>
                      <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent lg-border-bottom lg-no-border-right wow animate__fadeIn"
                    data-wow-delay="0.4s">
                    <div class="bg-banner-image cover-background"
                        style="background-image: url(assets/images/holistic_development.jpg)">
                        
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div
                            class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6
                                class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">
                                Complete Holistic Development</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-75 text-white opacity-6">Nurturing the mind, enriching the heart, and strengthening the body.</p>
                                    <span class="align-self-center text-center ms-auto"><a href="#"
                                            class="d-inline-block line-height-40px rounded-circle bg-extra-dark-gray h-40px w-40px"><i
                                                class="feather icon-feather-arrow-right text-white"></i></a></span>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-tussock"></div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col p-0 fancy-box-item border-right border-color-dark-white-transparent sm-border-bottom xs-no-border-right wow animate__fadeIn"
                    data-wow-delay="0.6s">
                    <div class="bg-banner-image cover-background"
                        style="background-image: url(assets/images/counselling.jpg)">
                        
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div
                            class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6
                                class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">
                                Wellbeing and Counselling</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-75 text-white opacity-6">Taking Steps Toward a Happier, Healthier you with Counseling.</p>
                                    <span class="align-self-center text-center ms-auto"><a href="#"
                                            class="d-inline-block line-height-40px rounded-circle bg-extra-dark-gray h-40px w-40px"><i
                                                class="feather icon-feather-arrow-right text-white"></i></a></span>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-tussock"></div>
                        </div>
                    </div>
                </div>
                
                
                <div class="col p-0 fancy-box-item wow animate__fadeIn" data-wow-delay="0.8s">
                    <div class="bg-banner-image cover-background"
                        style="background-image: url(assets/images/health.jpg)">
                        
                    </div>
                    <div class="fancy-text-box h-800px fancy-text-box-style-03 xl-h-500px xs-h-250px">
                        <div
                            class="fancy-text-content padding-5-rem-lr padding-4-half-rem-tb xl-padding-2-rem-lr xl-padding-1-half-rem-tb lg-padding-4-rem-all">
                            <h6
                                class="alt-font font-weight-600 text-white text-uppercase margin-20px-bottom w-80 xl-w-100 lg-w-60 md-w-80">
                                Health and Wellness</h6>
                            <div class="fancy-text-box-bottom justify-content-center">
                                <div class="d-flex">
                                    <p class="m-0 align-self-center w-75 text-white opacity-6">Mind, Body, Spirit: Discover the Power of Holistic Health and Trifecta of Wellness.</p>
                                    <span class="align-self-center text-center ms-auto"><a href="#"
                                            class="d-inline-block line-height-40px rounded-circle bg-extra-dark-gray h-40px w-40px"><i
                                                class="feather icon-feather-arrow-right text-white"></i></a></span>
                                </div>
                            </div>
                            <div class="feature-box-overlay bg-tussock"></div>
                        </div>
                    </div>
                </div> 


              @endif
          
                
            </div>
        </div>
    </section>
   <!-- end section activity-->

@php
$newsevents = App\Models\BoardMembers::where('status', 'Active')->get();
@endphp
    <!-- start section news and events-->
    <section class="bg-seashell wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-md-8 text-center margin-5-rem-bottom md-margin-3-rem-bottom">
                    <h4 class="alt-font font-weight-600 text-dark-purple letter-spacing-minus-1px">In the News
                    </h4>
                    <p class="w-80 mx-auto md-w-100 mb-0">The institute is participating in various upcoming events held in and out of campus.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 blog-content">
                    <ul
                        class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                        <li class="grid-sizer"></li>
                      @if(isset($newsevents) && count($newsevents) >0 )  
                        @foreach($newsevents as $news)      
                        <!-- start blog item -->
                        <li class="grid-item wow animate__fadeIn" data-wow-delay="0.2s">
                            <div class="blog-post bg-white">
                                <div class="blog-post-image bg-medium-slate-blue">
                                    <a href="javascript:void()" title=""><img src="{{ getboardmembers($news->image) }}"
                                            alt=""></a>
                                </div>
                                <div class="post-details padding-3-rem-lr padding-2-half-rem-tb">
                                    <a href="javascript:void()"
                                        class="alt-font text-small text-tussock-hover d-inline-block margin-10px-bottom">{{date('d M Y', strtotime($news->dated))}}</a>
                                    <a href="javascript:void()"
                                        class="alt-font font-weight-500 text-extra-medium text-dark-purple text-tussock-hover margin-15px-bottom d-block">

                                        {{Str::limit($news->heading, 24) ?? ''}}</a>
                                        <p>{!!Str::limit($news->description_guj, 94) ?? ''!!}</p>
                                </div>
                            </div>
                        </li>
                        <!-- end blog item -->
                      @endforeach 
                      @else
         <center><div class="alert alert-warning">
        <strong>Sorry!</strong> No Record Found.
        </div>

                     @endif   
                    </ul>
                </div>
            </div>
        @if(isset($newsevents) && count($newsevents) >0 )
            <div class="row">
                <div class="col-12 text-center">
                    <a href="{{route('home.news_events')}}"
                        class="btn btn-link thin btn-extra-large text-dark-purple margin-70px-top d-inline-block md-margin-40px-top sm-margin-20px-top">View
                        All News & Events</a>
                </div>
            </div>
        @endif    
        </div>
    </section>
     <!-- end section news and events-->

@php
$memberships = App\Models\Memberships::where('status', 'Active')->get();
@endphp
    <!-- start section clients or membership-->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row client-logo-style-04">
               @if(isset($memberships) && count($memberships) >0 )  
                    @foreach($memberships as $client)     
                <!-- start client logo item -->
                <div class="col text-center wow animate__fadeIn" data-wow-delay="0.2s">
                    <a href="#"><img src="{{ getMembership($client->logo) }}" class="border p-3" width="230" alt=""/></a>
                </div>
                <!-- end client logo item -->
              @endforeach 
            @endif     

            </div>
        </div>
    </section>
    <!-- end section clients or membership-->
</div>