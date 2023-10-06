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
<!-- show dynmaic data -->                    
@if(isset($pageData) && count($pageData)>0  )   
   @foreach ($pageData as $index => $data)          
                    @if (isset($data->image)) 
                    <img src="{{ asset('storage/uploads/page/' . $data->image) }}" class="img-fluid rounded mb-3" alt="">
                    @endif
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">
                  @if(session()->get('language') == 'gujrati')
                     {{$data->heading_guj ?? ''}}
                   @else                 
                    {{$data->heading ?? ''}}
                   @endif
                        </span>
                        </div>

                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">  
                  @if(session()->get('language') == 'gujrati')
                     {{$data->sub_heading_guj ?? ''}}
                  @else    
                   {{$data->sub_heading ?? ''}}
                  @endif 
                 </h5>

                    @if (isset($data->description))

                       @if(session()->get('language') == 'gujrati')

                          {!!$data->description_guj!!}
                       @else
                         {!!$data->description!!}
 
                       @endif
                         
                   @endif  
   @endforeach 

@else
<!-- show static data -->
   <img src="assets/images/about_historical_foundation.jpg" class="img-fluid rounded mb-3" alt="">
                    <div class="alt-font font-weight-500 my-3 d-flex">
                        <span class="flex-shrink-0 w-30px h-1px bg-tussock opacity-7 align-self-center margin-20px-right"></span>
                        <div class="flex-grow-1"><span class="text-tussock text-uppercase">
                    @if(session()->get('language') == 'gujrati')
                       માર્ગદર્શન અને સલાહકારી સેવાઓ
                    @else      
                       Guidance & Counselling
                    @endif   
                     </span>
                        </div>
                    </div>
                    <h5 class="alt-font text-dark-purple font-weight-600 w-85 margin-30px-bottom xl-w-100">
                  @if(session()->get('language') == 'gujrati')
                    માર્ગદર્શન અને સલાહકારી સેવાઓ
                  @else    
                    Counselling Cell
                  @endif  
                  </h5>

                  @if(session()->get('language') == 'gujrati')
                  <p>તે સમય હતુ જ્યારે માનસિક આરોગ્ય તેમ અત્યંત મુકાબલો ન કરવામાં આવતો હતો, ત્યારે સંસ્થા કેમ ન પણ માનસિક આરોગ્ય સંકલનનું યોગ્ય પ્રશાસન કરવાનું નિર્માણ કર્યું હતુ. આ પૂરી પાડી અને સારી સજ્જ થયેલું સલાહકારી સેલ ડૉ. અયનાબેન ત્રિવેદી દ્વારા ચાલાવવામાં આવે છે. સલાહકારી સેલ એક ખુલ્લો થશે જ્યારે વિદ્યાર્થીઓ સંપર્ક કરી અને સલાહકાર સાથે મળી શકે છે. તેમને વ્યાકરણ દરેક શૈક્ષણિક, વ્યક્તિગત અથવા કુટુંબિક વિવાદો વિશે કોઈ પણ સ્વીકૃતપાત્ર દ્રષ્ટિકોણ એકત્ર કરી શકે છે અથવા અકસ્માત મુકાબલો માં બોલી શકે છે અને વાત કરી શકે છે. </p>
                    <p>દરેક વિદ્યાર્થીની પરિચય અને શેર કરેલી માહિતી ગોપનીય રાખી છે.</p>
                    <p>આ સેલ ખાસ કરીને COVID-19 મહામારીના પરિપર્ણતાઓ માં મહત્વપૂર્ણ સાબિત થયો છે. </p>
                    <p>અમે આપણા વિદ્યાર્થીઓને માનસિક અને ભાવનાત્મક રીતે જીવન માટે માનસિક અને ભાવનાત્મક દ્રઢ બનાવવામાં સંકલ્પિત છીએ.  </p>
                  @else 
                    <p>At a time where mental health was not spoken about so freely, the institution established a psychological laboratory on campus. This fully fledged and well-equipped counselling cell is run by an expert counsellor, Dr. Ayanaben Trivedi. The counselling cell is an open space where students can take an appointment and meet the counsellor. They are free to share any educational, personal or family conflicts with the counsellor or at times just simply speak and vent and gather an unbiased perspective. </p>
                    <p>The identity of every student as well as the information shared is kept confidential. </p>
                    <p>The Cell has been highly beneficial for the girls, especially since the COVID-19 pandemic. </p>
                    <p>We strive to make our students mentally and emotionally strong for life.  </p>
                  @endif  
@endif                  
                </div>
            </div>
        </div>
    </section></div>
