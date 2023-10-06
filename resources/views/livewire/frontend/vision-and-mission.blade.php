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
                    <img src="assets/images/about_historical_foundation.jpg" class="img-fluid rounded mb-3" alt="">
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">Our Goals</span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">Goals of Our Institute</h5>


                    <h6 class="alt-font text-dark-purple font-weight-600 mb-3">The Vision</h6>
                    <p>To enrich young minds with value-based education with an objective of all round development. </p>

                    <h6 class="alt-font text-dark-purple font-weight-600 mb-3">The Logo</h6>
                    <div class="row mb-4">
                        <div class="col-lg-4">
                            <img src="assets/images/school-logo.png" alt="">
                        </div>
                        <div class="col-lg-8">
                            <p>The school logo has a Sanskrit mantra, which translates to, through knowledge one can achieve eternity or "amrutva". The logo depicts a boat sailing on the sea, which indicates that the ocean of knowledge is vast and the institution is the sailing boat on which, the students embark. </p>
                        </div>
                    </div>

                    <h6 class="alt-font text-dark-purple font-weight-600 mb-3">The Mission</h6>
                    <p>We strive to materialize on the vision of value-based education through</p>
                    <ul class="list-style-02">
                        <li class="margin-20px-bottom">
                            <i class="feather icon-feather-arrow-right-circle text-large text-dark position-relative margin-10px-right" aria-hidden="true"></i>
                            <span> Character Development </span>
                        </li>
                        <li class="margin-20px-bottom">
                            <i class="feather icon-feather-arrow-right-circle text-large text-dark position-relative margin-10px-right" aria-hidden="true"></i>
                            <span> Simple Living, Higher Thinking </span>
                        </li>
                        <li class="margin-20px-bottom">
                            <i class="feather icon-feather-arrow-right-circle text-large text-dark position-relative margin-10px-right" aria-hidden="true"></i>
                            <span> Education Beyond Textbook Learning </span>
                        </li>
                        <li class="margin-20px-bottom">
                            <i class="feather icon-feather-arrow-right-circle text-large text-dark position-relative margin-10px-right" aria-hidden="true"></i>
                            <span> Academic Excellence </span>
                        </li>
                        <li class="margin-20px-bottom">
                            <i class="feather icon-feather-arrow-right-circle text-large text-dark position-relative margin-10px-right" aria-hidden="true"></i>
                            <span> Balance Traditional Values and Modern Life  </span>
                        </li>
                    </ul>
                    <p>Our institution is associated with education along with preservation of customs and culture. We teach our students to treat everyone with respect and humility. To achieve all round development and character building the school has a strict discipline policy.</p>
                    <p>We believe that educating a girl is equal to educating a family.</p>
                </div>
            </div>
        </div>
    </section>

</div>
