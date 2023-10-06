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

                        @if($pageTitle)
                         <li>
                            @if(session()->get('language') == 'gujrati')
                            {{Str::title( $pageTitle->pname_guj) }}
                            @else
                            {{Str::title( $pageTitle->pname_eng) }}
                            @endif
                        </li>
                        @endif 
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
                        @endif 
                        </h6>
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
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">Societies at SNKKV</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Various Societies</h5>

                    <p>
                        Students are given the option of being a part of a number of societies on campus. 
                        These include: 
                    </p>

                    <div class="wow animate__fadeIn">
                        <div class="row align-items-center justify-content-center mb-4">
                            <div class="col-12 col-lg-12 wow animate__fadeIn">
                                <h6 class="alt-font font-weight-600 text-dark-purple">The Eco Club
                                </h6>    
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <img src="assets/images/ecoclub.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-10">
                                        As the name suggests, the eco club helps create awareness on environmental issues. Activites such as tree plantation and cleanliness drives, wildlife and marine camps, trekking expeditions, educational exhibitions and competitions are organised to successfully and actively create a sustainable impact.
                                    </div>
                                </div>                        
                                
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center mb-4">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">The National Cadet Corps (NCC)
                                </h6>  
                                <div class="row align-items-center">                                    
                                    <div class="col-lg-10">
                                        NCC works for the current socio–economic scenario of the country. The NCC aims at developing character, comradeship, discipline, a secular outlook, the spirit. Following the aims, the college students have joined the NCC in various wings to ensure that they prove to be an able citizen of the country.
                                    </div>
                                    <div class="col-lg-2">
                                        <img src="assets/images/ncc.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>                            
                                
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center mb-4">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">The National Service Scheme (NSS)
                                </h6>      
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <img src="assets/images/nss.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-10">
                                        NSS is an integral part of our school/college since the past thirty years. It orients the youth towards community service and creates awareness about social issues. Our girls adopt a village every year and transform it into a clean environment and teach the villagers the importance of education, personal hygiene, health check ups and also conduct regular blood donation camps.
                                    </div>
                                </div>                         
                                
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center mb-4">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Yoga
                                </h6>  
                                <div class="row align-items-center">
                                    <div class="col-lg-10">
                                        Calm, serene and mentally agile, the wellbeing of our students is honed to perfection with regular yoga sessions. The institute also partakes in the annual International Yog Day celebrations on 21st June.
                                    </div>
                                    <div class="col-lg-2">
                                        <img src="assets/images/yoga.jpg" class="img-fluid" alt="">
                                    </div>
                                </div>                            
                                
                            </div>
                        </div>

                        <div class="row align-items-center justify-content-center mb-4">
                            <div class="col-12 col-lg-12 wow animate__fadeIn" >
                                <h6 class="alt-font font-weight-600 text-dark-purple">Music
                                </h6>
                                <div class="row align-items-center">
                                    <div class="col-lg-2">
                                        <img src="assets/images/music.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-lg-10">
                                        We believe that music is therapeutic and nourishes the soul. We have a beautiful music room with rare and varied musical instruments on display. Our girl is spiritually strong because of a secular and all-encompassing approach towards humanity.
                                    </div>
                                </div>                              
                                
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
</div>
